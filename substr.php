<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan string substr</h2>
    <?php 
        $string="Pemrograman web PHP";
        $word=substr($string,16,3);
        echo("<i>\"$string\"</i> <br>");
        echo("hasil substr (16,3) adalah $word");
    ?>
</body>
</html>