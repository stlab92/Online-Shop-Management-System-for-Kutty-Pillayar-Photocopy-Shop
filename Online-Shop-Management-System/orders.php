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
   </style>

</head>

<body>

   <?php include 'header.php'; ?>

   <section id="page-header" class="page-header" style="background-image: url('img/about/a11.png');">
      <h2>#StayHome</h2>
      <p>Save more with coupons & up to 70% off!</p>
   </section>

   <section class="placed-orders">

      <h1 class="title">placed orders</h1>

      <div class="box-container">

         <?php
         $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
         if (mysqli_num_rows($order_query) > 0) {
            while ($fetch_orders = mysqli_fetch_assoc($order_query)) {
         ?>
               <div class="box">
                  <p> placed on : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
                  <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
                  <p> number : <span><?php echo $fetch_orders['number']; ?></span> </p>
                  <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
                  <p> address : <span><?php echo $fetch_orders['address']; ?></span> </p>
                  <p> payment method : <span><?php echo $fetch_orders['method']; ?></span> </p>

                  <p> your orders : <span><?php echo isset($fetch_orders['total_products']) ? $fetch_orders['total_products'] : 'N/A'; ?></span> </p>



                  <p> total price : <span>$<?php echo $fetch_orders['total_price']; ?>/-</span> </p>
                  <p> payment status : <span style="color:<?php if ($fetch_orders['payment_status'] == 'pending') {
                                                               echo 'red';
                                                            } else {
                                                               echo 'green';
                                                            } ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>
               </div>
         <?php
            }
         } else {
            echo '<p class="empty">no orders placed yet!</p>';
         }
         ?>
      </div>

   </section>








   <?php include 'footer.php'; ?>


   <script src="js/script.js"></script>

</body>

</html>