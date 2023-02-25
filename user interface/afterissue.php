<?php
    include('connection.php');
    if (isset($_POST['issue'])) {
        $issue_Date = $_POST['issue_date'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $catridge_model = $_POST['cmodel'];
        $catridge_brand = $_POST['cbrand'];

    


        $sql = "select * from issuedetails where idate='$issue_Date' and fname='$fname' and lname='$lname' and cmodel='$catridge_model and cbrand='$catridge_brand'";
  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row["issue_id"]. " - First Name: " . $row["fname"]. " - Last Name: " . $row["lname"]. " - Catridge Model: " . $row["cmodel"]. " - Catridge Brand:" . $row["cbrand"]. "<br>";
            }
        } else {
            echo "0 results";
    }

    //     if ($password == $cpassword) {
    //     // Code to insert the new user into the database goes here
    //         $sql = "INSERT INTO registrationdetails (Employee_name, Employee_Id, Department, Email, Password, Confirm_Password ) VALUES('$fullname', '$empid', '$department', '$email', '$password', '$cpassword')";
            
        
        // $conn->close();
}
?>