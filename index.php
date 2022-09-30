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
        <?php
            include('pageheaders.php');
            include('pages.php');
        ?>
        <title>Titel</title>
    </head>
    <body>
        <!-- Menu -->
        <header id="nav-wrapper">
            <nav id="nav">
                <div class="nav left">
                    <span class="gradient skew"><h1 class="logo un-skew"><a href="#page1">Logo and titel</a></h1></span>
                    <button id="menu" class="btn-nav"><span class="fas fa-bars"></span></button>
                </div>
                <div class="nav right">
                    <a href="#page1" class="nav-link active"><span class="nav-link-span"><span class="u-nav">Page 1</span></span></a>
                    <a href="#page2" class="nav-link"><span class="nav-link-span"><span class="u-nav">Page 2</span></span></a>
                    <a href="#page3" class="nav-link"><span class="nav-link-span"><span class="u-nav">Page 3</span></span></a>
                    <a href="#page4" class="nav-link"><span class="nav-link-span"><span class="u-nav">Page 4</span></span></a>
                    <a href="#page5" class="nav-link"><span class="nav-link-span"><span class="u-nav">Page 5</span></span></a>
                </div>
            </nav>
        </header>
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
                        ?>
                        <div class="innercontent">
                            <div class="maincontent">
                                <br>
                                <!-- page design in PS -->
                                <div class="pagetextR">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                    molestias veniam ex debitis molestiae nihil labore error fuga! 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                </div>
                                <br>
                                <div class="pagetextR">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                    molestias veniam ex debitis molestiae nihil labore error fuga! 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                </div>
                                <br>
                                <div class="pagetextM">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                    molestias veniam ex debitis molestiae nihil labore error fuga! 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet quaerat nostrum asperiores Lorem ipsum dolor sit amet
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet quaerat nostrum asperiores Lorem ipsum dolor sit amet
                                </div>
                            </div>
                        </div>
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
                        ?>
                        <div class="innercontent">
                            <div class="maincontent">
                                <br>
                                <!-- page design in PS -->
                                <div class="pagetextR">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                    molestias veniam ex debitis molestiae nihil labore error fuga! 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                </div>
                                <br>
                                <div class="pagetextR">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                    molestias veniam ex debitis molestiae nihil labore error fuga! 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                </div>
                                <br>
                                <div class="pagetextM">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                    molestias veniam ex debitis molestiae nihil labore error fuga! 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet quaerat nostrum asperiores Lorem ipsum dolor sit amet
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet quaerat nostrum asperiores Lorem ipsum dolor sit amet
                                </div>
                            </div>
                        </div>
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
                        ?>
                        <div class="innercontent">
                            <div class="maincontent">
                                <br>
                                <!-- page design in PS -->
                                <div class="pagetextR">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                    molestias veniam ex debitis molestiae nihil labore error fuga! 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                </div>
                                <br>
                                <div class="pagetextR">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                    molestias veniam ex debitis molestiae nihil labore error fuga! 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                </div>
                                <br>
                                <div class="pagetextM">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                    molestias veniam ex debitis molestiae nihil labore error fuga! 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    Placeat ipsum quibusdam et provident similique consectetur 
                                    voluptatem animi consequuntur! Autem! Libero delectus, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet quaerat nostrum asperiores Lorem ipsum dolor sit amet
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    Lorem ipsum dolor sit amet quaerat nostrum asperiores Lorem ipsum dolor sit amet
                                </div>
                            </div>
                        </div>
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
                        ?>
                        <div class="innercontent">
                            <div class="maincontent">
                                <br>
                                <!-- Photo 1 -->
                                <img src="" alt="Image 1" id="image1">
                                <div class="pagetext">
                                    <div class="pagetextR">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                        ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                        molestias veniam ex debitis molestiae nihil labore error fuga! 
                                        Placeat ipsum quibusdam et provident similique consectetur 
                                        voluptatem animi consequuntur! Autem! Libero delectus, 
                                        assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                    </div>
                                    <br>
                                    <div class="pagetextR">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                        ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                        molestias veniam ex debitis molestiae nihil labore error fuga! 
                                        Placeat ipsum quibusdam et provident similique consectetur 
                                        voluptatem animi consequuntur! Autem! Libero, 
                                    </div>
                                    <br>
                                    <div class="pagetextM">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                        ipsum dolor sit amet consectetur adipisicing elit. Neque dicta, 
                                        molestias veniam ex debitis molestiae nihil labore error fuga! 
                                        Placeat ipsum quibusdam et provident similique consectetur 
                                        voluptatem animi consequuntur! Autem! Libero delectus, 
                                        assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                        Placeat ipsum quibusdam et provident similique consectetur 
                                        voluptatem animi consequuntur! Autem! Libero delectus, 
                                        assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                        assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                        Lorem ipsum dolor sit amet quaerat nostrum asperiores Lorem ipsum dolor sit amet
                                        assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                        assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                        Lorem ipsum dolor sit amet quaerat nostrum asperiores Lorem ipsum dolor sit amet
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, 
                                        assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                        Lorem ipsum dolor sit amet quaerat nostrum asperiores Lorem ipsum dolor sit amet
                                        assumenda aliquid reiciendis debitis quam quaerat nostrum asperiores 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>