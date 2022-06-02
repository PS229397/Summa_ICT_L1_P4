<?php
    class MusicBoxDB
        {
            const DSN = "mysql:host=localhost;dbname=musicbox";
            const USER = "root";
            const PASSWD = "";
            
            //Read -> returns the rows. Returns false when error
            function RapTracks(){
                try{
                    $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

                    $statement = $pdo->prepare("SELECT * FROM `tracks` WHERE `FK_Genre_id` = '1';");

                    $statement->execute();

                    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                    return $rows;
                }
                catch(PDOException $e) {
                    return false;
                }
            }
            function RockTracks(){
                try{
                    $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

                    $statement = $pdo->prepare("SELECT * FROM `tracks` WHERE `FK_Genre_id` = '2';");

                    $statement->execute();

                    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                    return $rows;
                }
                catch(PDOException $e) {
                    return false;
                }
            }
            function DubstepTracks(){
                try{
                    $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

                    $statement = $pdo->prepare("SELECT * FROM `tracks` WHERE `FK_Genre_id` = '3';");

                    $statement->execute();

                    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                    return $rows;
                }
                catch(PDOException $e) {
                    return false;
                }
            }
            function DnbTracks(){
                try{
                    $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

                    $statement = $pdo->prepare("SELECT * FROM `tracks` WHERE `FK_Genre_id` = '4';");

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
