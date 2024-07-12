<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($check_cart_numbers) > 0) {
      $message[] = 'already added to cart!';
   } else {
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }
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
   <script>
      function windowOpen(){
         window.open("shop.php");
      }
   </script>

</head>

<body>

   <?php include 'header.php'; ?>

   <section id="hero" style="background-image: url(' img/hero4.png');">
      <h4>Trade-in-offer</h4>
      <h2>Super value deals</h2>
      <h1>On all Stationery</h1>
      <p>Save more with coupons & up to 70% off!</p>
      <button onclick="windowOpen()"  style="background-image: url('img/button.png');">Shop Now</button>
   </section>

   <section id="feature" class="section-p1 ">
      <div class="fe-box">
         <img src="img/features/f1.png" alt="">
         <h6>Free Delivery</h6>
      </div>
      <div class="fe-box">
         <img src="img/features/f2.png" alt="">
         <h6>Fast to Door</h6>
      </div>
      <div class="fe-box">
         <img src="img/features/f3.png" alt="">
         <h6>Save Money</h6>
      </div>
      <div class="fe-box">
         <img src="img/features/f4.png" alt="">
         <h6>Promotions</h6>
      </div>
      <div class="fe-box">
         <img src="img/features/f5.png" alt="">
         <h6>Happy Sell</h6>
      </div>
      <div class="fe-box">
         <img src="img/features/f6.png" alt="">
         <h6>24/7 Support</h6>
      </div>

   </section>


   <section class="products">
      <h1 class="title">latest products</h1>
      <p>Find the new products and update your life </p>

      <div class="box-container">

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 8") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
         ?>
               <form action="" method="post" class="box">
                  <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                  <div class="name"><?php echo $fetch_products['name']; ?></div>
                  <div class="price">Rs.<?php echo $fetch_products['price']; ?>/-</div>
                  <input type="number" min="1" name="product_quantity" value="1" class="qty">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                  <input type="submit" value="add to cart" name="add_to_cart" class="btn">
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">no products added yet!</p>';
         }
         ?>
      </div>

      <div class="load-more" style="margin-top: 2rem; text-align:center">
         <a href="shop.php" class="option-btn">Load more</a>
      </div>

   </section>

  <section id="banner" class="section-m1" style="background-image: url('img/banner/b2.jpg');">
      <h4>Repair Sevices</h4>
      <h2>Up to <span>70% off</span> - All Printers & Laptops </h2>
      <button class="normal">Explore More </button>
   </section>

   <?php include 'news.php'; ?>



   <?php include 'footer.php'; ?>

   <script src="js/script.js"></script>

</body>

</html>