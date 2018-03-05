<?php
include_once('init.php');
include_once('header.php');
include_once('login.php');

if (isset($_SESSION['auth']) && $_SESSION['auth']) {
    $result = mysqli_query($config['conn'], "SELECT * FROM users WHERE id=" . $_SESSION["user_id"]);
    $row = mysqli_fetch_array($result);

    if (empty($row['token']) || $row['token_life']+$config['token_time'] < time()) {
        $new_token = $config['token_rand'];
        $sql = "UPDATE users SET token='".$new_token."', token_life=".time()." WHERE id=".$_SESSION['user_id'];
        if ($config['conn']->query($sql)) {
            $token = $new_token;
        } else {
            echo "Error updating record: " . $config['conn']->error;
        }
    } else {
        $token = $row['token'];
    } ?>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-img" src="logo.png"></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#" onclick="reload()">Reload iFrame</a></li>-->
                <li><a href="#">Logged in as <?= $row['name'] ?></a></li>
                <li><a href="#">Balance: <?= $row['balance']/100 ?> EUR</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <script type="text/javascript">
        var _bt = _bt || [];
        _bt.push(['server', 'http://betgames.local']);
        _bt.push(['partner', 'betchange']);
        _bt.push(['token', '<?= $token ?>']);
        _bt.push(['language', 'en']);
        _bt.push(['timezone', '0']);
        //_bt.push(['is_mobile', '<is_mobile>']);
        //_bt.push(['current_game', '<current_game>']);
        //_bt.push(['odds_format', '<odds_format>']);
        //_bt.push(['home_url', '<home_button_url>']);
        (function(){
            document.write('<'+'script id="bg-script" type="text/javascript" src="http://betgames.local/design/client/js/betgames.js"><'+'/script>');
        })();
    </script>
    <script type="text/javascript">BetGames.frame(_bt);</script>
    <?php
}
include_once('footer.php');
?>



