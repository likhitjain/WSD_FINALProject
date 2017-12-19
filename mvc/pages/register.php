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
<h1>New User Registration <h1>

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
      
      margin-right:2em;
            
    }
    quik
    {
      font-size:15px;
    }

</style>

<div>
 
   <form action="index.php?page=accounts&action=register" method="post">


    <quik>First name:</quik> <row><input type="text" name="fname"></row> <br>
    
    <quik>Last name:</quik> <row><input type="text" name="lname"></row> <br>
    
    <quik>Email:</quik> <row><input type="email" name="email"> </row> <br>
    
    <quik>Phone:</quik> <row><input type="number" name="phone"> </row> <br>
    
    <quik>Birthday:</quik> <row><input type="date" name="birthday"> </row> <br>
    
    <quik>Gender:</quik> <row><input type="text" name="gender"> </row> <br>
    
    <quik>Password:</quik> <row><input type="password" name="password"> </row> <br>
    
    <br>
    <input type="submit" value="Submit form">
    
    </form>
    
</div>

<script src="js/scripts.js"></script>
</body>
</html>
