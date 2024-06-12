<?php
$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';

$charactersLenght = strlen($characters);
?>

<?php
function gereratePassword($length, $characters)
{
    $charactersLenght = strlen($characters);

    $password = "";

    for ($i=0; $i < $length; $i++) { 

        $randomIndex = rand(0, $charactersLenght -1);

        $password .= $randomIndex;
        
    }
}

?>