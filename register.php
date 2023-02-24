<?php
    include('connection.php');
    if (isset($_POST['register_style'])) {
            
        $fullname = $_POST["fullname"];
        $empid = $_POST["empid"];
        $email = $_POST["email"];
        $department = $_POST["department"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        if ($password == $cpassword) {
        // Code to insert the new user into the database goes here
            $sql = "INSERT INTO registrationdetails (Employee_name, Employee_Id, Department, Email, Password, Confirm_Password ) VALUES('$fullname', '$empid', '$department', '$email', '$password', '$cpassword')";
            if ($conn->query($sql) === TRUE) {
                echo '<script>
                window.location.href = "registerform.php";
                alert("New record created successfully");
                </script>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo  '<script>
            window.location.href = "registerform.php";
            alert("Passwords do not match");
        </script>';
  
        }

        
        $conn->close();
}


 
        // $email = $_POST['email'];
        // $password = $_POST['pass'];

        // $sql = "select * from logindetails where Email = '$email' and Password = '$password'";  
        // $result = mysqli_query($conn, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // $count = mysqli_num_rows($result);  

        // if($count == 1){  
        //     header("Location: welcome.php");
        // }  
        // else{  
        //     echo  '<script>
        //                 window.location.href = "loginform.php";
        //                 alert("Login failed. Invalid username or password!!")
        //             </script>';
        // }     
    
    ?>