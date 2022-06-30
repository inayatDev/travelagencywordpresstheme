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
        <div class="container-fluid">
            <div class="contact_form">
                <form action="" method = "post">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12 ">
                            <p>Email</p>
                            <input type="text" class="name" id="email" name="email">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>First Name</p>
                            <input type="text" id="fname" class="fname" name="fname">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>Last Name</p>
                            <input type="text" id="lname" class="phonenumber" name="lname">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>Arrival Date</p>
                            <input type="text" id="arrivaldate" class="phonenumber" name="arrivaldate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-12 ">
                            <p>Country</p>
                            <input type="text" class="name" id="country" name="country">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>Phone Number</p>
                            <input type="number" id="phonenumber" class="email" name="phonenumber">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>Adults</p>
                            <input type="text" id="adults" class="phonenumber" name="adults">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>Children </p>
                            <input type="text" id="children" class="phonenumber" name="children">
                        </div>
                    </div>
                    <div class="extra">
                        <p>Extra Message</p>
                        <textarea id="subject" name="subject"></textarea>
                    </div>
                    <div class="contact_button">
                        <button type = "submit" name = "submit"> Book Now </button>
                        <!-- <button>Book Now</button> -->
                        <button>Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php get_footer();?>