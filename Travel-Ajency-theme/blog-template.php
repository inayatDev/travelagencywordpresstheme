<?php 
/*
* Template Name: Blog Post
*/
 get_header(); ?>
 <?php  $image = get_post_meta($post->ID, 'aw_custom_image', true); ?>
   <section class="blog_banner" style="background-image: url(<?php echo $image; ?>)">
        <h2><?php wp_title(); ?></h2>
        
    </section>
     <section class="bottom_all">
        <div class="col-lg-11 m-auto">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 m-auto  ">
                    <div class="left">
                        <div class="b_search">
                            <!-- <input type="text" placeholder="Search">
                            <button>Search</button> -->
                            <?php echo do_shortcode('[search_form_posts]')?>
                        </div>

                        <div class="b_recent">
                            <div class="rexent_head">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="para">
                                <p>Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore
                                    magna aliquyam erat, sed diam voluptua.
                                    At vero eos et accusam et justo duo
                                    dolores et ea rebum. Stet clita kasd
                                    gubergren, no sea takimata sanctus est
                                    Lorem ipsum dolor sit amet. Lorem ipsum
                                    dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor i</p>
                            </div>
                        </div>
                        <div class="b_recent">
                            <div class="rexent_head">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="para">
                                <p>Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod
                                    tempor in</p>
                            </div>
                        </div>
                        <div class="b_recent">
                            <div class="rexent_head">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="para">
                                <p>Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod
                                    tempor in</p>
                            </div>
                        </div>
                        <div class="b_recent">
                            <div class="rexent_head">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="para">
                                <p>Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod
                                    tempor in</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <div class="row">
                      
                        <?php 
                        $args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) : ?>
<?php while ( $result->have_posts() ) : $result->the_post(); ?> 
                        <div class="col-lg-6 col-md-6 col-6 ">
                            <div class="mid">
                                <div class="b_recent">
                                    <div class="rexent_head">
                                       
        <?php 	
the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']);
 ?>
                                    </div>
                                    <div class="para">
                                        <h4><a href ="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                        <p><?php the_content();?></p>
                                    </div>
                                </div>
                            </div>
                         
                        
                        </div>
                        <?php endwhile; endif; ?>
                        <!-- <div class="col-lg-6 col-md-6 col-6">
                            <div class="mid">
                                <div class="b_recent">
                                    <div class="rexent_head">
                                        <img src="<?php// echo get_template_directory_uri(); ?>/images/blog/marina-t-pQg4GTuzwXw-unsplash.png" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="para">
                                        <h4>Toursim In Thialand</h4>
                                        <p>Lorem ipsum dolor sit amet, consetetur
                                            sadipscing elitr, sed diam nonumy eirmod
                                            tempor in</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
<?php get_footer();