<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body style='background-color:gainsboro'>
<br>

<?php
include "header.php";
?>


<h1>Tasks:</h1>





<a href="index.php?page=accounts&action=profile">My Profile</a>

<br>
<br>

 <b><?php
//this is how you print something
       if(!empty($data)){
            print utility\htmlTable::genarateTableFromMultiArray($data);
        }
        
        //print_r($data);

    ?></b>

<br>
<br>

<style>

   div
   {
    border: 5px darkred;
    background-color: whitesmoke;
    border-style: solid;
    padding: 50px 50px 50px 50px;
    height: 350px;
    width: 350px;
    margin-left: 5em;
    }
    row
    { 
      
      margin-right:20em;
            
    }

</style>

<div>

<form action="index.php?page=tasks&action=insert" method="post">

    
    Owneremail:  <row> <input type="email" name="owneremail" ></row><br>
    Ownerid: <row><input type="number" name="ownerid" ></row><br>
    Createddate: <row> <input type="date" name="createddate" ></row><br>
    Duedate: <row> <input type="date" name="duedate" ></row><br>
    Message: <row><input type="text" name="message" ></row><br>
    isDone: <row><input type="text" name="Isdone" ></row><br>
    <br>
    <br>
    <input type="submit" value="Insert form">
    
</form>

</div>

<script src="js/scripts.js"></script>
</body>
</html>