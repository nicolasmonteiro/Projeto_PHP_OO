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

      <a href="marcar_consulta.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Marque sua</span> Consulta</a>

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
          <h2>Escolha seu exame</h2>
          <p>Selecione o exame de sua preferência</p>
        </div>
        <div class="row">
            <div class="col-md-6 form-group mt-3">
              <input type=number name="quant_exam" class="form-control datepicker" required="" id="exame" placeholder="Quantidade" min="1" max="10">
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group mt-3">
              <select name="exames" id="exames" class="form-select">
                <option value="">Escolha o exame</option>
                <option value="Exame 1">Hemograma</option>
                <option value="Exame 2">Covid-19</option>
              </select>
              <div class="validate"></div>
                <br>
            </div>
            <div class="text-center"><button class="appointment-btn scrollto " type="submit">Agendar exame</button></div>
        </form>
          <br>
          <br>
    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Heath Clin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">