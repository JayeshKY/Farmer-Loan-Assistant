<?php
session_start();

if(!(isset($_SESSION['username'])))
{



    header('location:http://localhost:8080/project/index.html');
}


$user=$_SESSION['username'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');

$stat="Confirmed";
$q="SELECT * FROM term_loan where username='$user' && loan_status='$stat'";


$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);
if($num==1)
{
    echo "Your Loan Application has been Confirmed";
}
else
{
    

    //header('location:http://localhost:8080/project/index.html');



}

$status=mysqli_query($con,$q);
mysqli_close($con);




?>






<html>
<head>
    <title> Farmer Loan Assistant</title>
    <link rel="stylesheet" type="text/css" href="style1.css">   
</head>
    <body>


    <h1 id="heading" align="middle">FARMER LOAN ASSISTANT</h1> 
     <h3>HI <?php echo $_SESSION['username']?></h3>
     <div>

    <a href="loan1.php">Agriculture Term Loan</a></br></br></br></br></br>
    <a href="loan2.php">Farm Mechanisation Loan</a> </br></br></br></br></br>
    
    <a href="loan3.php">Horticulture Loan</a> </br></br></br></br></br>
    <a href="loan4.php">Forestry Loan</a> </br></br></br></br></br>
    <a href="logout.php"> LOG OUT </a>
     
     </div>
 </br></br> </br></br>

        


    
    </body>
</html>







