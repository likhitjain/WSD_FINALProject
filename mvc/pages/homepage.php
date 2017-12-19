<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body style='background-color:gainsboro'>

<br>


<heading><h1>
             <?php

                //this how to print some data;
                echo $data['site_name'];

               ?> 
       </h1></heading>
    
    <br><br>
<!--
<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>-->
    
    
    
    <style>
        heading
          {
           text-align: center;
           color: black;
          }
          row
           { 
            float:left;
            margin-left:25em;
            } 

          tab
          { 
            float:left;
            margin-left:30em;
            
          } 
          


   </style>


<div class="container">
    
    <form action="index.php?page=accounts&action=login" method="POST">
    
    
        <row>
             <label><b>Username</b></label>
             <input type="text" placeholder="Enter Username" name="email" required>
        </row>
        
        <br>
        <br>

         <row>
              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
         </row>
        <br>
        <br>
        
        
        <tab><button type="submit">Login</button></tab>
        <br>
        <br>
              <tab><b>OR</b></tab>
        <br>
        <br>
         <tab><a href="index.php?page=accounts&action=register">Register</a></tab>
        
        
        </form>
        
</div>
 
       
       
<br><br>

       


<script src="js/scripts.js"></script>
</body>
</html>