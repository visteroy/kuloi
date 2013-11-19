<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
        <title>Login now</title>
    </head>
    <body>
        <div style="margin: 10px; width: 300px;">
            <form role="form" method=post action="<?php echo base_url(); ?>user/check_login">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail1">Username</label>
                    <input type=text name=username class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword1">Password</label>
                    <input type=password name=password class="form-control" id="exampleInputPassword1" placeholder="Enter password">
                </div>
                <input type="submit" name="submit_btn" class="btn btn-primary" value="Login">
                <input type=reset class="btn btn-danger" value="Reset">         
            </form>
        </div>
    </body>
</html>