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
    $date_registered = date("Y-m-j h:i:s");

        $query = "INSERT INTO student(firstname, lastname, email, gender, password, nationality, faculty, department, date_registered) 
        VALUES('$firstname', '$lastname', '$email', '$gender', '$password','$nationality', '$faculty', '$department', '$date_registered')";
        $done = mysqli_query($conn, $query);
        if($done){
            echo "<script>window.alert('You\'ve been registered')</script>";
        echo "<script>window.location.href='index.php?registered'</script>";
        }else {
            echo "not done";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
            padding: 0;
            font-size: 100%;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .form-container{
            position: absolute;
            top: 17%;
            left: 30%;
            padding: 2%;
            /* display: flex; */
            width: 40%;
            height: auto;
            background-color: rgb(27, 117, 117);
            border-radius: 16px 16px 0px 0px;
            box-shadow: 0px 0px 10px 5px rgb(37, 115, 139);
            /* flex-wrap: wrap; */
            /* align-items: center; */
        }
        input:not([type=submit]), select{
            margin: 5px 0px 5px 0px;
            padding: 0.55%;
            background: none;
            border-bottom: 2px solid #1fa2ae ;
            border-radius: 6px;
            color: rgb(67, 67, 71);
            transition: 1s;
        }
        input:focus, select:focus{
            outline: none;
            border-bottom: 2px solid rgb(255, 0, 0);
        }
        .fullname{
            width: 47.72934%;
            border: none;
        }
        input[type=email], input[type=password], input[name=nationality], select, input[name=department]{
            width: 100%;
            border: none;
            border-bottom: 2px solid #1fa2ae ;
        }
        input[name=gender]:selected{
            color: greenyellow;
            border: none;
            display: none;
        }
        input[type=submit]{
            width: 25%;
            position: relative;
            float: right;
            margin: 10px 15px 5px 5px;
            border: none;
            background: linear-gradient(to left, #ea3e4e, #e2e34a);
            padding: 5px;
            box-shadow: 2px 3px 4px #111;
            color: white;
        }
        input[type=submit]:active{
            box-shadow: 2px 3px 4px #111 inset;
        }
    </style>
    <title>Dashboard | Sign-up</title>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <!-- <label for="firstname">Firstname:</label> -->
            <input type="text" name="firstname" placeholder="Firstname" id="fname" class="fullname" required>
            
            <!-- <label for="lastname">Lastname:</label> -->
            <input type="text" placeholder="Lastname" name="lastname" id="lname" class="fullname" required>
            <br>
            <!-- <label for="email">Email: </label> -->
            <input placeholder="Email" type="email" name="email" id="email" required>
            <br>
            <!-- <label for="gender">Gender: </label> -->
            <input type="radio" name="gender" id="gender_male" value="M" required>Male
            <input type="radio" name="gender" id="gender_female" value="F" required>Female
            <input type="radio" name="gender" id="gender_other" value="Ot" required>Other
            <br>
            <!-- <label for="password">Password: </label> -->
            <input type="password" name="password" id="password" minlength="6" placeholder="Password" required>
            <br>
            <!-- <label for="nationality">Nationality: </label> -->
            <input type="text" placeholder="Nationality" name="nationality" id="nationality" required>
            <br>
            <!-- <label for="faculty">Faculty: </label> -->
            <select name="faculty" id="faculty" onchange="changeDepartment()" required>
                <option value="">Faculty</option>
                <option value="Pure and Applied Science">Pure and Applied Science</option>
                <option value="Arts">Arts</option>
                <option value="Social Science">Social Science</option>
                <option value="Engineering">Engineering</option>
            </select>
            <br>
            <!-- <label for="department">Department: </label> -->
            <!-- <input type="text" placeholder="Department" name="department" id="department" required> -->
            <select name="department" id="department" placeholder="select a faculty" disabled>
                <!-- <option value="">Select a faculty first...</option> -->
            </select>
            <br>
            <input type="submit" name="submit">
        </form>
    </div>
    <script>
        var facultySet = {};
        facultySet["Pure and Applied Science"] = ["Computer Science", "Biochemistry", "Microbiology"];
        facultySet["Arts"] = ["English", "Religious Studies", "Theatre Arts"];

        function changeDepartment() {
            var faculty = document.getElementById("faculty");
            var department = document.getElementById("department");

            var d = faculty.options[faculty.selectedIndex].value;

            while (department.options.length) {
                department.remove(0);
            }

            var depts = facultySet[d];
           if (depts) {
               department.disabled = false;
               for (let i = 0; i < depts.length; i++) {
                   var dept = new Option(depts[i],i);
                   department.options.add(dept);
               }
           }else{
            department.disabled = true;
           }
        }
    </script>
</body>
</html>