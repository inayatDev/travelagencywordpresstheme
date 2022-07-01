<?php get_header();?>
<!-- Banner section strt -->
<section
  class="adventure1"
  style="
    background-image: url(<?php echo get_template_directory_uri(); ?>/images/blog/frank-mckenna-OD9EOzfSOh0-unsplash.png);
  "
>
  <div class="adven-text">
    <h3>Plan Adventure</h3>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</p>
  </div>
  <div class="col-lg-11 col-md-12 m-auto">
  <form method = "post" action = "">
    <div class="main_bg d-flex">
      <div class="one f_input">
        <input type="text" name="destination" id="destination" placeholder="Enter your Destination" value = ""/>
      </div>
      <div class="one s_dateFrom">
        <input
          type="date"
          id="start"
          name="tripin"
          value="Date From"
          placeholder="ffff"
        />
      </div>
      <div class="one t_dateTo">
        <input
          type="date"
          id="start"
          name="tripout"
          value="2021-07-22"
          max="2022-12-31"
        />
      </div>
      <div class="one tripType">
        <select name ="triptype">
          <option value="0">Trip Type</option>
          <option value="1">Murre</option>
          <option value="2">Swat</option>
          <option value="3">Islamabad</option>
        </select>
      </div>
      <div class="one search_btn">
        <button type = "submit" name = "submit">Book Now</button>
      </div>
    </div>
  </form>
  </div>
</section>

<!-- Banner Section End -->

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
                                <h3 id = "hotel_title"><?php the_title();?></h3>
                            </div>
                            <div class="text2">
                                <h4>SHYLET(SYT)-Dakha(DAC)</h4>
                                <p>25 Dec (30 min)</p>
                            </div>
                            <div class="items_btn">
                              <a href ="#">
                              <button onclick="myFunction()">Book Now </button>
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
<!-- Hotel section end -->

<!-- Destination Section Start -->
<section
  class="destination1"
  style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/hotel/MaskGroup1.png)"
>
  <div class="dest_text2">
    <h3>
      Tell us where you would like to go.<br />
      12,000+ Hotel and Resorts Available!
    </h3>
  </div>
  <div class="feilds">
    <input type="text" placeholder="Enter YOur Destination or hotel name" />
    <button>Search Now</button>
  </div>
</section>

<!-- Destination section end -->
<?php get_footer();?>