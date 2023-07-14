<?php

require __DIR__ . '/koneksi/koneksi.php';


require __DIR__ . '/layouts/resources.php';
?>

<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="container" data-layout="container">
      <script>
        var isFluid = JSON.parse(localStorage.getItem('isFluid'));
        if (isFluid) {
          var container = document.querySelector('[data-layout]');
          container.classList.remove('container');
          container.classList.add('container-fluid');
        }
      </script>

      <div class="content">
        <div class="row g-0 mt-3">
          <div class="col-lg-8 pe-lg-2">
            <div class="card">
              <div class="card-header bg-light">
                <h5 class="mb-0 namaKota"></h5>
              </div>
              <div class="card-body text-justify">
                <div class="isiPertama text-1000"></div>
                <div class="collapse show isiKedua text-1000" id="profile-intro">
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-4 ps-lg-2">
            <div class="card mb-3">
              <div class="card-header bg-light">
                <div class="bg-holder bg-card" style="background-image:url(wp-contents/template/assets/img/icons/spot-illustrations/corner-2.png);">
                </div>
                <h5 class="mb-0">Saat ini</h5>
              </div>
              <div class="card-body text-justify">
                <h4 class="cuacaDetail"></h4>
                <div class="d-flex align-items-center">
                  <h1 class="tempC"></h1>&nbsp&nbsp
                  <div class="sekarang mb-3">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header bg-light">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="mb-0" id="followers">Cuaca yang akan datang</h5>
                </div>
                <div class="col text-end">
                </div>
              </div>
            </div>
            <div class="card-body bg-light px-1 py-0">
              <div class="row g-0 text-center fs--1 bungkus">
                <!-- <div class="col-12">
                  <div class=" bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/1.jpg" alt="" width="100" /></a>
                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Emilia Clarke</a>
                    </h6>
                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Technext limited</a></p>
                  </div>
                </div> -->
                <!-- <div class="col-12">
                  <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/2.jpg" alt="" width="100" /></a>
                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Kit Harington</a>
                    </h6>
                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Harvard Korea Society</a></p>
                  </div>
                </div>
                <div class="col-12">
                  <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/3.jpg" alt="" width="100" /></a>
                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Sophie Turner</a>
                    </h6>
                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Graduate Student Council</a></p>
                  </div>
                </div>
                <div class="col-12">
                  <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/4.jpg" alt="" width="100" /></a>
                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Peter Dinklage</a>
                    </h6>
                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Art Club, MIT</a></p>
                  </div>
                </div>
                <div class="col-12">
                  <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/5.jpg" alt="" width="100" /></a>
                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Nikolaj Coster</a>
                    </h6>
                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Archery Club, MIT</a></p>
                  </div>
                </div>
                <div class="col-12">
                  <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/6.jpg" alt="" width="100" /></a>
                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Isaac Hempstead</a>
                    </h6>
                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Asymptones</a></p>
                  </div>
                </div>
                <div class="col-12">
                  <div class="bg-white dark__bg-1100 p-3 h-100"><a href="../../pages/user/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../../assets/img/team/7.jpg" alt="" width="100" /></a>
                    <h6 class="mb-1"><a href="../../pages/user/profile.html">Alfie Allen</a>
                    </h6>
                    <p class="fs--2 mb-1"><a class="text-700" href="#!">Brain Trust</a></p>
                  </div>
                </div> -->
              </div>
            </div>
          </div>


          <?php require __DIR__ . "/layouts/footer.php" ?>