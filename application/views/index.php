<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <title>index@Start</title>
    </head>
    <body>
    <div class="container">
            <div class="row">
                <div class="col-md-8"><br><br>
                    
                <a href="<?php echo base_url(); ?>Ctrl_Admin/login_Admin"  class="btn btn-info"> Login Admin</a>
                <a href="<?php echo base_url(); ?>Ctrl_Pompiste/login_Pompiste" class="btn btn-info"> Login Pompiste</a>
                </div>
            </div>
        </div>

        
    </body>
</html>
