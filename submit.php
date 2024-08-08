<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "jakba";
$connect = mysqli_connect($host, $user, $pass, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
// else {
//     echo "Connected successfully";
// }

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['massage'];
    $sql = "INSERT INTO `massages`(`name`, `email`, `massage`) VALUES
    ('$name','$email','$message')";
    if (mysqli_query($connect, $sql)) {
        echo "<script>
        alert('Message sent successfully');
        window.location.href = 'contact.html';
      </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        echo "<script>
        alert('Message not sent');
        window.location.href = 'contact.html'; 
      </script>";
    }
}






?>