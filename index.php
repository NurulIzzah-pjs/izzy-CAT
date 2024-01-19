<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<button onclick = "myLoginForm()" id ="loginButton" >Login</button>

<script>
    function myLoginForm(){
        location.replace("form.php")
    }
</script>

</body>
</html>

