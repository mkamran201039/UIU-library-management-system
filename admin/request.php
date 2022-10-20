<!DOCTYPE html>
<html>
<style>
        h4{text-align: center;}
</style>


<body>


<?php

echo "<h4 >UIU Library Management System </h4>". "<br>". "<br>";
echo "<h4 >Home Delivery Book Request List </h4>". "<br>". "<br>";



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










if(isset($_POST['show']))
{

   
   $sql1 = "select * from tbldelivery";
   $result=mysqli_query($data, $sql1);

   while($info=$result->fetch_assoc())
   {
  // echo "Request ID: ". $info["id"] ."<br> "  ."Book Title/ ISBN : ". $info["title"] ."<br>";
   //echo "Mobile: ". $info["mobile"] ."<br> <br>" ;
   echo "here";
   }

}












if(isset($_POST['delete']))
{

   $dname=$_POST['dname'];
 
   

   $sql = "delete from tbldelivery  where id='$dname' ";
   $data=mysqli_query($data, $sql);

   
   if($data)
   {
      echo "<h3>data deleted from database successfully."
         . " Please browse your localhost php my admin"
         . " to view the updated data</h3>";

      
   } 
   else
   {
      echo "ERROR: Hush! Sorry $sql. "
         . mysqli_error($data);
   }
   
   

}
     

   
?>










<div align="center">
   <hr>
<form action="myindex.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br><br>

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>

  <label for="point">Point:</label><br>
  <input type="text" id="point" name="point" ><br><br>

  <input type="submit" name="submit" value="add" ><br><br><br>

  <hr>





  <input type="submit" name="show" value="show all" ><br><br><br>
  

  <hr>





  <label for="sname">First name of the entry that you want to update:</label><br>
  <input type="text" id="sname" name="sname" ><br><br>
  
  
  <label for="nfname">New First name:</label><br>
  <input type="text" id="nfname" name="nfname" ><br><br>

  <label for="nlname">New Last name:</label><br>
  <input type="ntext" id="nlname" name="nlname" ><br><br>

  <label for="npoint">New Point:</label><br>
  <input type="text" id="npoint" name="npoint" ><br><br>

  <input type="submit" name="update" value="update" ><br><br><br>


  <hr>







  <label for="sname">First name of the entry that you want to delete:</label><br>
  <input type="text" id="sname" name="dname" ><br><br>
  <input type="submit" name="delete" value="delete" ><br><br><br>
  
  
</form> 
</div>




</body>
</html> 