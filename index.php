<?php

// Koneksi
require_once("koneksi.php");

/**
 * Memanggil Model
 */
require_once("Model/authModel.php");
require_once("Model/adminModel.php");
require_once("Model/anggotaModel.php");


/**
 * Memanggil Controller
 */
require_once("controller/authController.php");
require_once("controller/adminController.php");
require_once("controller/anggotaController.php");


//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {

    session_start();

    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page
    
    if ($page == "auth") {
       $auth = new authController();
        if ($aksi == 'HalamanAwal') { 
            $auth->index();
        }else if ($aksi == 'loginAdmin') {
            $auth->loginAdmin();
        } else if ($aksi == 'loginAnggota') {
            $auth->loginAnggota();
        }else if ($aksi == 'authAnggota'){
            $auth->authAnggota();
        }else if($aksi == 'authAdmin'){
            $auth->authAdmin();
        } else if ($aksi == 'logout') {
            $auth->logout();
        } else if ($aksi == 'daftarAnggota') {
           $auth->daftarAnggota();
        } else if ($aksi == 'inputAnggota') {
            $auth->inputAnggota();
        } else {
            echo "Method Not Found";
        }


    } else if ($page == "anggota"){
        if($_SESSION['role'] == 'anggota'){
            $anggota = new anggotaController();
            if ($aksi == 'pinjambuku') {
                $anggota->daftarbuku();
            }else if($aksi == 'editProfile'){
                $anggota->editProfile();
            }else if($aksi == 'cekEditProfile'){
                $anggota->cekEditProfile();
            }else if($aksi == 'pinjam'){
                $anggota->daftarPetugas();
            }else if($aksi == 'cekPinjam'){
                $anggota->pinjamBuku();
            }else if($aksi == 'cari'){
                $anggota->cariBuku();
            }else if($aksi == 'lihatpinjambuku'){
                $anggota->viewPinjaman();
            }else if($aksi == 'cekBuku'){
                $anggota->cekBuku();
            }else if($aksi == 'batalpinjam'){
                $anggota->batalPinjam();
            }else {
                echo "Method Not Found";
            }
        }else{
            header("location:index.php?page=auth&aksi=loginAnggota");
        }


    }else if ($page == "admin"){
        if($_SESSION['role']=='admin'){
            $admin = new adminController();
            if ($aksi == 'daftarpeminjam') {
                $admin->daftarPeminjam();
            } else if ($aksi == 'viewBuku') {
                $admin->daftarbuku();
            }else if ($aksi == 'daftarpenerbit'){
                    $admin->daftarpenerbit();
            } else if ($aksi == 'tambahBuku') {
                $admin->tambahBuku();
            }else if ($aksi == 'cekTambahBuku'){
                $admin->cekTambahBuku();
            }else if ($aksi == 'editBuku'){
                $admin->editbuku();
            }else if ($aksi == 'cekEditBuku'){
                $admin->cekEditBuku();
            }else if ($aksi == 'deleteBuku'){
                $admin->deleteBuku();
            }else if ($aksi == 'tambahpenerbit'){
                $admin->tambahpenerbit();
            }else if ($aksi == 'cekTambahPenerbit'){
                $admin->cekTambahPenerbit();
            }else if ($aksi == 'editPenerbit'){
                $admin->editpenerbit();
            }else if ($aksi == 'cekEditPenerbit'){
                $admin->cekEditPenerbit();
            }else if ($aksi == 'deletePenerbit'){
                $admin->deletePenerbit();
            }else if ($aksi == 'cari'){
                $admin->cariBuku();
            }else if ($aksi == 'lihatpinjambuku'){
                $admin->DaftarPinjamanBuku();
            }else {
                echo "Method Not Found";
            }
        }else{
            header("location:index.php?page=auth&aksi=loginAdmin");
        }    
        
    }else {
            echo "Halaman Tidak Ditemukan";
    }


} else {
    header("location: index.php?page=auth&aksi=HalamanAwal"); //Jangan ada spasi habis location
}
