<?php 
    try   {
        $BDDH = "DB1.FREE-H.ORG";
        $BDDuser = "freeh_102353_24"; //user: freeh_102353_24
        $passwordBDD = 'Ra8r9B2W'; // mdp : Ra8r9B2W
        $bdd = new PDO("mysql:host=$BDDH;port=3306;dbname=freeh_db_102353", $BDDuser, $passwordBDD);
        $bdd->exec('SET CHARACTER SET utf8');
    } catch(Exception $e){
        die("error:" .$e->getMessage());
    }
?>