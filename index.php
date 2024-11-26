 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <div class="container">
    <div class="logo"></div>
    <div class="nav"></div>
    <div class="baner"></div>
    <div class="main">

        <div class="rekomendowane">
            <a href=""> <img src="" alt=""></a>
            <a href=""><img src="" alt=""></a>
        </div>
    </div>

    <div class="stopka">
        <div class="Autor">Autor: Michał Basiak</div>
        
    </div>
    </div>
 </body>
 </html>

 <?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'sklep_z_butami';

$connect = mysqli_connect($server, $user, $pass, $database);
if ($connect) {
    echo'skibidibidi';
}

?>