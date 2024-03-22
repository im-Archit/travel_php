<?php
$insert = false;
if(isset($_POST['name'])){

    //Set Connection Variable
$server = "localhost";
$username = "root";
$password = "";

// Create database connection
$con = mysqli_connect($server , $username , $password);


//Check for connection
if(!$con) {
    echo "Connection Failed Due To" . mysqli_connect_error();
}

//Collect Post Variable

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO  `trip`.`trip` (`name`, `age`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age','$email', '$phone', '$desc', current_timestamp());";

// echo $sql ;


//Execute The Query
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">



</head>

<body>
    <img class="bg" src="GoaBack.jpg" alt="">

    <div class="container">
        <h1> Welcome to Travel Form for Goa Trip</h1>
        <p>Enter Your Details To Confirm Your Presence</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="email" id="email" placeholder="Enter Your Email">
            <input type="text" name="phone" id="phone" placeholder="Enter Your Phone">
            <textarea type="text" name="desc" id="desc" rows="10" cols="30"
                placeholder="Enter Any Other Details"> </textarea>
            <button class="btn">Submit</button>

        </form>



    </div>
    <script src="index.js"></script>

    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'Archit', '19',
    'ar29@gmail.com', '999999999', 'Mera Phla', current_timestamp()); -->


</body>

</html>