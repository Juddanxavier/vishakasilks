<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body class="bg-skin-fill">
  <nav id="navbar" class=" sticky justify-between px-4 md:px-12 top-0 z-50">
    <div class="max-w-6xl mx-auto p-4">
      <div class="flex justify-between">
        <!-- <div class="flex w-screen space-x-7"> -->

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
        <!-- </div> -->
        <!-- Mobile menu button -->
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
    <!-- mobile menu -->
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
  </nav>
  <div id="page" class="site">

    <div id="content" class="site-content  sticky top-0">