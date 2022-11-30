<nav id="navigation" class="navbar navbar-expand-md  fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('/') ?>"><img src="bootstrap/dist/img/logo-2.png" class="img-fluid" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-light"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?= base_url('/') ?>">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger active" href="<?= base_url('/about') ?>">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#barang">Daftar Barang</a>
        </li>
      </ul>
      <a href="#" class="btn btn-primary ml-3 px-3">Masuk</a>
    </div>
  </div>
</nav>