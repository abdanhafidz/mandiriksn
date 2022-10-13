<?php
class Home{
    public function beranda(){
    echo '
    <div class="beranda">
        <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                    
                    <h1 class="title">Pelatihan Berkualitas, Harga Bersahabat</h1>
                    <h3 class="subtitle">Pelatihan Intensif Persiapan  OSN-P 2022 Jenjang SMA</h3>
                        <p>"Program pelatihan selama 1 bulan bersama tutor medalis olimpiade sains Internasional/Nasional 
                        dalam rangka mempersiapkan peserta OSN-P SMA 2022 untuk berkompetisi melalui pelatihan berbasis penguasaan talenta, 
                        pengembangan diri, pendidikan karakter, dan penguatan integritas dalam berkompetisi"
                        </p>
                    </div>
                    <div class="col-lg-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active  img-carou">
      <img src="https://pbs.twimg.com/media/FGH3Jj9UYAEHJiQ?format=jpg&name=large" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item img-carou">
      <img src="https://pbs.twimg.com/media/FEzWoOGUUAEFd_Z.jpg" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item img-carou">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEgIB2vflNo_nq32r1ugKq2Ng35D6atKFQEQ&usqp=CAU" class="d-block w-100 " alt="...">
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
    </div>';
    }
    public function main(){
    $this->beranda();
    }
}



?>