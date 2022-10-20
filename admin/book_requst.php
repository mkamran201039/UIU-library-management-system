


      <!------MENU SECTION START-->
      <?php include('includes/header.php');?>
<!-- MENU SECTION END-->




<!DOCTYPE html>




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Online Library Management System | Admin Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>



















<html>
<style>
        h4{text-align: center;}
        h5{text-align: center;}
</style>


<body>


<?php

echo "<h4 >New Book Request List  </h4>". "<br>";




$host="localhost";
$user="root";
$password="";
$db="library";

$data=mysqli_connect($host,$user,$password,$db);

if($data==false)
{
   echo "Database connection error". "<br>". "<br>";
}
else
{
  // echo "<h4 >Database successfully connected  vai</h4>". "<br>". "<br>";
}












   
   $sql1 = "select * from book_request";
   $result=mysqli_query($data, $sql1);

   while($info=$result->fetch_assoc())
   {
   echo "<h5>Request ID: ". $info["request_id"] ."<br> "  ."Book Title/ ISBN : ". $info["book_name"] ."<br>";
   echo "<h5>Student ID: ". $info["student_id"] ."<br><br><br><hr> " ;
   
   
   }








  





if(isset($_POST['delete']))
{
   
   $dname=$_POST['dname'];

   
 
   

   $sql = "delete from book_request  where request_id='$dname' ";
   $data=mysqli_query($data, $sql);

   
   if($data)
   {
      echo '<script>alert("Request deleted successfully ")</script>';

      
   } 
   else
   {
      echo "ERROR: Hush! Sorry $sql. "
         . mysqli_error($data);
   }
   
   

}
     

   
?>















 
  

  <hr>




  <form action="book_requst.php" method="POST">



  <label for="sname" text-align="center"><h5 style="color: red">Enter Request ID</label><br><br>
  <input type="text" id="sname" name="dname" ><br><br>
  <input type="submit" name="delete" value="delete" ><br><br><br>
  
  
</form> 
</div>




</body>
</html> 