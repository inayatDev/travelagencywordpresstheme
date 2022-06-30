 <?php get_header()?>
 <?php  $image = get_post_meta($post->ID, 'aw_custom_image', true); ?>
   <section class="about" style="background-image: url(<?php echo $image ; ?>)">
        <div class="about_text">
            <h2><?php wp_title(); ?></h2>
            <p>Lorem ipsum dolorabore et dolor rebum. Stet clita kasd guber</p>
        </div>
    </section>
    <!-- Banner section End -->

    <!-- Story section strt -->

    <section class="story">
        <div class="container">
            <div class="top_text">
                <h3>Our Story</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eosum d</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="story_img">
                        <img src="./images/home/female-tourists-are-happy-refreshed-waterfall.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="story_img">
                        <img src="./images/home/full-shot-happy-kid-having-fun-winter-time.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="story_numb">
                        <h3>480</h3>
                        <p>No of tour arrange</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="story_numb">
                        <h3>30</h3>
                        <p>No of tour arrange</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="story_numb">
                        <h3>2250</h3>
                        <p>No of tour arrange</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- story section end -->

    <!-- Trip section -->

    <section class="trip">
        <div class="container">
            <div class="trip_heading">
                <h3>Recent Trip</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="trip_img">
                        <img src="./images/about/Group 34.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="trip_img">
                        <img src="./images/about/singapore-cityscape-twilight.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="trip_img">
                        <img src="./images/about/blue-villa-beautiful-sea-hotel.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trip section end -->

    <!-- Feature Sectio strat -->
    <section class="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="feature_Sec">
                        <div class="fet_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about/Group 4.png" alt="">
                        </div>
                        <div class="fet_text">
                            <h3>Comfortable JOurney</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="feature_Sec">
                        <div class="fet_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about/noun-hotel-4816542.png" alt="">
                        </div>
                        <div class="fet_text">
                            <h3>Comfortable JOurney</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="feature_Sec">
                        <div class="fet_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about/Group 5.png" alt="">
                        </div>
                        <div class="fet_text">
                            <h3>Travel Tour Guidence</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Sectio end -->


<!-- carsole Section -->
<section class="carosel">
    <div class="hero-slider">
             <?php 
                    $args = array(  
                    'post_type' => 'testimonial',
                    'post_status' => 'publish',
                    'posts_per_page' => 8, 
                    'orderby' => 'title', 
                    'order' => 'ASC', 
                );

                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
                     ?>
        <div class="carosel_img">
            <img src=<?php the_post_thumbnail();?>
            <div class="carosel_text">
                <h4><a href = "<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
                <p><?php the_content();?></p>
            </div>
        </div>
            <?php 
                endwhile;
                wp_reset_postdata(); 
            ?>
</section>
<?php get_footer();?>
<!-- carosel section End -->


     <!-- Footer Section Start -->
     <!-- <footer>
        <div class=" footer_container d-flex justify-content-between">
            <div class="navbar_image">
                <a class="navbar-brand" href="#"><img src="./images/home/Untitled-1.webp" alt=""></a>
            </div>
            <div class="right_sec">
                <ul class=" d-flex">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./blog.html">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer> -->

    <!-- Footer Section end -->
    
    <!-- <script src="js/Jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/main.js"></script> -->
<!-- </body>

</html> -->

