<?php 
/**
* Template Name: Home Page
*/
?>
<?php get_header();?>
    <!-- Banner Section Start -->
    <section class="banner" style=" background-image:url(<?php echo get_template_directory_uri(); ?>/images/home/banner.webp)">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="banner_text">
                    <h1><?php echo get_option('website_slogan'); ?><br>
                        <span><?php echo get_option('website_title'); ?></span>
                    </h1>
                    <button>Buy Now</button>
                    <a href="<?php the_permalink(); ?>"> <button>More Info</button> </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->
    <!-- Flight Section Start -->
    <section class="flight">
        <div class="container-fluid">
            <div class="row">
                <div class="flight_Search">
                    <h2>Flight</h2>
                    <div class="flight_buttons">
                        <button class="one">One Way</button>
                        <button>Round Trip</button>
                        <button>Multi City</button>
                    </div>
                    <div class="search_options">
                        <div class="same_options">
                            <h4>From</h4>
                            <input type="text" placeholder="Enter Your Locaton"><br>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> Direct Flight Only</label>
                        </div>
                        <div class="same_options">
                            <h4>To</h4>
                            <input type="text" placeholder="Enter Your Locaton">
                        </div>
                        <div class="same_options">
                            <h4>Check In</h4>
                            <input type="text" placeholder="Select Your Date">
                        </div>
                        <div class="same_options">
                            <h4>Guest</h4>
                            <input type="text" placeholder="Select Your Date">
                        </div>
                        <div class="same_options">
                            <h4>Cabin Type</h4>
                            <input type="text" placeholder="Select Your Date">
                        </div>

                    </div>
                    <div class="flight_btn">
                        <button>Search</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FLight Section End -->

    <!-- tickets Section Start -->
    <section class="tickets">
        <div class="col-lg-10 col-md-11 col-11 m-auto">
            <div class="tickets_text">
                <h2>Recommend Flights</h2>
            </div>
            <div class="slider_Section">
                <div class="owl-carousel">
                      <?php 
                            $args = array(  
                    'post_type' => 'flight',
                    'post_status' => 'publish',
                    'posts_per_page' => 8, 
                    'orderby' => 'title', 
                    'order' => 'ASC', 
                );

                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
                     ?>
                    <div class="items">
                        <div class="items_img">
                          <?php the_post_thumbnail( 'full' ,array('class' => 'img-fluid')); ?> 
                        </div>
                        <div class="items_text">
                            <div class="text1 d-flex justify-content-between">
                                <h3> <a href="<?php the_permalink(); ?>"> <?php print the_title(); ?></a></h3>
                                <p>DIRECT FLIGHT</p>
                            </div>
                            <div class="text2">
                                <h4><?php the_content(); ?></h4>
                                <p>25 Dec (30 min)</p>
                            </div>
                            <div class="items_btn">
                                <a href="<?php the_permalink(); ?>"> <button>More Info</button> </a>
                            </div>
                        </div>
                    </div>
                     <?php 
                endwhile;
                wp_reset_postdata(); 
                    ?>
                </div>
            </div>
        </div>

    </section>
    <!-- ticket section end -->

    <!-- Destination Section Start -->
    <section class="destination">
        <div class="col-lg-10 col-m-11 m-auto">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 m-auto">
                    <div class="dest_text">
                        <h4><?php echo get_option('destination'); ?></h4>
                        <p><?php echo get_option('destination_description'); ?></p>
                    </div>
                    <div class="row">
                    <?php 
                            $args = array(  
                    'post_type' => 'destinations',
                    'post_status' => 'publish',
                    'posts_per_page' => 8, 
                    'orderby' => 'title', 
                    'order' => 'ASC', 
                );

                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
                     ?>

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                               
                                <img class="card-img-top">
                                    <?php the_post_thumbnail( 'thumbnail',array('class' => 'card-img-top')); ?>
                                <div class="card-body">
                                    <h4><?php print the_title(); ?></h4>
                                    <p><?php the_content()?></p>
                                    <a href="<?php the_permalink();?>">See Profile</a>
                                </div>
                            </div>
                        </div>
               <?php 
                endwhile;
                wp_reset_postdata(); 
                    ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="dest_right_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/pngegg (2).webp" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- Destination Section End -->

    <!-- Hotel Section Start -->

    <section class="tickets">
        <div class="col-lg-10 col-md-11 col-11 m-auto">
            <div class="tickets_text">
                <h2>Recommend Hotel</h2>
            </div>
            <div class="slider_Section">
                <div class="owl-carousel">
                    <?php 
                            $args = array(  
                    'post_type' => 'hotel',
                    'post_status' => 'publish',
                    'posts_per_page' => 8, 
                    'orderby' => 'title', 
                    'order' => 'ASC', 
                );
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    ?>
                    <div class="items">
                        <div class="items_img">
                             <?php the_post_thumbnail( 'full' ,array('class' => 'img-fluid')); ?> 
                          <!--   <img src="" alt="img" class="img-fluid"> -->
                        </div>
                        <div class="items_text">
                            <div class="text1 d-flex justify-content-between">
                                <h3><?php the_title();?></h3>
                            </div>
                            <div class="text2">
                                <h4>SHYLET(SYT)-Dakha(DAC)</h4>
                                <p>25 Dec (30 min)</p>
                            </div>
                            <div class="items_btn">
                                <a href="<?php the_permalink()?>">
                                <button>Book Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php 
                endwhile;
                wp_reset_postdata(); 
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotel Section End -->
    <!-- choose us section start -->
    <section class="choose_us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-11 m-auto">
                    <div class="card">
                        <div class="card_img">
                            <img class="card-img-top img-fluid"
                                src="<?php echo get_template_directory_uri(); ?>/images/home/ezgif.com-gif-maker.webp" alt="Card image">
                        </div>
                        <div class="card-body">
                            <h4>Best Price Gurrente</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor
                                invidunt ut labore et dut labore et do diam nonumy eirmod tempor
                                invidunt ut labore et do</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-11 m-auto">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="<?php echo get_template_directory_uri(); ?>/images/home/young-laughing-traveler-tourist-woman-with-paper-map-sitting-with-crossed-legs-showing-thumbs-up-waiting-lobby-hall-airport.webp" alt="Card image">
                        <div class="card-body">
                            <h4>Travel Insurance</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor
                                invidunt ut labore et dut labore et do diam nonumy eirmod tempor
                                invidunt ut labore et do</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-11 m-auto">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="<?php echo get_template_directory_uri(); ?>/images/home/choosing-right-strategy.webp" alt="Card image"
                            style="width:100%">
                        <div class="card-body">
                            <h4>Why Choose Us</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor
                                invidunt ut labore et dut labore et do diam nonumy eirmod tempor
                                invidunt ut labore et do</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-11 m-auto">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="<?php echo get_template_directory_uri(); ?>/images/home/ezgif.com-gif-maker (2).webp" alt="Card image">
                        <div class="card-body">
                            <h4>Help</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor
                                invidunt ut labore et dut labore et do diam nonumy eirmod tempor
                                invidunt ut labore et do</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Choose us setion end -->

    <!-- You know section Start -->
    <section class="you_know">
        <div class="container">
            <div class="know_text">
                <h4>Did You Know</h4>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                    dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
    </section>

    <!-- You know section End -->
 <?php get_footer();?>