<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hibiscus</title>

  <!-- Google Fonts (Unificada en una sola llamada) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="../Imagenes/logo1.ico">
  <link rel="stylesheet" href="../css/estilo.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <!-- Header section -->
  <header>
    <input type="checkbox" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Hibiscus Shop<span>.</span></a>

    <nav class="navbar">
      <a href="index.html">Home</a>
      <a href="#products">Products</a>
      <a href="#about_us">About Us</a>
      <a href="#contact">Contact</a>
      <a href="#sign_in">Register</a>
    </nav>

    <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-shopping-cart"></a>
      <a href="#" class="fas fa-user"></a>
    </div>
  </header>
  <!-- Header section ends -->

  <!-- Formulario section -->
  <form method="post" action="tu_accion.php">
    <h2>Register</h2>
    <p>Start your registration</p>

    <div class="input-wrapper">
      <label for="name"></label>
      <input type="text" id="name" name="name" placeholder="Name" required>
      <img class="input-icon" src="../Imagenes/name.svg" alt="Name icon">
    </div>

    <div class="input-wrapper">
      <label for="email"></label>
      <input type="email" id="email" name="email" placeholder="Email" required>
      <img class="input-icon" src="../Imagenes/email.svg" alt="Email icon">
    </div>

    <div class="input-wrapper">
      <label for="address"></label>
      <input type="text" id="address" name="address" placeholder="Address" required>
      <img class="input-icon" src="../Imagenes/direction.svg" alt="Address icon">
    </div>

    <div class="input-wrapper">
      <label for="phone"></label>
      <input type="tel" id="phone" name="phone" placeholder="Telephone" required>
      <img class="input-icon" src="../Imagenes/phone.svg" alt="Phone icon">
    </div>

    <div class="input-wrapper">
      <label for="password"></label>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <img class="input-icon" src="../Imagenes/password.svg" alt="Password icon">
    </div>

    <input class="btn" type="submit" name="register" value="Register">
  </form>
  <!-- Formulario section ends -->

  <!-- Footer section -->
  <!-- <footer class="footer">
    <div class="box-container">

      <div class="box">
        <h3>Quick links</h3>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Products</a>
        <a href="#">Review</a>
        <a href="#">Contact</a>
      </div>

      <div class="box">
        <h3>Extra links</h3>
        <a href="#">My account</a>
        <a href="#">My order</a>
        <a href="#">My favorites</a>
      </div>

      <div class="box">
        <h3>Locations</h3>
        <a href="#">India</a>
        <a href="#">USA</a>
        <a href="#">Colombia</a>
        <a href="#">Italy</a>
      </div>

      <div class="box">
        <h3>Contact Info</h3>
        <a href="tel:+3925688807">+39 256 888 07</a>
        <a href="mailto:hibiscus@gmail.com">hibiscusbraceletshop@gmail.com</a>
        <a href="#">Madrid, España - 28921</a>
        <img src="../Imagenes/payments2.png" alt="Payment methods">
      </div>

      <div class="box">
        <div class="icons">
          <h3>Connect With Us</h3>
          <a href="https://www.facebook.com" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.youtube.com" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="https://www.instagram.com" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

    </div>

    <div class="credit">
      &copy; Created by <span>Gloria Naranjo Web Designer</span> | All rights reserved
    </div>
  </footer> -->
  <!-- Footer section ends -->

  <?php
      include("register.php");
  
  ?>

</body>

</html>
