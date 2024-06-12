<?php
$dizionario = "qwertyuiopasdfghjklzxcvbnm123456789!.:;,"
/* $lenght = $_GET['lenght'];
$password = ""; */

?>
 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>

<?php
    /* for ($i=0; $i = $lenght ; ++$i) { 

    echo $password = "X"; 
}
*/
if (isset($_GET['password'])) {
    $password = $_GET['password'];
    $passwordOscurata = "";
    for ($i = 0; $i < strlen($password); $i++) {
        $passwordOscurata .= "X";
    }
    echo "<p>Password oscurata: $passwordOscurata</p>";
} else {
    echo "<p>Si prega di inserire una password valida.</p>";
}


?>



</body>

</html>