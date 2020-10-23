<?php
        /*-------------------connection à la base de données--------------------------------------------------------*/

        $servername = 'localhost';
        $dbname = 'clients_notarium';
        $username = 'root';
        $password = '';
        
        try {
                
            $dbco = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
            $dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            

        } catch(PDOException $e) {
            echo "Erreure : " . $e->getMessage();
            
        }
        /*--------------------------------------------------------------------------------------------------------------*/
