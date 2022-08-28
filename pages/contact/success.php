<link href="css/message_style.css" rel="stylesheet">
<?php
if (isset($_GET['return']) && $_GET['return'] = 'true') { ?>
    <div class="alert-msg">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3">
                    <br><br>
                    <h2 style="color:#0fad00">Your Contact details have been Successfully sent to Community Siren !</h2>
                    <img src="img/download.png">
                    <h3>Dear, <?php echo isset($_GET['name'])?$_GET['name']:''; ?></h3>
                    <p>Thank you for contacting us. We will get back to you as soon as possible.</p>
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