<?php
require_once('conn.php');

if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $nationality = $_POST['nationality'];
    $faculty = $_POST['faculty'];
    $department = $_POST['department'];

   
        $query = "INSERT INTO student(firstname, lastname, email, gender, password, nationality, faculty, department) 
        VALUES('$firstname', '$lastname', '$email', '$gender', '$password','$nationality', '$faculty', '$department')";
        $done = mysqli_query($conn, $query);
        if($done){
            echo "<script>window.alert('You\'ve been registered')</script>";
        echo "<script>window.location.href='index.html?registered'</script>";
        }else {
            echo "not done";
        }
}
?>
