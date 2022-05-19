<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="./Javascript/script.js"></script>
        <link rel="stylesheet" href="./Css/desktop.css">
        <link rel="stylesheet" href="./Css/mobile.css">
        <link rel="icon" type="" href="">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= 414px, initial-scale=1.0">
        <meta name="description" content="">
        <title>Jesse Keijzers</title>
    </head>
    <body>
        <!-- grid layout -->
        <div class="grid-container">
            <!-- header/menu -->
            <div class="item1">
                Menu 
                <?php 
                 include 'menu.php';
                ?>
            </div>
            <!-- pagina content -->
            <div class="item2">
                Main
            </div>
            <!-- left banner  -->
            <div class="item3">
                Right
            </div>
            <!-- right banner -->
            <div class="item4">
                Left
            </div>
            <!-- site footer -->
            <div class="item5">
                Footer 
                <?php 
                  include 'footer.php';
                ?>
            </div>
        </div>
    </body>
</html>