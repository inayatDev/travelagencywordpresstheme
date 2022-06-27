<?php get_header(); ?>

 <!-- Banner section strt -->
    <section class="adventure">
        <div class="adven-text">
            <h3>Plan Your Perfect Adventure</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</p>
        </div>
        <div class="col-lg-11 col-md-12 m-auto ">
            <div class="main_bg d-flex">
                <div class="one f_input">
                    <input type="text" name="" id="" placeholder="Enter your Destination">
                </div>
                <div class=" one s_dateFrom">
                    <input type="date" id="start" name="trip-start" value="Date From" placeholder="ffff">
                </div>
                <div class="one t_dateTo">
                    <input type="date" id="start" name="trip-start" value="2018-07-22" max="2018-12-31">
                </div>
                <div class="one tripType">
                    <select>
                        <option value="0">Trip Type</option>
                        <option value="1">Murre</option>
                        <option value="2">Swat</option>
                        <option value="3">Islamabad</option>

                    </select>
                </div>
                <div class="one search_btn">
                    <button>Search Now</button>
                </div>
            </div>


        </div>
    </section>
    <!-- Banner Section End -->
    <!-- Hotel Section Start -->
    <section class="tickets">
        <div class="col-lg-11 col-md-11 col-12 m-auto">
            <div class="tickets_text">
                <h2>Popular Trip Packages</h2>
            </div>
            <div class="slider_Section">
                <div class="owl-carousel">
                	    <?php 
                            $args = array(  
                    'post_type' => 'trippackage',
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
                            <?php the_post_thumbnail('thumbnail' ,array('class' => 'img-fluid')); ?>
                        </div>
                        <div class="tour_text">
                            <div class="text1 ">
                                <h3><?php the_title();?></h3>
                            </div>
                            <div class="text2">
                                <p><?php the_content();?></p>
                            </div>
                            <div class="items_btn">
                             <a href="<?php the_permalink(); ?>"> <button>See All</button> </a>
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
    <!-- Hotel section end -->


    <!-- Destination Section Start -->
    <section class="destination">

        <div class="col-lg-11 m-auto">
            <h2 class="travel_heading">Travel Guide And Trips</h2>
            <div class="row">
                <div class="col-lg-4  col-md-4 col-12 mg">
                    <div class="dest_img ">
                        <img src="./images/tour/andrea-davis--Q_BTq5J93w-unsplash.webp" alt="">
                    </div>
                    <div class="text_dest">
                        <h2>Baggage Info</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            At vero eos et accusam et justo duo dolores et ea rebum.
                            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mg">
                    <div class="dest_img ">
                        <img src="./images/tour/chuttersnap-qhNutmNU1pE-unsplash.webp" alt="">
                    </div>
                    <div class="text_dest">
                        <h2>Baggage Info</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            At vero eos et accusam et justo duo dolores et ea rebum.
                            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4  col-12 mg">
                    <div class="dest_img ">
                        <img src="./images/tour/mark-stosberg-3eOIKv495OU-unsplash.webp" alt="">
                    </div>
                    <div class="text_dest">
                        <h2>Baggage Info</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            At vero eos et accusam et justo duo dolores et ea rebum.
                            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destination section end -->


<?php get_footer(); ?>