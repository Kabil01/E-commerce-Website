<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:logged.php');
    }
    
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>home</title>
</head>
<body>
    <div class="container">
    <a class="float-right" href="logout.php">Logout</a>
    <h1>Welcome<?php echo $_SESSION['username']?></h1> 
</div>
</body>
</html>