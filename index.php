<?php


if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "db1";


    // $srno = $_POST['srno'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
   
    $phone = $_POST['phone'];
    // $desc = $_POST['desc'];
    $other = $_POST['other'];
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    $query = "INSERT INTO `std`(`name`, `age`, `gender`, `email`, `phone`, `other`) VALUES ('$name','$age', '$gender', '$email', '$phone','$other')";
    $result = mysqli_query($connect,$query);

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else
    {
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="main1.jpg" alt="Main">
    <div class="contaner">

    <h1>Welcome to PHP</h1>
    <p>Enter your details and Submit</p>

    <form action="index.php" method="post">

        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone ">
        <textarea name="other" id="other" cols="30" rows="10" placeholder="Any other information"></textarea>
        <!-- <button class="button" name="insert">Submit</button> -->
        <input type="submit" name="insert" value="Add Data To Database">

        <!-- <input type="image" src="sub.jpg" alt="Submit" class="button"> -->
    </form>
</div>
<script src="script.js"></script>

<!-- INSERT INTO `std` (`srno`, `name`, `age`, `gender`, `email`, `phone`, `other`) VALUES ('01', 'Parth', '26', 'Male', 'abc@gmail.com', '99986562', 'My first project.');  -->
</body>
</html>