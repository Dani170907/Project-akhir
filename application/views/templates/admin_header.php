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
      return "Selamat $currentTime, $nama!";
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin.css')?>">
    <link href="<?= base_url('assets/css/output.css'); ?>" rel="stylesheet">
    <title>Halaman Admin</title>
</head>
<body>
<!-- First navbar -->
<!-- Main navigation container -->
<nav
  class="relative flex w-full flex-nowrap items-center justify-between bg-primary py-2 shadow-dark-mild lg:flex-wrap lg:justify-start lg:py-4"
  data-twe-navbar-ref>
  <div class="flex w-full flex-wrap items-center justify-between px-3">
    <div class="mx-2">
      <a class="text-xl text-neutral-100" href="#">Navbar</a>
    </div>
    <!-- Hamburger button for mobile view -->
    <button
      class="block border-0 bg-transparent px-2 text-neutral-300 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
      type="button"
      data-twe-collapse-init
      data-twe-target="#navbarSupportedContent9"
      aria-controls="navbarSupportedContent9"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <!-- Hamburger icon -->
      <span
        class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor">
          <path
            fill-rule="evenodd"
            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>

    <!-- Collapsible navbar container -->
    <div
      class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
      id="navbarSupportedContent9"
      data-twe-collapse-item>
      <!-- Left links -->
      <ul
        class="list-style-none me-auto flex flex-col ps-0 lg:mt-1 lg:flex-row"
        data-twe-navbar-nav-ref>
        <!-- Home link -->
        <li
          class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2"
          data-twe-nav-item-ref>
          <a
            class="text-neutral-300 transition duration-200 hover:text-neutral-200 hover:ease-in-out focus:text-neutral-200 active:text-black/80 motion-reduce:transition-none lg:px-2"
            aria-current="page"
            href="#"
            data-twe-nav-link-ref
            >Home</a
          >
        </li>
        <!-- Features link -->
        <li
          class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0"
          data-twe-nav-item-ref>
          <a
            class="p-0 text-neutral-300 transition duration-200 hover:text-neutral-200 hover:ease-in-out focus:text-neutral-200 active:text-black/80 motion-reduce:transition-none lg:px-2"
            href="#"
            data-twe-nav-link-ref
            >Features</a
          >
        </li>
        <!-- Pricing link -->
        <li
          class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0"
          data-twe-nav-item-ref>
          <a
            class="p-0 text-neutral-300 transition duration-200 hover:text-neutral-200 hover:ease-in-out focus:text-neutral-200 active:text-black/80 motion-reduce:transition-none lg:px-2"
            href="#"
            data-twe-nav-link-ref
            >Pricing</a
          >
        </li>
        <!-- About link -->
        <li
          class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0"
          data-twe-nav-item-ref>
          <a
            class="p-0 text-neutral-300 transition duration-200 hover:text-neutral-200 hover:ease-in-out focus:text-neutral-200 active:text-black/80 motion-reduce:transition-none lg:px-2"
            href="#"
            data-twe-nav-link-ref
            >About</a
          >
        </li>
      </ul>
    </div>
  </div>
</nav>

      <h3 class="text-center bg-blue-600"><i><?= salam('Admin') ?></i></h3><br>
      <a href="<?= base_url() ?>Login/logout">Log Out</a>
  
      <ul>
          <li><a href="<?= base_url('admin/beranda') ?>">Beranda</a></li>
          <li><a href="<?= base_url('admin/pendaftaran') ?>">Daftar Lomba</a></li>
          <li><a href="<?= base_url('admin/event') ?>">Event</a></li>
      </ul>
  