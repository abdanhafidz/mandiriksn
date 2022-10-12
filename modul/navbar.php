<?php
    class Navbar{
        public function main(){
            echo '<nav class="navbar navbar-expand-lg mainNavbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="'.domain.'"><img src="'.domain.'/_public/assets/img/logo.png" class="logo" /> </a>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                  Mandiri KSN <br>
                  Education
                  </li>
                
                </ul>
                <ul class="navbar-nav ">
               
                <li class="nav-item">
                  <a class="nav-link" href="'.domain.'">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="'.domain.'/profil">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="'.domain.'/program">Program</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="'.domain.'/artikel">Artikel</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="'.domain.'/elearning">E Learning</a>
            </li>
              </ul>
              </div>
            </div>
          </nav>';
        }
    }





?>