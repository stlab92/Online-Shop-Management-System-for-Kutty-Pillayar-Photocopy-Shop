<?php
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>KPCS</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/print.css">
   <link rel="stylesheet" href="css/home.css">
   <style>
      .page-header {
         width: 100%;
         height: 40vh;
         background-size: cover;
         display: flex;
         justify-content: center;
         text-align: center;
         flex-direction: column;
      }
      .page-header h2,
      .page-header p {
        color: #fff;
      }
      .section-p1{
         background-color: #fff;
      }
   </style>
</head>

<body>
   <?php include 'header.php'; ?>
   <section id="page-header" class="page-header" style="background-image: url('img/about/a11.png');">
      <h2>#StayHome</h2>
      <p>Save more time!</p>
   </section>

   <?php include 'pdf.php'; ?>





   <?php include 'footer.php'; ?>

   <script src="js/script.js"></script>

</body>

</html>