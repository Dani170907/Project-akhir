<?php
  
  date_default_timezone_set('Asia/Jakarta');
  function getWaktu() {
      $saatIni = date("H");
      
      if ($saatIni < 5) {
          return "Malam";
      } elseif ($saatIni >= 5 && $saatIni < 9) {
          return "Pagi";
      } elseif ($saatIni >= 9 && $saatIni < 15) {
          return "Siang";
      } elseif ($saatIni >= 15 && $saatIni < 18 ) {
          return "Sore";
      } else {
          return "Malam";
      }
  }
  
  function salam($nama) {
      $currentTime = getWaktu();
      return "Halo $nama, Selamat $currentTime!";
  }

  $currentPage = uri_string();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SweetAlert2 JS -->
    <script src="<?= base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>
    <!-- Tailwind CSS -->
    <link href="<?= base_url('assets/css/output.css'); ?>" rel="stylesheet">
    <title>Halaman Admin</title>
</head>

<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="relative mx-auto my-auto px-4 py-4 flex justify-between items-center bg-white shadow-lg">
        <a class="text-3xl font-bold leading-none" href="#">
            <img src="<?= base_url('assets/images/SA.png') ?>" alt="Logo" class="h-12">
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="text-sm <?= ($currentPage == 'admin/beranda') ? 'text-blue-600 font-bold' : 'text-gray-400' ?> hover:text-gray-500" href="<?= base_url('admin/beranda') ?>">Beranda</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm <?= ($currentPage == 'admin/pendaftaran') ? 'text-blue-600 font-bold' : 'text-gray-400' ?> hover:text-gray-500" href="<?= base_url('admin/pendaftaran') ?>">Pendaftaran</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm <?= ($currentPage == 'admin/event') ? 'text-blue-600 font-bold' : 'text-gray-400' ?> hover:text-gray-500" href="<?= base_url('admin/event') ?>">Event</a></li>
        </ul>
        <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="<?= base_url() ?>Profile">Profile</a>
        <a class="hidden lg:inline-block py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-50 font-semibold rounded-xl transition duration-200" href="<?= base_url() ?>Login/logout" id="logoutBtn">Log Out</a>
    </nav>

    <!-- Mobile Menu -->
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <img src="<?= base_url('assets/images/SA.png') ?>" alt="Logo" class="h-12">
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="<?= base_url('admin/beranda') ?>">Beranda</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="<?= base_url('admin/pendaftaran') ?>">Pendaftaran</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="<?= base_url('admin/event') ?>">Event</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6">
                    <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold bg-gray-50 hover:bg-gray-100 rounded-xl" href="<?= base_url() ?>Admin/profile">Profile</a>
                </div>
                <div class="pt-auto">
                    <a class="block px-4 py-3 mb-3 leading-normal text-xs text-center font-semibold bg-gray-50 hover:bg-gray-100 rounded-xl" href="<?= base_url() ?>Login/logout" id="logoutBtn">Log Out</a>
                </div>
            </div>
        </nav>
    </div>


<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});

document.getElementById('logoutBtn').addEventListener('click', function(event) {
        event.preventDefault();

        // Konfirmasi SweetAlert
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan keluar dari akun ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, keluar!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke URL logout jika dikonfirmasi
                window.location.href = "<?= base_url('Login/logout') ?>";
            }
        });
    });
</script>


