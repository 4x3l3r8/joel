<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard | Sign-up</title>
</head>
<body>
    <div class="form-container">
        <form action="signup.php" method="post">
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
    <script src="init.js"></script>
</body>
</html>