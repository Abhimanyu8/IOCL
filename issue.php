<?php
    include('connection.php');
    if (isset($_POST['issue_submit'])) {
        $issue_Date = $_POST['date'];
        $uname = $_POST['uname'];
        $catridge_model_no = $_POST['cmodelno'];
        $catridge_brand = $_POST['cbrand'];

        $sql = "INSERT INTO issuedetails (idate , uname , cmodelno , cbrand) VALUES('$issue_Date','$uname','$catridge_model_no','$catridge_brand')";

        if ($conn->query($sql) === TRUE) {
            echo 
            // "Catridge Issued Successfully";
            '<script>
            // window.location.href = "#afterissue.php";
            alert("Catridge Issued Successfully");
            </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }



        $sql2= "select * from issuedetails where idate='$issue_Date' and uname='$uname' and cmodelno='$catridge_model_no' and cbrand='$catridge_brand'";
        
        $result = mysqli_query($conn, $sql2);  

        $count = mysqli_num_rows($result);  

        if ($count>0) {
            // Output data of each row
            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "Issue ID: " . $row["issue_id"]. " - User Name: " . $row["uname"]. " - Catridge Model No: " . $row["cmodelno"]. " - Catridge Brand:" . $row["cbrand"]. "<br>";
            }
        } else {
            echo "0 results";
    }

   
        
        $conn->close();
}
?>