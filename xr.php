<?php  
    if(isset($_POST['name'])){
    $server = "localhost";

    $username = "root";

    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        echo "Success connecting to the db";
    }
    // echo "Success connecting to the db";

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `current_times`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo $sql;


    // INSERT INTO `trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES (NULL, 'krio', '12', 'shemale', 'red@kross', '123658974', 'got a bunglow', current_timestamp());

    if ($con->query($sql) == true){
        echo "Successfullly inserted" ;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Describtion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <link rel="shortcut icon" href="f2.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <div class="container">

        <!-- // if($insert == true){ -->
        <!-- // echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>"; -->
        <!-- // } -->

        <form action="xr.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>