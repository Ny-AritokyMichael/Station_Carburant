<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <title> insert@Pompiste</title>
    </head>
    <body>
        <h1>Insertion d'un nouveau pompiste</h1>


        <form class="form-horizontal" action="<?php echo base_url(); ?>Ctrl_Pompiste/insert_Pompiste_Page   " method="post">
            <div class="form-group">
                <label class="col-sm-2 control-label">Votre nom </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="nom" name="nom">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Votre Carte d'identite</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="11 chiffres" name="cin">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Votre email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="nom" name="email">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Votre mot de passe</label>
                    <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Password" name="mdp">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit"  class="btn btn-primary"> Inserer </button>
                </div>
            </div>
        </form>

        
    </body>
</html>