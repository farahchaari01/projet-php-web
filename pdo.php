 <?php
    session_start();

            try{
                $pdo = new PDO("mysql:host=localhost;dbname=#", '#');
              
              }
            catch(PDOException  $e){
              print "Erreur !: " . $e->getMessage() ;
            }
        ?>