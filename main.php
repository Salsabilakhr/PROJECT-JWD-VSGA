<?php
require "inc/koneksi.php";
$koneksi = new Koneksi(); // Membuat objek koneksi
$queryservice = $koneksi->db->query("SELECT service_id, service_jenis, service_harga, gambar_service FROM tb_service");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta jenis="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5"><!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat datang di MECH AWAY !</h1>
      <h2 class="h2main">Jangan takut di jalan, ada Mech Away !</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->
    </div>
     <!-- ======= About Section ======= -->
     <section id="about" class="about">
     <div class="container">

<div class="row">
  <div class="col-xl-6 col-lg-7" data-aos="fade-left">
    <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
  </div>
  <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">MECH AWAY</h3>
            <p data-aos="fade-up">
            <p>Kami dengan bangga mempersembahkan kepada Anda layanan terbaik dalam perawatan dan perbaikan motor di Medan. Di sini di <strong>Mech Away</strong>, kami percaya bahwa motor adalah lebih dari sekadar kendaraan, mereka adalah bagian dari gaya hidup, petualangan, dan kebebasan.</p> 
    <p>Dengan tim mekanik berpengalaman dan fasilitas yang dilengkapi dengan teknologi terkini, kami berkomitmen untuk memberikan pelayanan terbaik kepada setiap pelanggan kami. Mulai dari perawatan rutin hingga perbaikan kompleks, kami siap membantu Anda menjaga motor Anda dalam kondisi prima dan memastikan pengalaman berkendara yang aman dan menyenangkan.</p>
    <p>Tidak hanya itu, di Mech Away, kami juga menyediakan berbagai aksesori dan suku cadang motor terkemuka, serta konsultasi ahli untuk membantu Anda memilih perlengkapan yang tepat sesuai dengan gaya berkendara dan kebutuhan Anda. Kami bangga menjadi bagian dari komunitas pecinta motor di Medan, dan kami berharap dapat menjadi mitra yang dapat diandalkan bagi semua pengendara motor di sini. </p>
    <p>Terima kasih atas kepercayaan Anda kepada kami, dan kami tidak sabar untuk melayani Anda.</p>
    <p>Salam hangat,</p>
    <strong>Mech Away</strong>
            </p>
          </div>
        </div>

      </div>
      </section><!-- End About Section -->
      <section id="visi misi" class="about">
     <div class="container">

<div class="row">
  <div class="col-xl-6 col-lg-7" data-aos="fade-right">
    <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
  </div>
  <section id="visimisi" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h4>Visi & Misi</h4>
            <p>Visi:</p>
            <p>Menjadi platform bengkel online terkemuka yang menyediakan layanan berkualitas tinggi dan inovatif untuk memenuhi kebutuhan perawatan kendaraan konsumen secara efisien dan dapat diandalkan.</p>
            <p>Misi:</p>
            <p>
              Memberikan pengalaman pelanggan yang superior dengan layanan yang cepat, andal, dan ramah.
            Menyediakan akses mudah dan transparan untuk layanan perawatan kendaraan melalui platform online kami.
            Menghadirkan solusi perawatan kendaraan yang inovatif dan hemat waktu bagi pelanggan.
            Menjaga standar kualitas tinggi dalam layanan kami dengan bekerja sama dengan bengkel terpercaya dan terlatih.
            Mendukung pertumbuhan industri otomotif dengan menyediakan platform yang memungkinkan bengkel lokal untuk berkembang dan memperluas jangkauan mereka secara online.
            
            </p>
</div>
<br>
</section>

      </section><!-- End About Section -->
    <section id="galeri" class="">
      <div class="container">
        <h3>Galeri</h3>
        <div class="">
            <div class="">
                <div class="">
                <img src="layouts/img/galeri.jpeg" alt=""> 
                <img src="layouts/img/galeri2.jpeg" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title"></h4>
                        <p class="card-text text-truncate"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <br>
    </section>
     <!-- ======= Services Section ======= -->

    <section id="service" class="service">
      <div class="container">
        <h3>Produk</h3>
        <div class="row mt-5">
            <?php while($data = $queryservice->fetch(PDO::FETCH_ASSOC)){?>
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card">
                <img src="layouts/img/<?php echo $data['gambar_service']; ?>" alt="" style="width: 100%; height: 300px">
                    <div class="card-body text-center">
                        <h4 class="card-title"><?php echo $data['service_jenis']; ?></h4>
                        <p class="card-text text-truncate"><?php echo $data['service_harga']; ?></p>
                        <a href="#" class="btn btn-primary">Cek Profil</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Ananda Salsabila Khairi</p>
        </div>

        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Medan</p>
              </div>

              <div class="email mt-4">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>salsabila.khairi08@gmail.com</p>
              </div>

              <div class="phone mt-4">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0822233445566</p>
              </div>

            </div>

          </div>

        </div>
        </div>
            </section>
</body>
</html>