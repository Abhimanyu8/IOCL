<?php
    include('connection.php');
    if (isset($_POST['login_style'])) {
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $sql = "select * from logindetails where Email = '$email' and Password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1){  
            header("Location: welcome.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "loginform.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>