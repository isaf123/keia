<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KEIA-home solution</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="w-screen">
  <?php
  require 'db.php';

  $result = $conn->query("SELECT * FROM produk");
  ?>
  <header>
    <nav class="shadow-md">
      <h3>KEIA</h3>
      <div class="menu-page">
        <li><a href="index.php">Home</a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="about-us.html">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </div>
    </nav>
  </header>

  <main class="w-full flex justify-center mt-30 ">
    <section class="w-[1300px] flex h-[500px] justify-center items-center ">
      <div class="flex-3">
        <h2 class="text-5xl tracking-wide leading-normal font-bold w-[670px]">Comfort Starts with the Right Furniture.</h2>
        <p class="font-light w-[600px] pb-20">Discover our curated collection of high-quality furniture that brings warmth, function, and timeless style into every room of your home.</p>
        <a href="" class=" inline-block pt-20 button-link">shop now</a>
      </div>
      <div class="flex-2 ">
        <div class="bg-blue rounded-xl w-[600px] h-[380px] overflow-hidden flex justify-center items-center">
          <img src="../asset/yellow-chair.png" alt="" class="w-[600px] h-auto">

        </div>

      </div>

    </section>
  </main>

</body>

</html>