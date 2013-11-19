<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
        <title>Login success</title>
    </head>
    <body>
        <div style="margin: 20px; width: 300px;">
            <?php
            echo $nothing;
            ?>
            <br/>
            <?php
            echo "Welcome, " . $username;
            ;
            ;
            ?>
        </div>
    </body>
</html>