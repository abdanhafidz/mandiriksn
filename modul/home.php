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
                    </div>
                </div>
            </div>
    </div>a';
    }
    public function main(){
    $this->beranda();
    }
}



?>