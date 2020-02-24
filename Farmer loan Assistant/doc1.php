<?php


session_start();


?>
<html>
<head>
    <title> Farmer Loan Assistant</title>
    <link rel="stylesheet" type="text/css" href="style1.css">   
</head>
    <body>
    <h1 align="middle">Upload Documents</h1> 

    



<div class="login-box">
   
        
            <form action="insertdoc.php" method="post" enctype="multipart/form-data">
            
            
            </br>
            <p>Income Certificate</p>
            <input type="file" name="image1" placeholder="Income Certificate">
            </br>
            <p>Land Documents</p>
            <input type="file" name="image2" placeholder="Land Documents">
            </br>
            <p>Aadhaar card</p>
            <input type="file" name="image3" placeholder="Aadhaar card">
            
        </br></br></br>
            




            <input  type="submit" name="submit" value="UPLOAD DOCUMENTS">
                
            </form>
        
        
        </div>
    




    
    </body>
</html>


