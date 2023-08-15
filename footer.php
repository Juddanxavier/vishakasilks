<footer>
    <div class="grid grid-row-auto text-white bg-[color:var(--theme-color-footer)] px-12 py-16">
        <div class="grid md:grid-cols-2 mb-14 pb-4 border-b-2 border-gray-400 border-opacity-25">
            <div class="flex">Vishaka Silks</div>
            <div class="flex flex-row-reverse">
                <?php wp_nav_menu(
                    array(
                        'menu_class' => 'menu-header flex gap-6 text-[#ffffff]',
                        'theme_location' => 'header'

                    )
                ); ?>
            </div>
        </div>
        <div class="grid md:grid-cols-3">
            <div>
                <p>India - </br>No 5, Palaniandavar koil street</br> Arni, Tamil Nadu</p>
            </div>
            <div>
                <p>+91 9629855913</p>
                <p>Vishakasilks@gmail.com</p>
            </div>
            <div class="">
                <?php dynamic_sidebar('footer_area_one'); ?>
            </div>
        </div>
        <div class="grid md:grid-cols-2 mt-16">
            <div>
                <p class=”copyright”>Vishaka Silks © <?php echo date("Y"); ?>. All Rights Reserved.</p>
            </div>
            <div class="flex flex justify-self-end justify-center items-center gap-4">
                <div><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>"
                        title="Follow on Facebook"><img class="h-8 w-full"
                            src="<?php echo get_template_directory_uri(); ?>/assets/src/img/footerfb.svg"
                            alt="facebook"></a></div>
                <div><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>"
                        title="Follow on Instagram"><img class="h-8 w-full"
                            src="<?php echo get_template_directory_uri(); ?>/assets/src/img/footerinsta.svg"
                            alt="facebook"></a></div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

<script>
    // Logo change on scroll
    window.addEventListener('scroll', function () {
        var logo = document.getElementById('logo');
        var menuToggle = document.getElementById('menu-toggle');
        var navgreen = document.getElementById('nav')
        var logotext = document.getElementById('logotext')
        if (window.scrollY > 0) {
            logo.classList.add('hidden')
            navgreen.classList.add('bg-green-700')
            logotext.classList.remove('hidden')
        } else {
            logo.classList.remove('hidden')
            navgreen.classList.remove('bg-green-700')
            logotext.classList.add('hidden')
        }
    });
    document.addEventListener("DOMContentLoaded", function () {
        var navgreen = document.getElementById("nav");
        navgreen.classList.remove("bg-green-700");
    });
    //      Responsive menu toggle
    // var menuToggle = document.getElementById('menu-toggle');
    // var menu = document.getElementById('menu');

    // menuToggle.addEventListener('click', function () {
    //     menu.classList.toggle('hidden');
    // });
    document.addEventListener("DOMContentLoaded", function () {
        const mobileNavbar = document.getElementById("mobile-menu-button");
        const mobileMenuButton = document.getElementById("nav");

        mobileMenuButton.addEventListener("click", function () {
            mobileNavbar.classList.toggle('hidden');
        });
    });
</script>
<?php wp_footer(); ?>
</body>

</html>