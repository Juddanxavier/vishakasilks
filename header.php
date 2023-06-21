<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

  <title>
    <?php wp_title(); ?> Vishaka Silks
  </title>
  <?php wp_head(); ?>
</head>

<body class="bg-skin-fill">
  <!-- <nav id="navbar" class=" sticky justify-between px-4 md:px-12 top-0 z-50">
    <div class="max-w-6xl mx-auto p-4">
      <div class="flex justify-between">

        <div class="logo-display">
          <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
          if (has_custom_logo()) {
            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
          } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
          }
          ?>
        </div>
        <div id="logotext z-50">
          <p class="text-2xl font-bold text-white hidden">Vishaks Silks</p>
        </div>
        <div class="hidden md:flex items-center text-white">
          <?php wp_nav_menu(
            array(
              'menu_class' => 'menu-header flex gap-6 text-[#ffffff]',
              'theme_location' => 'header'

            )
          ); ?>

        </div>

        <div class="md:hidden flex items-center">
          <button class="outline-none mobile-menu-button">
            <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div class="hidden mobile-menu">
      <ul class="mx-6">
        <?php wp_nav_menu(
          array(
            'menu_class' => 'menu-header text-[#ffffff]',
            'theme_location' => 'header'

          )
        ); ?>

      </ul>
    </div>
    <script>
      const btn = document.querySelector("button.mobile-menu-button");
      const menu = document.querySelector(".mobile-menu");

      btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
      });
    </script>
  </nav> -->
  <header class="fixed top-0 left-0 right-0 z-10 ">
    <nav class="container mx-auto px-10 py-4 flex items-center bg-green-700 justify-between" id="nav">
      <!-- Logo -->
      <a class="flex items-center" href="<?php echo esc_url(home_url('/')); ?>" id="logo">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if (has_custom_logo()) {
          echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
        } else {
          echo '<h1>' . get_bloginfo('name') . '</h1>';
        }
        ?>
        <a class="flex items-center hidden" href="<?php echo esc_url(home_url('/')); ?>" id="logotext">
          <p class="font-bold text-white">
            <?php bloginfo('name'); ?>
          </p>
        </a>

        <!-- R  esponsive menu button -->
        <div class="header flex md:hidden">
          <button class="text-white focus:outline-none" id="nav">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
        <!-- Navigation links -->
        <div class="hidden lg:flex lg:items-center lg:w-auto" id="menu">
          <?php wp_nav_menu(
            array(
              'menu_class' => 'menu-header lg:flex gap-6 text-[#ffffff]',
              'theme_location' => 'header'

            )
          ); ?>
        </div>

        <div class="md:hidden  fixed top-0 left-0 h-screen w-64 bg-green-800 text-white " id="mobile-menu-button">
          <!-- <div class="flex justify-between items-center p-4">
            <span class="text-xl font-bold">Logo</span>
            <button id="toggleDrawer" class="text-white focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                <path fill-rule="evenodd" d="M0 0h24v24H0z" clip-rule="evenodd" />
                <path d="M4 18h16v-2H4v2zM4 13h16v-2H4v2zM4 6v2h16V6H4z" />
              </svg>
            </button>
          </div> -->
          <p class="p-4 text-2xl">
            <?php bloginfo('name'); ?>
          </p>
          <ul class="px-4 font-bold">
            <li class="py-2"><a href="#" class="block hover:text-gray-300">Home</a></li>
            <li class="py-2"><a href="#" class="block hover:text-gray-300">About</a></li>
            <li class="py-2"><a href="#" class="block hover:text-gray-300">Services</a></li>
            <li class="py-2"><a href="#" class="block hover:text-gray-300">Contact</a></li>
          </ul>
        </div>
    </nav>
  </header>
  <div id="page" class="site">

    <div id="content" class="site-content  sticky top-0">