<?php get_header(); ?>
 <section class="blog_detail">
        <div class="container-fluid">
            <div class="col-xl-10 col-lg-11 col-md-11 m-auto">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12   ">
                    <div class="left">
​
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
                <div class="col-lg-8 col-md-10 col-11">
                    <div class="top_text">
                        <h4 class="top" ><?php echo get_the_date(); ?></h4>
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                    <p class="bottom" ><?php echo get_the_author(); ?></p>
                    </div>
                    <div class="blog_mid_img">
                      <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
                    </div>
                    <div class="blog_para_sec">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
​
    <!-- blog Detail Section css end -->
<p>  </p>

<?php get_footer();?>