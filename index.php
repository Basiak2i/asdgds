 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    asdasdasdasd
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