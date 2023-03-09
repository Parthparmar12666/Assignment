<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="post">
        Enter no : 
        <input type="number" name="num"/><br><br>
        <input type="submit" name="submit" value="click"/><br><br>
</form>
<?php
if($_POST)
{
    $num = $_POST['num'];  
    // $n="121";
$rev = strrev($num);
if($num == $rev)
{
    echo" no is palindrom"; 

}
else
{
    echo "not palindrom";
} 

}
?>

</body>
</html>



