<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KPCS</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/print.css" />
</head>

<body>
  <div class="container">
    <h2>PRINT YOUR FILES </h2>
    <p>Upload files you want to print.</p>
    <p> PDF and Images are allowed. </p> <br>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
      <input type="file" id="file-input" name="file" multiple />
      <label for="file-input">
        <i class="fa-solid fa-arrow-up-from-bracket"></i>
        &nbsp; Choose Files To Upload
      </label>
      <div id="num-of-files">No Files Choosen</div>
      <ul id="files-list"></ul>
      <div class="contact">
        <h3>PLACE YOUR ORDER</h3>
        <input type="text" name="name" required placeholder="Enter your name" class="box">
        <input type="email" name="email" required placeholder="Enter your email" class="box">
        <input type="number" name="number" required placeholder="Enter your number" class="box">
        <textarea name="address" class="box" placeholder="Enter your address" id="" cols="2" rows="2"></textarea>
      </div>
      <button class="button-30" role="button">Order Now</button>
    </form>
  </div>


  <script src="script.js"></script>
</body>

</html>