<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to Guest Book</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/boostrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/custom/css/app.css" />


    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="bd-callout bd-callout-info">
                        <h2>Guest Book</h2>
                    </div>
                </div>        
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger print-error-msg" style="display:none"> </div>
                    <div class="alert alert-success print-success-msg" style="display:none"> </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <form id="guest_form">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group required">
                                    <label for="usr">Name: (required)</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>"  autocomplete="off">
                                </div>


                                <div class="form-group">
                                    <label for="pwd">Email: (required)</label>
                                    <input type="text" class="form-control" id="useremail" name="useremail" value="<?php echo set_value('useremail'); ?>"  autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Address: (required)</label>
                                    <input type="text" class="form-control" id="useraddress" name="useraddress" value="<?php echo set_value('useraddress'); ?>"  autocomplete="off">
                                </div>


                            </div>   
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="pwd">Message: (required)</label>
                                    <textarea class="form-control" rows="5" id="usermessage" name="usermessage"><?php echo set_value('usermessage'); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6Ld-3GYUAAAAAF_OjBvlDkD29gSMDdUIbKzJ1Del"></div>
                                </div>

                                <div class="form-group">
                                    <div style="text-align: right">
                                        <input type="reset" name="reset" class="btn btn-danger" value="Reset"/>
                                        <input type="submit" name="submit" class="btn btn-success " value="Submit"/>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>


            </div>

            <div class="row">
                <div class="col-md-12">

                    <table class="table table-hover">
                        <thead>
                            <tr class="table-active">
                                <th style="width: 10%">Name</th>
                                <th style="width: 20%">Email</th>
                                <th style="width: 20%">Address</th>
                                <th style="width: 50%">Message</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            // Show data
                            foreach ($guestbooks as $guestbook) {
                                ?>
                                <tr>
                                    <td><?php echo $guestbook->user_name; ?></td>
                                    <td><?php echo $guestbook->user_email; ?></td>
                                    <td><?php echo $guestbook->user_address; ?></td>
                                    <td><?php echo $guestbook->user_message; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>

            </div>
            <div class="row">
                <div class="col-md-offset-12">
                    <!--<nav aria-label="Page navigation example">-->
                    <?php echo $Links; ?>
                    <!--</nav>-->

                </div>

            </div>

        </div>

        <script>
            var js_base_url = "<?php echo base_url(); ?>";
        </script>

        <script type="text/javascript" src="<?php echo base_url() ?>bower_components/jquery/dist/jquery.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url() ?>bower_components/boostrap/dist/js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url() ?>bower_components/custom/js/app.js" ></script>

        <script src='https://www.google.com/recaptcha/api.js'></script>

    </body>
</html>