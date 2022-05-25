<?php
    class MusicBoxDB
        {
            const DSN = "mysql:host=localhost;dbname=musicbox";
            const USER = "root";
            const PASSWD = "";
            
            //Read -> returns the rows. Returns false when error
            function selectTrack(){
                try{
                    $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

                    $statement = $pdo->prepare("SELECT * FROM tracks;");

                    $statement->execute();

                    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                    return $rows;
                }
                catch(PDOException $e) {
                    return false;
                }
            }
        }
?>
