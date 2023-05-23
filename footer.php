<footer>
    <div class="grid grid-row-auto text-white bg-[color:var(--theme-color-footer)] px-12 py-16">
        <div class="grid md:grid-cols-2 mb-14 pb-4 border-b-2 border-gray-400 border-opacity-25">
            <div>Vishaka Silks</div>
            <div class="flex flex-row-reverse">
                <?php wp_nav_menu(
                    array(
                        'menu_class' => 'menu-footer',
                        'theme_location' => 'footer'
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
            <div class="">1</div>
        </div>
        <div class="grid md:grid-cols-2 mt-16">
            <div>
                <p class=”copyright”>Vishaka Silks © <?php echo date("Y"); ?>. All Rights Reserved.</p>
            </div>
            <div class="">1</div>
        </div>
    </div>
</footer>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>