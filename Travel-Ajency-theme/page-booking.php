<?php get_header();?>
 <!-- banner -->
   <?php  $image = get_post_meta($post->ID, 'aw_custom_image', true); ?>
   <section class="about" style="background-image: url(<?php echo $image ; ?>)">
        <div class="about_text">
            <h2><?php wp_title(); ?></h2>
            <p>Lorem ipsum dolorabore et dolor rebum. Stet clita kasd guber</p>
        </div>
    </section>
    <!-- Form -->

    <section class="contact">
        <div class="top_text">
            <h5>Booking</h5>
        </div>
        <div class="parent_booking">
            <div class="left_side">
            <div class="contact_form">
                <form id="form" action="" method="post">
                    <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="email" id="email" value=""name="email" placeholder="Email">
                                    <h6 class="email-error text-danger"></h6>
                                </div>
                                <div class="col-lg-6 col-md-6  col-sm-12">
                                    <input type="text" id="fName" value="" name="fName" placeholder="First Name">
                                    <h6 class="fName-error text-danger"></h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" id="lName" value="" name="lName" placeholder="Last Name">
                                    <h6 class="lName-error text-danger"> </h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="date" value="" id="Arrivaldate" name="Arrivaldate" placeholder="ArrivalDate">
                                    <h6 class="Arrivaldate-error text-danger"></h6>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <!-- <input type="text"  id="countory" name="Country"> -->
                                    <select name="" value="" id="">
                                        <option>Please Select </option>
                                        <option value="">Pakistan</option>
                                        <option value="">Maldeves</option>
                                        <option value="">England</option>
                                        <option value="">UAE</option>
                                        <option value="">NorWay</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">

                                    <input type="number" id="phoneNumb" value=""
                                        name="phoneNumb" placeholder="Phone Number">
                                    <h6 class="phoneNumb-error text-danger"></h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
    
                                    <input type="text" id="adult" value=""
                                        name="adult" placeholder="Adults">
                                    <h6 class="adult-error text-danger"></h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="number" id="childern" value=""
                                        name="childern" placeholder="childern">
                                </div>
                            </div>
                            <div class="contact_button">
                                <div class="form-btn">
                                    <input class="form_submit"id="button" name="submit" type="submit"  value="Submit Form" />
                                    <input class="form_submit"id="button" name="submit" type="reset" value="Reset" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right_side">
                    <div class="booking_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Group2.png" alt="">
                    </div>
                </div>
             </div>
    </section>
<?php get_footer();?>