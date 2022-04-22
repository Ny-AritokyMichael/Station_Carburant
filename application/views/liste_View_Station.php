<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <title>Pompiste (Login@Employe)</title>
    </head>
    <body>
    <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"><br><br>
                <h3>Liste des employes </h3>
                    
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
                        <?php for($i = 0;$i<count($data) ; $i++ ){  ?>
                        
                        <tbody>
                            <tr>
                                <td><?php echo $data[$i]->getNom_Pompiste();  ?></td>
                                <td><?php echo $data[$i]->getCin();  ?></td>
                                <td><?php echo $data[$i]->getNom_Carburant();  ?></td>
                                <td><?php echo $data[$i]->getPrix_Carburant();  ?></td>
                                <td><?php echo $data[$i]->getQuantite();  ?></td>
                                <td><?php echo ($data[$i]->getQuantite() * $data[$i]->getPrix_Carburant());  ?></td>
                                <td><a href="#" class="btn btn-info"> Modifier </a> <h2> </h2> <a href="<?php echo base_url(); ?>Ctrl_View/delete?id_details_carburant=<?php echo $data[$i]->getId_Details_Carburant(); ?>" class="btn btn-info"> Supprimer </a></td>
                                <!-- <td>
                                    <form method="post" action="#">
                                        <input type="hidden" name="idProduit" value="">
                                        <input type="submit" value="ok">

                                    </form>
                                </td> -->
                            </tr>
                        </tbody>

                        <?php }  ?>

                    </table>
                    <br>
                    <a href="<?php echo base_url(); ?>Ctrl_Pompiste/getSimple" class="btn btn-info"> Ajouter Carburant </a>
                    <a href="<?php echo base_url(); ?>Ctrl_Pompiste/deconnexion"     class="btn btn-info"> Deconnexion </a>
                </div>
            </div>
        </div>  

        
    </body>
</html>