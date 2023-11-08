<?php
    include("connection.php");
    // error_reporting(0);

    $id = $_GET['id'];

    
    $query = "SELECT * FROM USERDATA WHERE id='$id' ";
    $data = mysqli_query($conn,$query);

    $result = mysqli_fetch_assoc($data);

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
        <form action="#" method="post">
        <div class="title">
            Update Details
        </div>
        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" value="<?php echo $result['fname'];?>" class="input" name="fname" required>
            </div>


            <div class="input_field">
                <label>Last Name</label>
                <input type="text" value="<?php echo $result['lname'];?>" class="input" name="lname" required>
            </div>


            <div class="input_field">
                <label>Password</label>
                <input type="password" value="<?php echo $result['password'];?>" class="input" name="password" required>
            </div>


            <div class="input_field">
                <label>Confirm Password</label>
                <input type="password" value="<?php echo $result['cpassword'];?>" class="input" name="conpassword" required>
            </div>


            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">

                    <select name="gender" required>
                        <option value="">Select</option>

                        <option value="Male"
                            <?php
                                if($result['gender'] == 'Male'){
                                    echo "selected";
                                }
                            ?>
                        >
                        Male</option>
                        <option value="Female"
                            <?php
                                if($result['gender'] == 'Female'){
                                    echo "selected";
                                }
                            ?>
                        >
                        Female</option>
                    </select>
                </div>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="email" value="<?php echo $result['email'];?>" class="input" name="email" required>
            </div>


            <div class="input_field">
                <label>Phone Number</label>
                <input type="number" value="<?php echo $result['phone'];?>" class="input" name="phone" required>
            </div>

            <div class="input_field" >
                <label style="margin-right:100px;">Caste</label>
                <input type="radio" name="r1" value="General" required
                
                <?php
                    if($result[caste] == "General"){
                        echo "checked";
                    }
                ?>
                
                ><label style="margin-left:5px;">General</label>
                <input type="radio" name="r1" value="OBC" required
                
                <?php
                    if($result[caste] == "OBC"){
                        echo "checked";
                    }
                ?>
                
                ><label style="margin-left:5px;">OBC</label>
                <input type="radio" name="r1" value="SC" required
                
                <?php
                    if($result[caste] == "SC"){
                        echo "checked";
                    }
                ?>
                
                ><label style="margin-left:5px;">SC</label>
                <input type="radio" name="r1" value="ST" required
                
                <?php
                    if($result[caste] == "ST"){
                        echo "checked";
                    }
                ?>
                
                ><label style="margin-left:5px;">ST</label>
            </div>
 

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="address" required><?php echo $result['address'];?></textarea>
            </div>


            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>

            <div class="input_field">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>

        </div>
        </form>
    </div>
</body>
</html>


<?php
    error_reporting(0);

    if($_POST['update']){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pwd = $_POST['password'];
        $cpwd = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $caste = $_POST['r1'];
        $address = $_POST['address'];


        if($fname !="" && $lname !="" && $pwd !="" && $gender !="" && $email !="" && $phone !="" && $address !="" ){

        $query = "INSERT INTO USERDATA(fname,lname,password,cpassword,gender,email,phone,caste,address) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$caste',$address')";

        $query = "UPDATE userdata set fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',gender='$gender',email='$email',phone='$phone',caste='$caste',address='$address' WHERE id='$id'";

        $data = mysqli_query($conn,$query);

        if($data){
            echo "<script>alert('Update Successful');</script>";
            ?>

            <meta http-equiv = "refresh" content = "0; url= http://localhost/assignment/display.php"/>

            <?php
        }else{
            echo "Failed";
        }
    }
   
    }
?>