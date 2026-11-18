<?php
// This page updates the user password
require("includes/common.php");

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['oldpassword'];
$old_pass = mysqli_real_escape_string($con, $old_pass);

$new_pass = $_POST['newpassword'];
$new_pass = mysqli_real_escape_string($con, $new_pass);


$rep_pass = $_POST['renewpassword'];
$rep_pass = mysqli_real_escape_string($con, $rep_pass);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

$orig_pass = $row['password'];

//check old password and password taken from db
if ($new_pass != $rep_pass) {
    header('location: settings.php?error=' . urlencode('Les deux nouveaux mots de passe ne correspondent pas.'));
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=' . urlencode('Mot de passe modifié avec succès.'));
    } else
        header('location: settings.php?error=' . urlencode('Ancien mot de passe incorrect.'));
}
?>
