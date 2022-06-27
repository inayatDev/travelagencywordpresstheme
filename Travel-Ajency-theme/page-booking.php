<?php get_header();?>
 <!-- banner -->
    <?php echo do_shortcode('[view_section]'); ?>
    <!-- Form -->
    <section class="contact">
        <div class="container-fluid">
            <div class="contact_form">
                <form action="action_page.php">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12 ">
                            <p>Email</p>
                            <input type="text" class="name" id="name" name="name">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>First Name</p>
                            <input type="email" id="email" class="email" name="email">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>Last Name</p>
                            <input type="tel" id="Phonenumber" class="phonenumber" name="Phone number">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>Arrival Date</p>
                            <input type="tel" id="Phonenumber" class="phonenumber" name="Phone number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-12 ">
                            <p>Country</p>
                            <input type="text" class="name" id="name" name="name">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>Phone Number</p>
                            <input type="email" id="email" class="email" name="email">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>Adults</p>
                            <input type="tel" id="Phonenumber" class="phonenumber" name="Phone number">
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <p>Children </p>
                            <input type="tel" id="Phonenumber" class="phonenumber" name="Phone number">
                        </div>
                    </div>
                    <div class="extra">
                        <p>Extra Message</p>
                        <textarea id="subject" name="subject"></textarea>
                    </div>
                    <div class="contact_button">
                        <button>Book Now</button>
                        <button>Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php get_footer();?>