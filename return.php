<?php
include ('connection.php');

if (isset($_POST['Submit'])) {
    $return_date = $_POST['date'];
    $user_name = $_POST['uname'];
    $catridge_model_no = $_POST['cmodelno'];
    $catridge_brand = $_POST['cbrand'];

    $sql = "INSERT INTO returndetails (rdate , uname , cmodelno , cbrand) VALUES('$return_date','$user_name','$catridge_model_no','$catridge_brand')";

    if ($conn->query($sql) === TRUE) {
        echo 
        // "Return attempt successfully";
        '<script>
        // window.location.href = "#afterreturn.php";
        alert("Return attempt successfully");
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $sql2= "select * from reurndetails where rdate='$return_date' and uname='$user_name' and cmodelno='$catridge_model_no' and cbrand='$catridge_brand'";
        
    $result = mysqli_query($conn, $sql2);  

    $count = mysqli_num_rows($result);  

    if ($count>0) {
        // Output data of each row
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo " Return ID: " . $row["return_id"]. " - User Name: " . $row["uname"]. " - Catridge Model No: " . $row["cmodelno"]. " - Catridge Brand:" . $row["cbrand"]. "<br>";
        }
    } else {
        echo "0 results";
}


    
    $conn->close();
}
?>