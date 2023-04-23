<?php 
$conn = mysqli_connect("localhost", "root", "admin@123", "mysite");
         
// Check connection
if($conn === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
// Taking all 5 values from the form data(input)
$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile =  $_REQUEST['mobile'];
$countryCode = $_REQUEST['countryCode'];
$comment = $_REQUEST['comment'];

// Performing insert query execution
$sql = "INSERT INTO contact_us  (cu_name, cu_email, cu_phone, cu_country, cu_msg) VALUES ('$name','$email','$mobile','$countryCode','$comment')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Data stored in a database successfully.". " Please browse your localhost php my admin". " to view the updated data</h3>";
    header('Location: /mysite');
} else{
    echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

 exit();
?>