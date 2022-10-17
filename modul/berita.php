<?php
 class Berita{
 public function berita(){
    echo '<div class="screen-sec">
    <div class="container">
            <div class="row">
                <div class="col-lg-7">
                <h1 class="title"><i>Berita Terkini</i></h1>
                <h3 class="subtitle">Kiat Sukses Gilbert Raih Medali Emas
                KSN Astronomi 2021 Modal Hoki</h3>
                    <p>Halo Sobat Mandiri KSN! Pada kesempatan ini Gilbert Adriel Tantoso sudah 
                    bersama kita untuk berbagi pengalamannya dalam perjuangannya meraih medali emas KSN Astronomi 2021. 
                    Meskipun kabarnya ia mengakui medali itu diraih dengan modal hoki, 
                    nyatanya ada fakta menarik perjuangan kak Gilbert loh. Yuk cek selengkapnya di artikel ini.
                    </p>
                    <div class="carousel-indicators" style="position:relative">
                        <button type="button" data-bs-target="#carouselExampleIndicators" class="carousel-btn" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" class="carousel-btn" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" class="carousel-btn" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                </div>
                <div class="col-lg-5">
                <div id="carouselExampleIndicators" class="carousel slide  img-carou-berita" data-bs-ride="true">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="'.domain.'/_public/assets/img/gilbert.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="'.domain.'/_public/assets/img/gilbert.png" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="'.domain.'/_public/assets/img/gilbert.png" class="d-block w-100 " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    </div>
                </div>

                </div>
              </div>
    </div>
    </div>
                
                ';
  }
  public function main(){
      $this->berita();
  }
}


?>