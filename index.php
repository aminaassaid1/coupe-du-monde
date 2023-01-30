<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
        <p>your name : <input type="text" name="name" /></p>
        <p>your age : <input type="text" name="age" /></p>
        <input type="submit" value="OK">
       </form>
 <?php
 if (isset($_POST['name']))
{
    echo "Hello " .$_POST['name'];
}
if (isset ($_POST['age']))
{
    echo "you are " .$_POST['age'] . " year";
} 
?>





</body>
</html>