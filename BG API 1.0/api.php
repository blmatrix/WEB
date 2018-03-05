<?php

    include_once('init.php');

    $request_xml = new SimpleXMLElement(file_get_contents('php://input'));
    $xml = (array) $request_xml;
    $xml['params'] = (array) $request_xml->params;

    switch ($xml['method']) {
        case 'ping':
            send_response($xml['method'], call_user_func_array($xml['method'], array($xml, $config)), $config);
            break;
        case 'get_account_details':
            send_response($xml['method'], call_user_func_array($xml['method'], array($xml, $config)), $config);
            break;
        case 'refresh_token':
            send_response($xml['method'], call_user_func_array($xml['method'], array($xml, $config)), $config);
            break;
        case 'request_new_token':
            send_response($xml['method'], call_user_func_array($xml['method'], array($xml, $config)), $config);
            break;
        case 'get_balance':
            send_response($xml['method'], call_user_func_array($xml['method'], array($xml, $config)), $config);
            break;
        case 'transaction_bet_payin':
            send_response($xml['method'], call_user_func_array($xml['method'], array($xml, $config)), $config);
            break;
        case 'transaction_bet_payout':
            send_response($xml['method'], call_user_func_array($xml['method'], array($xml, $config)), $config);
            break;
    }

    function ping($xml, $config)
    {
        $response['token'] = $xml['token'];
        $validation = request_validation($xml, $config);
        if (isset($validation['error_text'])) {
            $response['error_code'] = $validation['error_code'];
            $response['error_text'] = $validation['error_text'];
        } else {
            // nothing
        }

        return $response;
    }

    function get_account_details($xml, $config)
    {
        $response['token'] = $xml['token'];
        $validation = request_validation($xml, $config);
        if (isset($validation['error_text'])) {
            $response['error_code'] = $validation['error_code'];
            $response['error_text'] = $validation['error_text'];
        } else {
            $user = get_user_by_token($xml['token'], $config);
            $response['params'] = [
                'user_id' => $user['id'],
                'username' => $user['name'],
                'currency' => 'eur',
                'info' => 'Vilnius, LT',
            ];
        }
        return $response;
    }

    function refresh_token($xml, $config)
    {
        $response['token'] = $xml['token'];
        $validation = request_validation($xml, $config);
        if (isset($validation['error_text'])) {
            $response['error_code'] = $validation['error_code'];
            $response['error_text'] = $validation['error_text'];
        } else {
            $response['token'] = $xml['token'];
        }

        return $response;
    }

    function request_new_token($xml, $config)
    {
        $response['token'] = $xml['token'];
        $validation = request_validation($xml, $config);
        if (isset($validation['error_text'])) {
            $response['error_code'] = $validation['error_code'];
            $response['error_text'] = $validation['error_text'];
        } else {
            $response['params']['new_token'] = $config['token_rand'];

            $sql_token = "UPDATE users SET token='".$response['params']['new_token']."' WHERE token='".$xml['token']."'";

            if ($config['conn']->query($sql_token) !== true) {
                $response['error_code'] = 101;
                $response['error_text'] = 'Error while updating token in database';
            }
        }

        return $response;
    }

    function get_balance($xml, $config)
    {
        $response['token'] = $xml['token'];
        $validation = request_validation($xml, $config);
        if (isset($validation['error_text'])) {
            $response['error_code'] = $validation['error_code'];
            $response['error_text'] = $validation['error_text'];
        } else {
            $user = get_user_by_token($xml['token'], $config);

            $response['params']['balance'] = $user['balance'];
        }

        return $response;
    }

    function transaction_bet_payin($xml, $config)
    {
        $response['token'] = $xml['token'];
        $validation = request_validation($xml, $config);
        if (isset($validation['error_text'])) {
            $response['error_code'] = $validation['error_code'];
            $response['error_text'] = $validation['error_text'];
        } else {
            $user = get_user_by_token($xml['token'], $config);
            $result = mysqli_query($config['conn'], "SELECT * FROM bg_payin WHERE transaction_id=".$xml['params']['transaction_id']);
            $count = mysqli_num_rows($result);

            if ($count == 0) {
                if ($user['balance'] >= $xml['params']['amount']) {
                    $balance = [
                        'old' => $user['balance'],
                        'new' => $user['balance'] - $xml['params']['amount']
                    ];
                    $update_balance = "UPDATE users SET balance=".$balance['new']." WHERE token='".$xml['token']."'";
                    if ($config['conn']->query($update_balance) == true) {
                        $sql = "INSERT INTO bg_payin (transaction_id, bet_id, amount, draw_code, draw_time, currency, retrying, bet, odd, bet_time, user_id, user_balance_before, user_balance_after
                    ) VALUES (".$xml['params']['transaction_id'].", ".$xml['params']['bet_id'].", ".$xml['params']['amount'].", ".$xml['params']['draw_code'].", ".strtotime($xml['params']['draw_time']).", 'eur', ".$xml['params']['retrying'].", '".$xml['params']['bet']."', ".$xml['params']['odd'].", ".strtotime($xml['params']['bet_time']).", ".$user['id'].", ".$balance['old'].", ".$balance['new'].")";

                        if ($config['conn']->query($sql) == true) {
                            $response['params']['balance_after'] = $balance['new'];
                            $response['params']['already_processed'] = 0;
                        } else {
                            $response['error_code'] = 103;
                            $response['error_text'] = 'Payin data is not inserted into database';
                        }
                    } else {
                        $response['error_code'] = 101;
                        $response['error_text'] = 'User balance is not updated in database';
                    }
                } else {
                    $response['error_code'] = 4;
                    $response['error_text'] = 'insufficient balance';
                }
            } elseif ($count == 1) {
                $response['params']['balance_after'] = $user['balance'];
                $response['params']['already_processed'] = 1;
            } elseif ($count > 1) {
                $response['error_code'] = 102;
                $response['error_text'] = 'More than one bet with same Transaction ID';
            }
        }

        return $response;
    }

    function transaction_bet_payout($xml, $config)
    {
        $response['token'] = '-';
        $validation = request_validation($xml, $config);
        if (isset($validation['error_text'])) {
            $response['error_code'] = $validation['error_code'];
            $response['error_text'] = $validation['error_text'];
        } else {
            $result = mysqli_query($config['conn'], "SELECT * FROM bg_payout WHERE transaction_id=".$xml['params']['transaction_id']);
            $count = mysqli_num_rows($result);

            if ($count == 0) {
                $result = mysqli_query($config['conn'], "SELECT * FROM bg_payin WHERE bet_id=".$xml['params']['bet_id']);
                $count = mysqli_num_rows($result);

                if ($count == 1) {
                    $result = mysqli_query($config['conn'], "SELECT * FROM bg_payout WHERE bet_id=".$xml['params']['bet_id']);
                    $count = mysqli_num_rows($result);
                    if ($count == 0) {
                        $user = get_user_by_id($xml['params']['player_id'], $config);
                        $balance = [
                            'old' => $user['balance'],
                            'new' => $user['balance'] + $xml['params']['amount']
                        ];
                        $update_balance = "UPDATE users SET balance=".$balance['new']." WHERE id='".$xml['params']['player_id']."'";
                        if ($config['conn']->query($update_balance) == true) {
                            $sql = "INSERT INTO bg_payout (player_id, amount, currency, bet_id, transaction_id, retrying, balance_before, balance_after, already_processed, payout_time            
                        ) VALUES (".$xml['params']['player_id'].", ".$xml['params']['amount'].", 'eur', ".$xml['params']['bet_id'].", ".$xml['params']['transaction_id'].", ".$xml['params']['retrying'].", ".$balance['old'].", ".$balance['new'].", 1, ".time().")";

                            if ($config['conn']->query($sql) == true) {
                                $response['params']['balance_after'] = $balance['new'];
                                $response['params']['already_processed'] = 0;
                            } else {
                                $response['error_code'] = 106;
                                $response['error_text'] = 'Payin data is not inserted into database';
                            }
                        } else {
                            $response['error_code'] = 105;
                            $response['error_text'] = 'User balance is not updated in database';
                        }
                    } elseif ($count >= 1) {
                        $user = get_user_by_id($xml['params']['player_id'], $config);
                        $response['params']['balance_after'] = $user['balance'];
                        $response['params']['already_processed'] = 1;
                    }
                } elseif ($count == 0) {
                    $response['error_code'] = 700;
                    $response['error_text'] = 'there is no PAYIN with provided bet_id';
                } elseif ($count > 1) {
                }
            } elseif ($count == 1) {
                $user = get_user_by_id($xml['params']['player_id'], $config);
                $response['params']['balance_after'] = $user['balance'];
                $response['params']['already_processed'] = 1;
            } elseif ($count > 1) {
                $response['error_code'] = 104;
                $response['error_text'] = 'More than one payout with same Transaction ID';
            }
        }

        return $response;
    }

    function check_signature($xml, $config)
    {
        $signature = $xml['signature'];
        unset($xml['signature']);

        $arr = $xml;

        if (empty($arr['params'])) {
            unset($arr['params']);
        } else {
            $params = $arr['params'];
            unset($arr['params']);

            foreach ($params as $key => $val) {
                $arr[$key] = $val;
            }
        }

        $str = http_build_query($arr);

        $str = str_replace("&", "", $str);
        $str = str_replace("+", " ", $str);
        $str = str_replace("%2C", ",", $str);
        $str = str_replace("=", "", $str);
        $str = str_replace("%3A", ":", $str);
        $str = str_replace("%28", "(", $str);
        $str = str_replace("%29", ")", $str);

        $check_signature = md5($str.$config['api_key']);
        if ($signature == $check_signature) {
            return true;
        } else {
            return false;
        }
    }

    function check_time($xml, $config)
    {
        if (time()-$config['request_time_diff'] >= $xml['time']) {
            return false;
        } else {
            return true;
        }
    }

    function check_token($xml, $config)
    {
        $result = mysqli_query($config['conn'], "SELECT * FROM users WHERE token='" . $xml['token'] . "'");
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if ($count > 0) {
            if ($row['token_life'] > time()-$config['token_time']) {
                return true;
            }
        }
        return false;
    }

    function get_user_by_token($token, $config)
    {
        $result = mysqli_query($config['conn'], "SELECT * FROM users WHERE token='" . $token . "'");
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if ($count == 1) {
            $response = $row;
        } elseif ($count > 1) {
            $response['error_text'] = 'Found more than 1 user with such token';
        } elseif ($count == 0) {
            $response['error_text'] = 'User with such token is not found';
        }
        return $response;
    }

    function get_user_by_id($id, $config)
    {
        $result = mysqli_query($config['conn'], "SELECT * FROM users WHERE id='" . $id . "'");
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if ($count == 1) {
            $response = $row;
        } elseif ($count > 1) {
            $response['error_text'] = 'Found more than 1 user with such id';
        } elseif ($count == 0) {
            $response['error_text'] = 'User with such ID is not found';
        }
        return $response;
    }

    function refresh_token_lifetime($token, $config)
    {
        $sql_token_lifetime = "UPDATE users SET token_life=".time()." WHERE token='".$token."'";
        if ($config['conn']->query($sql_token_lifetime) === true) {
            return true;
        } else {
            return false;
        }
    }

    function sign_response($response, $config)
    {
        $arr = $response;

        if (empty($arr['params'])) {
            unset($arr['params']);
        } else {
            $params = $arr['params'];
            unset($arr['params']);

            foreach ($params as $key => $val) {
                $arr[$key] = $val;
            }
        }

        $str = http_build_query($arr).$config['api_key'];

        $str = str_replace("&", "", $str);
        $str = str_replace("+", " ", $str);
        $str = str_replace("%2C", ",", $str);
        $str = str_replace("=", "", $str);
        $str = str_replace("%3A", ":", $str);
        $str = str_replace("%28", "(", $str);
        $str = str_replace("%29", ")", $str);

        return md5($str);
    }

    function request_validation($xml, $config)
    {
        if ($xml['method'] == 'ping' || $xml['method'] == 'transaction_bet_payout') {
            if (!check_signature($xml, $config)) {
                $response['error_code'] = 1;
                $response['error_text'] = 'wrong signature';
            }
            if (!check_time($xml, $config)) {
                $response['error_code'] = 2;
                $response['error_text'] = 'request is expired';
            }
        } else {
            if (!check_signature($xml, $config)) {
                $response['error_code'] = 1;
                $response['error_text'] = 'wrong signature';
            }
            if (!check_time($xml, $config)) {
                $response['error_code'] = 2;
                $response['error_text'] = 'request is expired';
            }
            if (!check_token($xml, $config)) {
                $response['error_code'] = 3;
                $response['error_text'] = 'invalid token';
            }
        }

        if (!empty($response)) {
            return $response;
        } else {
            return true;
        }
    }


    function array_to_xml(SimpleXMLElement $object, array $data)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $new_object = $object->addChild($key);
                array_to_xml($new_object, $value);
            } else {
                $object->addChild($key, $value);
            }
        }
    }

    function send_response($method, $response, $config)
    {
        $r['method'] = $method;

        $r['token'] = $response['token'];

        if (isset($response['error_text'])) {
            $r['success'] = 0;
            $r['error_code'] = $response['error_code'];
            $r['error_text'] = $response['error_text'];
        } else {
            $r['success'] = 1;
            $r['error_code'] = 0;
            $r['error_text'] = '';
        }
        $r['time'] = time();
        $r['params'] = (!empty($response['params']) ? $response['params'] : '');
        $r['signature'] = sign_response($r, $config);

        refresh_token_lifetime((empty($response['params']['new_token']) ? $response['token'] : $response['params']['new_token']), $config);

        if (!empty($r)) {
            $xml_response = new SimpleXMLElement('<root/>');
            array_to_xml($xml_response, $r);
            print $xml_response->asXML();
        } else {
            echo 'Response error on method '.$method;
        }
    }
