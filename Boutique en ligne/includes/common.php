<?php
    $con = mysqli_connect("localhost", "root", "", "ecommerce", "3306")
    or die(mysqli_error($con));

    if (!function_exists('format_ariary_price')) {
      // Conversion indicative des anciens tarifs en roupies vers l'ariary.
      function format_ariary_price($rupee_price) {
        return number_format($rupee_price * 55, 0, ',', ' ') . ' Ar';
      }
    }

    if(!isset($_SESSION)){
      session_start();
    }
?>
