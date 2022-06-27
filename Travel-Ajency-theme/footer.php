

    <!-- Footer Section Start -->
    <footer>
        <div class=" footer_container d-flex justify-content-between">
            <div class="navbar_image">
                <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home/Untitled-1.webp" alt=""></a>
            </div>
           <!--  <div class="right_sec">
                <ul class=" d-flex"> -->

                     <?php  
                wp_nav_menu(array(
                  'theme_location' =>  'footer-menu',
                  'menu_class' => ' d-flex', 
                  'add_li_class' => 'right_sec',
                  "container_class" => 'd-flex', 
                  "link_class" => "nav-item",
                ));
            ?>
            </div>
        </div>
    </footer>

    <!-- Footer Section end -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            nav: true,
            dots: false,
            dotsEach: true,
            loop: true,
            autoplay: false,
            margin: 10,
            navText: [
                "<i class='fas fa-angle-left'></i>",
                "<i class='fas fa-angle-right'></i>",
            ],

            responsive: {
                0: {
                    items: 1,
                    margin: 15,

                },
                361: {
                    items: 1,
                    margin: 15,

                },
                600: {
                    items: 2,
                    margin: 15,
                },
                700: {
                    items: 2,
                    margin: 40,
                },
                1000: {
                    items: 2,
                    margin: 40,
                },
                1200: {
                    items: 3,
                    margin: 30,
                },
                1400: {
                    items: 3,
                    margin: 30,
                },
            },
        });




        
    </script>

</body>

</html>
<?php wp_footer();?>