<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="registration.php" method="post">
        <div class="container">
            <h1>Registration</h1>
            <p>Fill up your details</p>
            <label for="firstname">First Name</label>
            <input type="text" name="firstname required">


            <label for="lastname">Last Name</label>
            <input type="text" name="lastname required">


            <label for="Email">Email</label>
            <input type="email" name="email required">


            <label for="phonenumber">Phone Number</label>
            <input type="text" name="phonenumber required">


            <label for="password">Password</label>
            <input type="password" name="password required">


            <label for="password">Confirm Password</label>
            <input type="password" name="password required">

            <input type="submit" name="create" value="Signup">
        </div>
    </form>
</body>
</html>