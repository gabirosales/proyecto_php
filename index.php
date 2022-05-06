<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="GET" action= "sumar.php" >
        <p>A:<input type="text" name= "a"></p>
        <p>B:<input type="text" name= "b"></p>
        <p> <input type="submit" value= "Sumar"></p>
    </form>

    <?php
        if(isset($_GET["a"]))
        {
            $a=$_GET["a"];
            $b=$_GET["b"];
            $s=$a+$b;
            echo "<p>La suma es $s </p>";

        }
    
    
    ?>




</body>
</html>