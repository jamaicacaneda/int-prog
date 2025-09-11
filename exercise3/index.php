<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <metta http-equiv=" X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise #3 </title>     
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #cce6ff; /* Light blue background */
            padding: 40px;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 350px;
            margin: auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        input[type="gmail"],
        input[type="FULL_NAME"] {
            width: 100%;
            padding: 8px;
            margin: 6px 0 12px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>

 <body>
     <h2 style="text-align:center; color:#007bff; margin-bottom: 24px;">Welcome to our page!</h2>
     <form action="index.php" method="get">
        <label>username:</label><br>
        <input type="text" name="username"><br> 
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <label> gmail:</label><br>
        <input type="gmail" name="gmail"><br>
         <label>full name:</label><br>
        <input type="FULL_NAME" name="FULL_NAME"><br>
    <input type="checkbox" name="rememberme" value="yes"> Remember me<br>
    <div style="margin-bottom: 12px;"></div>
    <input type="submit" value="submit">
        

    </form>
    
</body>
    </html>
<?php

echo "{$_GET["username"]} <br>";
echo "{$_GET["password"]} <br>";
echo "{$_GET["gmail"]} <br>";
echo "{$_GET["FULL_NAME"]} <br>";

?>
