
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="conect.php" method="POST">
<input type="submit" value="submit" name="submit">
</form>
</head>
<body>
    
</body>
</html>


<?php


if(isset($_POST['submit'])){  
    try {
        $connection = new PDO("mysql:host=localhost;dbname=amine","root","");
        $connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "connected with success";
    }catch(PDOException $e){
        echo "connection failed" . $e->getMessage();
    }
    }


?>


