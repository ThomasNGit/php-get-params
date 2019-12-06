<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Check</title>
<?php 

$pwd = $_GET['password'];


?>
</head>
<body>

<?php 

if($pwd != "Boolean"){
    echo "<h1 style='color:red'> PASSWORD ERRATA! </h1>";
} else {
    echo "<h1 style='color:green'> PASSWORD CORRETTA! </h1>";
}
?>


</body>
</html>