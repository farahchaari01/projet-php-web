<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de vente en ligne</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
         
        <?php
            try{
                $dbco = new PDO("mysql:host=localhost;dbname=#", '#');
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              }
            catch(PDOException  $e){
              print "Erreur !: " . $e->getMessage() . "<br/>";
            }
        ?>
        
    </body>
</html>