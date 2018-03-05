<?php
include_once('init.php');
include_once('header.php');
$message="";
if (count($_POST)>0) {
    $result = mysqli_query($config['conn'], "SELECT * FROM users WHERE name='" . $_POST["name"] . "' and password = '". $_POST["password"]."'");
    $count  = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if ($count==0) {
        $message = "Invalid Username or Password!";
    } else {
        $_SESSION["auth"] = true;
        $_SESSION["user_id"] = $row["id"];
        header('Location: ' . $config['home_url']);
    }
}

if (empty($_SESSION['user_id'])) {
    ?>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Bet Web</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>Login to Your Account</h1><br>
                <form name="login" method="post" action="<?= $config['home_url'] ?>/login.php">
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter username" name="name">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <input type="submit" name="submit" value="Submit" class="login loginmodal-submit">
                </form>
            </div>
        </div>
    </div>

    <script>
        <?php if ($message!="") {
        echo 'alert("'.$message.'");';
    } ?>
    </script>

    <script type="text/javascript">
        var _bt = _bt || [];
        _bt.push(['server', 'http://betgames.local']);
        _bt.push(['partner', 'betchange']);
        _bt.push(['token', '-']);
        _bt.push(['language', 'en']);
        _bt.push(['timezone', '0']);
        //_bt.push(['is_mobile', '<is_mobile>']);
        //_bt.push(['current_game', '<current_game>']);
        //_bt.push(['odds_format', '<odds_format>']);
        //_bt.push(['home_url', '<home_button_url>']);
        (function(){
            document.write('<'+'script type="text/javascript" src="http://betgames.local/design/client/js/betgames.js"><'+'/script>');
        })();
    </script>
    <script type="text/javascript">BetGames.frame(_bt);</script>

<?php
}
include_once('footer.php');
?>