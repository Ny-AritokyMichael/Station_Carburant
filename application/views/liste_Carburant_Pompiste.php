<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <title>Pompiste (Liste@Employe)</title>
    </head>
    <body>
    <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"><br><br>
                <h3>Liste des charges du pompiste </h3>
                    
                    <table class="table">
                        <thead class="thead-light">
                        <th>Nom du pompiste</th>
                        <th>Carte d'identite</th>
                        <th>Nom du carburant</th>
                        <th>Prix du carburant</th>
                        <th>Quantite</th>
                        <th>Total </th>
                        <th>Renouveller</th>

                        </thead>

                        


                    </table>
                    <br>
                    <a href="<?php echo base_url(); ?>Ctrl_Pompiste/getid_Pompiste" class="btn btn-info"> Ajouter Carburant </a>
                    <a href="<?php echo base_url(); ?>Ctrl_Pompiste/deconnexion" class="btn btn-info"> Deconnexion </a>
                </div>
            </div>
        </div>  

        
    </body>
</html>