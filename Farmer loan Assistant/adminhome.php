<?php
session_start();

if(!(isset($_SESSION['username'])))
{



    header('location:http://localhost:8080/project/admin.html');
}


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

    <a href="status.php">Udpate Loan Status</a></br></br></br></br></br>
    <a href="remove.php">Remove an Application</a> </br></br></br></br></br>
    
    
    <a href="logout2.php"> LOG OUT </a>
     
     </div>
 </br></br> </br></br>

        


    
    </body>
</html>







