<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | UptimeRobot</title>
    <meta name="description" content="Get up to 50 website, port or heartbeat monitors for free. When something happens, be alerted via email, SMS, Telegram, Slack or many more ways.">

    <meta property="og:title" content="Login | UptimeRobot" />
    <meta property="og:site_name" content="UptimeRobot" />
    <meta property="og:description" content="Get up to 50 website, port or heartbeat monitors for free. When something happens, be alerted via email, SMS, Telegram, Slack or many more ways." />
    <meta property="og:image" content="https://www.uptimerobot.com/facebook.jpg?v=1645173799" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/pl-form/select2-3.5.2/select2.css?v0.1">
    <style>
        .select2-choice {
            padding: 0 15px !important;
            line-height: 56px !important;
            width: 100%;
            border: 1px solid #687790 !important;
            border-radius: 2px !important;
            font-size: 18px;
            height: auto !important;
        }

        .select2-container .select2-choice .select2-arrow {
            border-radius: 0 2px 2px 0 !important;
        }

        .select2-container .select2-choice .select2-arrow b {
            margin-top: 15px;
        }

        .select2-search-choice-close {
            margin-top: 13px;
        }

        .select2-result-label {
            color: #131a26 !important;
            padding: 10px 15px !important;
            border-bottom: 1px solid #edf0f4 !important;
        }

        .select2-highlighted {
            background: #edf0f4 !important;
        }

        .select2-search {
            display: none;
        }

        .select2-container {
            margin-top: 15px;
        }

        .select2-results {
            max-height: 300px !important;
        }
    </style>
    <link href="<?php echo base_url('assets/css/lib/ladda-themeless.min.css');?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        .select2-container .select2-choices .select2-search-field input {
            background: none !important;
            background-color: #F5F6F9;
        }

        .select2-container .select2-choices {
            background-color: #F5F6F9;
            border: 0;
        }

        .select2-container.select2-container-active .select2-choice {
            border: 0;
        }
    </style>
   </head>

<body>

        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMWSCG3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

        <section class="bg-circles uk-section uk-section-secondary uk-section-medium uk-height-viewport">
            <div class="uk-container">
                <div class="uk-margin-bottom uk-text-center">
                    <a href="https://uptimerobot.com"><img src="<?php echo base_url();?>assets/img/uptimerobot-logo.svg" alt="UptimeRobot logo" width="200" /></a>
                </div>
                <div class="uk-width-1-3@l uk-width-1-2@m uk-container">
                    <h1 class="popover-title uk-text-center">Welcome back!</h1>
                    <div class="card">
                        <div class="login-messages">
                            <div id="loginNotificationHolder" style="list-style: none;"></div>
                        </div>
                    
<form  id="forgotPassword" action="<?php echo base_url('UpTimeRobotController/forgotPassword');?>" method="POST">
    <div class="uk-alert uk-alert-info uk-margin-small uk-text-small">
        We will send password reset link to your e-mail.
    </div>
    <?php 
   echo $this->session->flashdata('msg');
    ?>
    <div class="form-group uk-margin-small-bottom">
        <label for="userEmailForgotPassword" class="uk-text-muted uk-text-small">Enter your account e-mail</label>
        <input type="text" id="userEmailForgotPassword" name="email" class="uk-input uk-form-large" placeholder="e.g. mailto:elon@tesla.com">
    </div>
    <div class="g-recaptcha" data-sitekey="6LeE3BETAAAAABvShHY2njRVSmbU7e2bquL4tPfw"></div>
    <div id="forgotPasswordNotificationHolder" class="uk-alert uk-alert-block" style="display:none;"></div>
<input type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-top" value="Send password reset link">
    <div class="uk-text-center uk-margin-small-top uk-text-small">
        <a href="#" class="pull-right switchToLogin">Back to Log In</a>
    </div>
</form>
    <footer class="uk-text-center uk-margin-top uk-text-small uk-text-muted">
        UptimeRobot ® 2022. All Rights Reserved
    </footer>


    <script src="<?php echo base_url('assets/js/lib/jquery.js');?>"></script>
    <script src="<?php echo base_url();?>assets/js/lib/bootstrap/bootstrap3_3_5.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/lib/favico.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-system/nicescroll/jquery.nicescroll-3_6_0.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-system-info/qtip2/dist/jquery.qtip.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-system-info/notyfy/jquery.notyfy.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-system/momentjs/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-content/jquery.bullseye/jquery.bullseye-1.0-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-content/truncate/jquery.truncate.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-form/select2-3.5.2/select2.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-form/validate/js/jquery.validate.min.js?v1.19.3"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-form/noUiSlider/jquery.nouislider.min2.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-form/creditCardValidator/jquery.creditCardValidator.js?v1.1"></script>
    <script src="<?php echo base_url();?>assets/js/lib/cookieconsent.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/cookieconsent_for_ur.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-form/form/jquery.form.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-visualization/knob/knob.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-visualization/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-visualization/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pl-visualization/flot/jquery.flot.time.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/common.js?v1.226"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/lib/spin.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/lib/ladda.js"></script>
        </div>
        </div>
        </div>
        </section>
</body>

</html>