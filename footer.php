<?php
/**
 * Footer Template
 */
?>

<?php /* SOCIAL MEDIA ICONS */ ?>
<footer>

    <div id="adbyrd-footer-grid" class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="grid py-8 md:grid-flow-col">
                <div id="adbyrd-cell-01">
                    <img class="h-16 w-auto m-auto mb-4" src="<?php echo get_template_directory_uri() . '/assets/images/adbyrd-brand.svg' ?>" alt="Your Company">
                </div>
                <div id="adbyrd-cell-02">
                    <h3 class="text-2xl text-center md:text-left">Adbryrd, LLC</h3>
                    <p class="text-center text-sm md:text-left">
                        2601 Jackson Ave #1141<br>
                        Ann Arbor, MI 48103<br>
                    </p>

                    <p class="text-3xl font-semibold my-2 text-center md:text-left">+1 (888) 712-1694</p>

                    <?php /* SOCIAL MEDIA ICONS */ ?>
                    <div id="adbyrd-social-media-icons" class="py-3 text-center md:text-left">
                        <a class="px-2 md:pr-4" href="https://www.facebook.com/profile.php?id=100088307161043" target="_blank">
                            <i class="fa-brands fa-facebook text-lg"></i>
                        </a>
                        <a class="px-2 md:pr-4" href="https://www.instagram.com/adbyrdmarketing" target="_blank">
                            <i class="fa-brands fa-instagram text-lg"></i>
                        </a>
                        <a class="px-2 md:pr-4" href="https://www.tiktok.com/@adbyrdmarketing" target="_blank">
                            <i class="fa-brands fa-tiktok text-lg"></i>
                        </a>
                        <a class="px-2 md:pr-4" href="https://www.youtube.com/channel/UCcU11zlfCubEHutQRN9h6yw" target="_blank">
                            <i class="fa-brands fa-youtube text-lg"></i>
                        </a>
                    </div>

                </div>
                <div id="adbyrd-cell-03">
                    <h3 class="text-2xl text-center md:text-left">Company</h3>
                    <ul class="list-none text-center md:text-left">
                        <li>
                            <a href="#" class="text-sm">Home</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm">Services</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm">Case Studies</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm">About</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm">Contact</a>
                        </li>
                    </ul>
                </div>
                <div id="adbyrd-cell-04">
                    <h3 class="text-2xl text-center md:text-left">Other</h3>
                </div>
            </div>
        </div>
    </div>

    <div id="adbyrd-footer-copyrights" class="bg-gray-400 py-4">
        <p class="text-xs text-center text-[#FFFFFF]">Copyright © 2023 Adbyrd, LLC. All Rights Reserved. <a href="#">Privacy Policy</a></p>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>