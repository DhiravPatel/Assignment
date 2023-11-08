<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname" required>
            </div>


            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" required>
            </div>


            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password" required>
            </div>


            <div class="input_field">
                <label>Confirm Password</label>
                <input type="password" class="input" name="conpassword" required>
            </div>


            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">
                    <select name="gender" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="email" class="input" name="email" required>
            </div>


            <div class="input_field">
                <label>Phone Number</label>
                <input type="number" class="input" name="phone" required>
            </div>

            <div class="input_field" >
                <label style="margin-right:100px;">Caste</label>
                <input type="radio" name="r1" value="General" required><label style="margin-left:5px;">General</label>
                <input type="radio" name="r1" value="OBC" required><label style="margin-left:5px;">OBC</label>
                <input type="radio" name="r1" value="SC" required><label style="margin-left:5px;">SC</label>
                <input type="radio" name="r1" value="ST" required><label style="margin-left:5px;">ST</label>
            </div>


            <div class="input_field" >
                <label style="margin-right:70px;">Language</label>
                <input type="checkbox" name="language[]" value="English" ><label style="margin-left:5px;">English</label>
                <input type="checkbox" name="language[]" value="Gujarati" ><label style="margin-left:5px;">Gujarati</label>
                <input type="checkbox" name="language[]" value="Hindi" ><label style="margin-left:5px;">Hindi</label>
            </div>


            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="address" required></textarea>
            </div>


            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>

            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>

        </div>
        </form>
    </div>
</body>
</html>


<?php
    error_reporting(0);

    if($_POST['register']){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pwd = $_POST['password'];
        $cpwd = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $caste = $_POST['r1'];
        $lang = $_POST['language'];
        $lan1 = implode(",",$lang);
        $address = $_POST['address'];


        if($fname !="" && $lname !="" && $pwd !="" && $gender !="" && $email !="" && $phone !="" && $address !="" ){

        $query = "INSERT INTO USERDATA(fname,lname,password,cpassword,gender,email,phone,caste,language,address) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$caste','$lan1',$address')";

        $data = mysqli_query($conn,$query);

        if($data){
            echo "Registraion Successful";
        }else{
            echo "Failed";
        }
    }
   
    }
?>