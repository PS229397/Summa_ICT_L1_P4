<?php
    class MusicBoxDB
        {
            const DSN = "mysql:host=localhost;dbname=musicbox";
            const USER = "root";
            const PASSWD = "";
            
            //Read -> returns the rows. Returns false when error
            function GetGenrePlaylist(string $genre){
                try{
                    $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

                    $statement = $pdo->prepare("SELECT Playlist FROM `genres` WHERE `Genre` = :genre;");

                    $statement->bindParam(':genre', $genre); 

                    $statement->execute();

                    return $statement->fetchColumn(0);
                    
                }
                catch(PDOException $e){
                    var_dump($e);
                    die();
                }
            }
            function RapTracks(){
                try{
                    $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

                    $statement = $pdo->prepare("SELECT * FROM `tracks` WHERE `Genre` = 'Rap';");

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

                    $statement = $pdo->prepare("SELECT * FROM `tracks` WHERE `Genre` = 'Rock';");

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

                    $statement = $pdo->prepare("SELECT * FROM `tracks` WHERE `Genre` = 'Dubstep';");

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

                    $statement = $pdo->prepare("SELECT * FROM `tracks` WHERE `Genre` = \"Drum 'n' Bass\";");

                    $statement->execute();

                    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                    return $rows;
                }
                catch(PDOException $e) {
                    var_dump($e);
                    return false;
                }
            }
        }
?>
