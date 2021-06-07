<?php

// Koneksi
require_once("koneksi.php");

/**
 * Memanggil Model
 */
//require_once("from.php");

//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {

    session_start();

    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page
    
    // require_once akan Dirubah Saat Modul 2
    if ($page == "View") {

       //$auth = new AuthController();

        if ($aksi == 'proses') {
            require_once("View/latihan7.php");
        } /*else if ($aksi == 'loginAslab') {
            $auth->login_aslab();
        } else if ($aksi == 'loginPraktikan') {
            $auth->login_praktikan();
        } else if ($aksi == 'authAslab') {
            $auth->authAslab();
            
        } else if ($aksi == 'authPraktikan') {
            $auth->authPraktikan();
        } else if ($aksi == 'logout') {
            $auth->logout();
        } else if ($aksi == 'daftarPraktikan') {
            $auth->daftarpraktikan();
        } else if ($aksi == 'storePraktikan') {
            $auth->storePraktikan();
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "aslab") {
        require_once("View/menu/menu_aslab.php");

        if($_SESSION['role'] == 'aslab'){
            $aslab = new AslabController();
            
            if ($aksi == 'view') {
                $aslab->index();
            } else if ($aksi == 'nilai') {
                $aslab->nilai();
            } else if ($aksi == 'createNilai') {
                $aslab->createNilai();
            } else if ($aksi == 'storeNilai') {
                $aslab->storeNilai();
            } else {
                echo "Method Not Found";
            }
        }else {
            header("location: index.php?page=auth&aksi=loginAslab");
        }
    } else if ($page == "praktikum") {
        require_once("View/menu/menu_aslab.php");

        if($_SESSION['role'] == 'aslab'){
            $praktikum = new PraktikumController();
            if ($aksi == 'view') {
                $praktikum->index();
            } else if ($aksi == 'create') {
                $praktikum->create();
            } else if ($aksi == 'store') {
                $praktikum->store();
            } else if ($aksi == 'edit') {
                $praktikum->edit();
            } else if ($aksi == 'update') {
                $praktikum->update();
            } else if ($aksi == 'aktifkan') {
                $praktikum->aktifkan();
            } else if ($aksi == 'nonAktifkan') {
                $praktikum->nonAktifkan();
            } else {
                echo "Method Not Found";
            }
        }else{
            header("location: index.php?page=auth&aksi=loginAslab");
        }
    } else if ($page == "modul") {
        require_once("View/menu/menu_aslab.php");

        if($_SESSION['role'] == 'aslab'){
                $modul = new ModulController();
            if ($aksi == 'view') {
                $modul->index();
            } else if ($aksi == 'create') {
                $modul->create();
            } else if ($aksi == 'store') {
                $modul->store();
            } else if ($aksi == 'delete') {
                $modul->delete();
            } else {
                echo "Method Not Found";
            }
        }else {
            header("location: index.php?page=auth&aksi=loginAslab");
        }
    } else if ($page == "praktikan") {
        require_once("View/menu/menu_praktikan.php");

        if($_SESSION['role'] == 'praktikan'){
            $praktikan = new PraktikanController();
            if ($aksi == 'view') {
                $praktikan->index();
            } else if ($aksi == 'edit') {
                $praktikan->edit();
            } else if ($aksi == 'update') {
                $praktikan->update();
            } else if ($aksi == 'praktikum') {
                $praktikan->praktikum();
            } else if ($aksi == 'daftarPraktikum') {
                $praktikan->daftarPraktikum();
            } else if ($aksi == 'storePraktikum') {
                $praktikan->storePraktikum();
            } else if ($aksi == 'nilaiPraktikan') {
                $praktikan->nilaiPraktikan();
            } else {
                echo "Method Not Found";
            }
        }else {
            header("location: index.php?page=auth&aksi=loginPraktikan");
        }
    } else if ($page == 'daftarprak') {
        require_once("View/menu/menu_aslab.php");

        if($_SESSION['role'] == 'aslab'){
            $daftarprak = new DaftarprakController();
            if ($aksi == 'view') {
                $daftarprak->index();
            } else if ($aksi == 'verif') {
                $daftarprak->verif();
            } else if ($aksi == 'unVerif') {
                $daftarprak->unVerif();
            } else {
                echo "Method Not Found";
            }
        }else {
            header("location: index.php?page=auth&aksi=loginAslab");
        }
    } else {
            echo "Page Not Found";
    }*/
}
} else {
    header("location: index.php?page=View&aksi=proses"); //Jangan ada spasi habis location
}