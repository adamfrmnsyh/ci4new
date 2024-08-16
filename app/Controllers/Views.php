<?php

namespace App\Controllers;

class Views extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function menuMasakan(): string
    {
        return view ('pages/MenuMasakan', ['title' => 'Menu Masakan']);
    }
    public function infokampus(): string
    {
        return view ('pages/InfoKampus', ['title' => 'Info Mahasiswa']);
    }
    public function tentangmhs(): string
    {
        return view ('pages/TentangMahasiswa', ['title' => 'Tentang Mahasiswa']);
    }
}
