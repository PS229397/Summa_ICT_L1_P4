<?php
    include_once "./classes/MusicBoxDB.php";
    $db = new MusicBoxDB();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script type="text/javascript" src="./Javascript/script.js"></script>
        <link rel="stylesheet" href="./Css/desktop.css">
        <link rel="icon" type="" href="">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= 1080px, initial-scale=1.0">
        <meta name="description" content="">
        <title>The Music Box</title>
    </head>
    <body>
        <!-- Menu -->
        <header id="nav-wrapper">
            <nav id="nav">
                <div class="nav left">
                    <span class="gradient skew"><h1 class="logo un-skew"><a href="#rap">The Music Box</a></h1></span>
                    <button id="menu" class="btn-nav"><span class="fas fa-bars"></span></button>
                </div>
                <div class="nav right">
                    <a href="#rap" class="nav-link active"><span class="nav-link-span"><span class="u-nav">Rap</span></span></a>
                    <a href="#rock" class="nav-link"><span class="nav-link-span"><span class="u-nav">Rock</span></span></a>
                    <a href="#dubstep" class="nav-link"><span class="nav-link-span"><span class="u-nav">Dubstep</span></span></a>
                    <a href="#dnb" class="nav-link"><span class="nav-link-span"><span class="u-nav">Drum 'n' Bass</span></span></a>
                </div>
            </nav>
        </header>
        <main>
            <section id="rap">
                <div class="pagebackground">
                    <div class="pagecontent">
                        <br><br><br>
                        <div class="pageheaderout">
                            <div class="pageheadermid">
                                <div class="pageheaderin">
                                    <h1>Rap</h1>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <th class="trackid">Track-id</th>
                                <th class="song">Song</th>
                                <th class="artist">Artist</th>
                                <th class="playlist">Playlist</th>
                                <th class="playlist"><a href="<?= $db->GetGenrePlaylist('Rap')?>" target="_blank">HERE</th>
                            </tr>
                            <?php 
                                $dataArray = $db->RapTracks();
                                for($rowcounter = 0; $rowcounter < count($dataArray); $rowcounter++){
                            ?>
                            <tr>
                                <td class="trackid"><?= $dataArray[$rowcounter]["Track_id"] ?></td>
                                <td class="song"><?= $dataArray[$rowcounter]["Song"] ?></td>
                                <td class="artist"><?= $dataArray[$rowcounter]["Artist"] ?></td>
                                <td class="yt">
                                    <button><a href="<?= $dataArray[$rowcounter]["YT_Link"] ?>" target="_blank">Youtube</button>
                                </td>
                                <td class="yt">
                                    <button><a href="<?= $dataArray[$rowcounter]["SP_Link"] ?>" target="_blank">Spotify</button>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </section>
            <section id="rock">
                <div class="pagebackground">
                    <div class="pagecontent">
                        <br><br><br>
                        <div class="pageheaderout">
                            <div class="pageheadermid">
                                <div class="pageheaderin">
                                    <h1>Rock</h1>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <th class="trackid">Track-id</th>
                                <th class="song">Song</th>
                                <th class="artist">Artist</th>
                                <th class="playlist">Playlist</th>
                                <th class="playlist"><a href="<?= $db->GetGenrePlaylist('Rock')?>" target="_blank">HERE</th>
                            </tr>
                            <?php 
                                $dataArray = $db->RockTracks();
                                for($rowcounter = 0; $rowcounter < count($dataArray); $rowcounter++){
                            ?>
                            <tr>
                                <td class="trackid"><?= $dataArray[$rowcounter]["Track_id"] ?></td>
                                <td class="song"><?= $dataArray[$rowcounter]["Song"] ?></td>
                                <td class="artist"><?= $dataArray[$rowcounter]["Artist"] ?></td>
                                <td class="yt">
                                    <button><a href="<?= $dataArray[$rowcounter]["YT_Link"] ?>" target="_blank">Youtube</button>
                                </td>
                                <td class="yt">
                                    <button><a href="<?= $dataArray[$rowcounter]["SP_Link"] ?>" target="_blank">Spotify</button>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </section>
            <section id="dubstep">
                <div class="pagebackground">
                    <div class="pagecontent">
                        <br><br><br>
                        <div class="pageheaderout">
                            <div class="pageheadermid">
                                <div class="pageheaderin">
                                    <h1>Dubstep</h1>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <th class="trackid">Track-id</th>
                                <th class="song">Song</th>
                                <th class="artist">Artist</th>
                                <th class="playlist">Playlist</th>
                                <th class="playlist"><a href="<?= $db->GetGenrePlaylist('Dubstep')?>" target="_blank">HERE</th>
                            </tr>
                            <?php 
                                $dataArray = $db->DubstepTracks();
                                for($rowcounter = 0; $rowcounter < count($dataArray); $rowcounter++){
                            ?>
                            <tr>
                                <td class="trackid"><?= $dataArray[$rowcounter]["Track_id"] ?></td>
                                <td class="song"><?= $dataArray[$rowcounter]["Song"] ?></td>
                                <td class="artist"><?= $dataArray[$rowcounter]["Artist"] ?></td>
                                <td class="yt">
                                    <button><a href="<?= $dataArray[$rowcounter]["YT_Link"] ?>" target="_blank">Youtube</button>
                                </td>
                                <td class="yt">
                                    <button><a href="<?= $dataArray[$rowcounter]["SP_Link"] ?>" target="_blank">Spotify</button>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>  
                        </table>
                    </div>
                </div>
            </section>
            <section id="dnb">
                <div class="pagebackground">
                    <div class="pagecontent">
                        <br><br><br>
                        <div class="pageheaderout">
                            <div class="pageheadermid">
                                <div class="pageheaderin">
                                    <h1>Drum 'n' Bass</h1>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <th class="trackid">Track-id</th>
                                <th class="song">Song</th>
                                <th class="artist">Artist</th>
                                <th class="playlist">Playlist</th>
                                <th class="playlist"><a href="<?= $db->GetGenrePlaylist("Drum 'n' Bass")?>" target="_blank">HERE</th>
                            </tr>
                            <?php 
                                $dataArray = $db->DnbTracks();
                                for($rowcounter = 0; $rowcounter < count($dataArray); $rowcounter++){
                            ?>
                            <tr>
                                <td class="trackid"><?= $dataArray[$rowcounter]["Track_id"] ?></td>
                                <td class="song"><?= $dataArray[$rowcounter]["Song"] ?></td>
                                <td class="artist"><?= $dataArray[$rowcounter]["Artist"] ?></td>
                                <td class="yt">
                                    <button><a href="<?= $dataArray[$rowcounter]["YT_Link"] ?>" target="_blank">Youtube</button>
                                </td>
                                <td class="yt">
                                    <button><a href="<?= $dataArray[$rowcounter]["SP_Link"] ?>" target="_blank">Spotify</button>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>  
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>