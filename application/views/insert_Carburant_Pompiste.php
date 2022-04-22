<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <link href= "<?php echo js_loader("js"); ?>" rel="stylesheet"> 


        <title>Pompiste (Insertion@Employe)</title>
    </head>
    <body>
        <h1>Insertion de Carburant</h1>
        

        <form class="form-horizontal" action="<?php echo base_url(); ?>Ctrl_Details_Carburant/insert_Details_Carburant_Pompiste" method="post">
        <div class="form-group">
                        <div class="col-sm-10">
                    <input type="hidden" class="form-control" value="<?php echo $id->getId_Pompiste(); ?>" placeholder="" name="id_Pompiste"> 
                    </div>
                </div>
        
                <div class="form-group">
                <label class="col-sm-2 control-label">Carburant</label>
                <div class="col-sm-10">
                    <select name="nom_Carburant" id="pet-select"  onchange="Visible('champs1')">
                        <option value="essence">Essence</option>
                        <option value="gasoil">Gasoil</option>
                        <option value="petrole">Petrole</option>
                    </select>  
                </div>
            </div>
            <div style="visibility:hidden" id="champs1">


                <div class="form-group">
                    <label  class="col-sm-2 control-label">Quantite</label>
                        <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Litre(s)" name="quantite"> 
                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit"  class="btn btn-primary"> Inserer </button>
                    </div>
                </div>
            </div>
        </form>

        
    </body>
    </html>

















    

    
    <script type="text/javascript">
        
        function Visible(champs)
        {
          var Obj = document.getElementById(champs);
          if (Obj.style.visibility == 'hidden')
            {
                Obj.style.visibility = 'visible';
            }
          else
            {
                Obj.style.visibility = 'hidden';
            }
        }
      
      </script>
