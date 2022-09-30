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
        <title>Title</title>
        <?php
            include('pageheaders.php');
            include('pages.php');
        ?>
    </head>
    <body>
        <!-- Menu -->
        <?php 
            include('menu.php');
        ?>
        <!-- main section -->
        <main> 
            <!-- page 1 -->
            <section id="page1">
                <img class="bgimg" src="./Images/background.png" alt="background"/>
                <div class="pagebackground">
                    <div class="pagecontent">
                        <br><br><br>
                        <?php
                            header_1();
                            
                            page_1();
                        ?>    
                    </div>
                </div>
            </section>
            
            <!-- page 2 -->
            <section id="page2">
                <img class="bgimg" src="./Images/background.png" alt="background" />
                <div class="pagebackground">
                    <div class="pagecontent">
                        <br><br><br>
                        <?php
                            header_2();

                            page_2();
                        ?>
                    </div>
                </div>
            </section>
            
            <!-- page 3 -->
            <section id="page3">
                <img class="bgimg" src="./Images/background.png" alt="background" />
                <div class="pagebackground">
                    <div class="pagecontent">
                        <br><br><br>
                        <?php
                            header_3();

                            page_3();
                        ?>
                    </div>
                </div>
            </section>
            
            <!-- page 4 -->
            <section id="page4">
                 <img class="bgimg" src="./Images/background.png" alt="background" />
                <div class="pagebackground">
                    <div class="pagecontent">
                        <br><br><br>
                        <?php
                            header_4();

                            page_4();
                        ?>
                    </div>
                </div>
            </section>
            
            <!-- page 5 -->
            <section id="page5">
                <img class="bgimg" src="./Images/background.png" alt="background" />
                <div class="pagebackground">
                    <div class="pagecontent">
                        <br><br><br>
                        <?php
                            header_5();

                            page_5();
                        ?>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>