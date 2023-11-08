<html>
<head>
    <title>Display</title>        
    <style>
        body{
            background: #D071f9;
        }
        table{
            background-color: white;
        }
        .update, .delete{
            background-color: green;
            color:white;
            border:0;
            outline:none;
            border-radius: 5px;
            height:22px;
            width:80px;
            font-weight: bold;
            cursor: pointer;
        }
        .delete{
            background-color: red;
        }
    </style>

</head>
</html>




<?php
    include("connection.php");
    // error_reporting(0);

    $query = "SELECT * FROM USERDATA";
    $data = mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);


    
    
    if($total !=0){
        ?>

        <h2 align="center"><mark>Displaying All Records</mark></h2>

        <center><table border="3" cellspacing="7" width="90%" >
                <tr>
                    
                    <th width="8%">First Name</th>
                    <th width="8%">Last Name</th>
                    <th width="8%">Gender</th>
                    <th width="20%">Emaili</th>
                    <th width="10%">Phone</th>
                    <th width="10%">caste</th>
                    <th width="10%">Language</th>
                    <th width="20%">Address</th>
                    <th width="25%">Operations</th>
                </tr>


        <?php

        // while($result = mysqli_fetch_assoc($data)){
        //     echo "<tr>
        //             <td>".$result['fname']."</td>
        //             <td>".$result['lname']."</td>
        //             <td>".$result['gender']."</td>
        //             <td>".$result['email']."</td>
        //             <td>".$result['phone']."</td>
        //             <td>".$result['address']."</td>
        //         </tr>";
        // }
        do{
            echo "<tr>
                    
                    <td>".$result['fname']."</td>
                    <td>".$result['lname']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone']."</td>
                    <td>".$result['caste']."</td>
                    <td>".$result['language']."</td>
                    <td>".$result['address']."</td>

                    <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'</a>

                   <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'</a></td>
                </tr>";
        }while($result = mysqli_fetch_assoc($data));
            
    }else{
        echo "No Records Found";
    }

?>
</table>
</center>

<script>
    function checkdelete(){
        return confirm('Are You Sure You Want To Delete This Records?');
    }
</script>
