<?php
//database connection
$connect = mysqli_connect("localhost", "root","", "appointment");

//get the post records
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Gender = $_POST['Gender'];

//contact information
$Mobile_No= $_POST['Mobile_No'];
$Residential_No= $_POST['Residential_No'];
$Email_Id = $_POST['Email_Id'];

//Residential Information
$Residential_Addresss= $_POST['Residential_Address'];
$Pincode = $_POST['Pincode'];
$City = $_POST['City'];

//Appointment Details
$Appt_Date = $_POST['Appt_Date'];
$Symptoms = $_POST['Symptoms'];

$sql = "INSERT INTO patient_details('fnme','lname','Gender','Mob_No','Res_No','Email','address','pincode','cities','Book_Appt','symptoms')
 VALUES('$FirstName','$LastName','$Gender','$Mobile_No','$Residential_No','$Email_Id','$Residential_Addresss','$Pincode','$City','$Appt_Date','$Symptoms');"

 $rs = mysqli_query($connect,$sql);

 if($rs){
     echo "Contact Records Inserted In Database";
 }
?>