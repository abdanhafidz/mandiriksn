<?php
// © 2021 www.adanz.com - AdanZ Framework By Abdan Hafidz .
// Created With Love By Abdan Hafidz
// +-- Function PHP --+
// Please Donate Me https://abdanhafidz.com/donate
//[[[[[[ FUNCTION BERIKUT ADALAH DEFAULT DIMOHON UNTUK TIDAK DIRUBAH ]]]]]]
class module {
    public function navbar(){
        $navbar = new Navbar;
        $navbar->main();

    }
    public function home(){
        $home = new Home;
        $home->main();
    }
    public function berita(){
        $berita = new Berita;
        $berita->main();
    }
    public function program(){
        $program = new Program;
        $program->main();
    }
}

Dengklek Lover