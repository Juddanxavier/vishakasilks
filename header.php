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
  <div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
      <!-- 
      <nav class="flex items-center justify-between flex-wrap bg-transparent p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          <p class="text-green-700">Vishaka silks</p>
        </div>
        <div class="block lg:hidden">
          <button
            class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto"> -->
      <!-- <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
      </a>
      
    </div> -->
      <!-- <div>
            <?php wp_nav_menu(
              array(
                'menu_class' => 'menu-header',
                'theme_location' => 'header'

              )
            ); ?>

          </div>
        </div>
      </nav> -->
      <nav class="">
        <div class="max-w-6xl mx-auto p-4">
          <div class="flex justify-between">
            <!-- <div class="flex w-screen space-x-7"> -->
            <div>
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
            <div class="hidden md:flex items-center ">
              <?php wp_nav_menu(
                array(
                  'menu_class' => 'menu-header flex gap-6 text-[#1b4130]',
                  'theme_location' => 'header'

                )
              ); ?>

            </div>
            <!-- </div> -->
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
              <button class="outline-none mobile-menu-button">
                <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                  stroke="currentColor">
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
                'menu_class' => 'menu-header text-[#1b4130]',
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
    </header>
    <div id="content" class="site-content">