<link href="css/message_style.css" rel="stylesheet">
<?php
if (isset($_GET['return']) && $_GET['return'] = 'invalid') { ?>
    <div class="alert-msg">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3">
                    <br><br>
                    <h2 class="unauthentic">ERROR ! Unauthentication</h2>
                    <img src="img/warning.png">
                    <p>Please, enter your correct information to contact with us.</p>
                    <p>THANK YOU !</p>
                    <a href="https://www.pioneersoftech.com/communitysiren" class="text-decoration-none linking text-themecolor mt-2"><< Get Back To Home</a>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
<?php } else {
    header("Location: https://www.pioneersoftech.com/communitysiren");
    exit();
}
?>