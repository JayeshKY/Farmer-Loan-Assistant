<?php


session_start();

$user=$_SESSION['username'];

$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$code=$_POST['code'];
$amount=$_POST['amount'];
$term=$_POST['term'];


$Loan_type="Agriculture term loan";


if($code==1)
{
	$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$interest=5;
$total=$amount+($amount*$interest*$term)/100;

$q1="INSERT INTO sbi values('$user','$Loan_type','$amount','$interest','$term','$total')";
mysqli_query($con,$q1);
mysqli_close($con);

}

if($code==2)
{
$interest=6;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$total=$amount+($amount*$interest*$term)/100;

$q1="INSERT INTO icici values('$user','$Loan_type','$amount','$interest','$term','$total')";
mysqli_query($con,$q1);
mysqli_close($con);
}

if($code==3)
{$interest=4;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$total=$amount+($amount*$interest*$term)/100;

$q1="INSERT INTO kotak values('$user','$Loan_type','$amount','$interest','$term','$total')";
mysqli_query($con,$q1);
mysqli_close($con);

}

if($code==4)
{
$interest=8;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$total=$amount+($amount*$interest*$term)/100;

$q1="INSERT INTO bob values('$user','$Loan_type','$amount','$interest','$term','$total')";
mysqli_query($con,$q1);
mysqli_close($con);
}

if($code==5)
{
$interest=10;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$total=$amount+($amount*$interest*$term)/100;

$q1="INSERT INTO hdfc values('$user','$Loan_type','$amount','$interest','$term','$total')";
mysqli_query($con,$q1);
mysqli_close($con);
}

$total=$amount+($amount*$interest*$term)/100;

$interstamt=$amount*$interest*$term/100;
$install=$total/(12*$term);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');

$q="INSERT INTO term_loan(username,name,age,address,Loan_type,code,amount,interest,term,total_amount) values('$user','$name','$age','$address','$Loan_type','$code','$amount','$interest','$term','$total')";


$status=mysqli_query($con,$q);
mysqli_close($con);

?>
<html>
<head>
    <title> Farmer Loan Assistant</title>
    <link rel="stylesheet" type="text/css" href="style1.css">   
</head>
    <body>
    	<h2 align="middle"><?php if($status==1) echo "REQUEST SUBMITTED SUCCESSFULLY";else echo "ERROR"; ?></h2>
    	
        </br></br>
    	<h2 align="middle"><?php  echo "TOTAL AMOUNT WITH INTEREST=$total";?></h2>
        </br></br>
        <h2 align="middle"><?php  echo "(LOAN AMOUNT=$amount,INTEREST AMOUNT=$interstamt)";?></h2></br></br>
         <h2 align="middle"><?php  echo "Per Month Installment=$install" ;?></h2>


         </br></br></br>
        <a href="doc1.php">Click to submit required documents</a></br>


    	</body>
    	</html>