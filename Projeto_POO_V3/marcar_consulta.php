<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Heath Clin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link gref="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- =======================================================
  * Template Name: Medilab - v4.0.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">heathclin@clinica.com</a>
        <i class="bi bi-phone"></i> (81) 3428-1946
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Heath Clin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Serviços</a></li>
          <li><a class="nav-link scrollto" href="index.php#departments">Especialidades</a></li>
          <li><a class="nav-link scrollto" href="index.php#doctors">Médicos</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
          <li><a class="nav-link scrollto" href="cadastro.php">Cadastro</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Marque sua</span> Consulta</a>

    </div>
  </header><!-- End Header -->
<body>
    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">
<br>
<br>
<br>
        <div class="section-title">
          <h2>Marque sua consulta</h2>
          <p>Selecione a especialidade médica de sua preferência.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Insira pelo menos 4 caracteres">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Por favor digite um email válido">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Telefone" data-rule="minlen:4" data-msg="Insira pelo menos 4 caracteres">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Data da consulta" data-rule="minlen:4" data-msg="Insira pelo menos 4 caracteres">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Escolha a Especialidade</option>
                <option value="Department 1">Cardiologista</option>
                <option value="Department 2">Psicólogo</option>
                <option value="Department 3">Clínico Geral</option>
                <option value="Department 4">Pediatra</option>
                <option value="Department 5">Oftalmologista</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Escolha o médico</option>
                <option value="Doctor 1">Felipe Siongo</option>
                <option value="Doctor 2">Ana Nascimento</option>
                <option value="Doctor 3">Wagner Alves</option>
                <option value="Doctor 4">Alberto Lopes</option>
                <option value="Doctor 5">Kasy Possani</option>
              </select>
            <div class="validate"></div>
            </div>

            <!-- Comentário
            <div class="row">
            <div class="input-field col s12">
            <select>
            <optgroup label="team 1">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </optgroup>
            <optgroup label="team 2">
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
            </optgroup>
            </select>
            <label>Optgroups</label>
        </div> -->
            <div class="col-md-4.25 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Escolha a forma de pagamento</option>
                <option value="Pagamento 1">Dinheiro</option>
                <option value="Pagamento 2">Crédito</option>
                <option value="Pagamento 3">Débito</option>
              </select>
              <div class="validate"></div>
            </div>
              <div class="col-md-4.25 form-group mt-3 ">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Escolha o Plano</option>
                <option value="Plano 1">Hapvida</option>
                <option value="Plano 2">Unimed</option>
                <option value="Plano 3">Bradesco</option>
                <option value="Plano 4">Amil</option>
              </select>
              <div class="validate"></div>
              </div>
            </div>
          </div>
          <div class="text-center"><button class="appointment-btn scrollto " type="submit">Marcar consulta</button></div>
        </form>
          <br>
          <br>
          <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-5 col-md-6 footer-contact">
        <h3>Heath Clin</h3>
        <p>
        Av. Prof. Andrade Bezerra, 795  <br>
        Salgadinho, Olinda - PE<br>
        53110-110<br><br>
          <strong>Fone:</strong> (81) 3428-1946<br>
          <strong>Email:</strong> heathclin@clinica.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-5 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Heath Clin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>

  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>