<section id="home" class="video-hero" style=" background-image: url(<?php echo base_url("assets/frontend") ?>/images/cover_img_2.jpg);  background-size:cover; background-repeat: no-repeat; background-position: center;background-attachment:fixed;" data-section="home">
<!-- <div class="overlay"></div>
    <div class="display-t text-center">
        <div class="display-tc">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="animate-box">
                        <h2>Contact Us</h2>
                        <p class="breadcrumbs"><span><a href="<?php echo base_url() ?>">Home</a></span> <span>Contact</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-8 animate-box">
                <h2><font color="#FFFFFF">Contact Information</h2>
                <div class="row form-group-lg">
                    <div class="col-md-12">
                        <div class="contact-info-wrap-flex">
                            <div class="con-info">
                                <p><span><i class="icon-location-2"></i></span> <?php echo $this->company->address; ?></p>
                                <p>
                                    &nbsp
                                </p>
                                <!-- </div>
                            <div class="con-info"> --> 
                                <p><span><i class="icon-phone3"></i></span> <a href="tel://<?php echo $this->company->phone; ?>"><?php echo $this->company->phone; ?></a></p>
                                <p>
                                    &nbsp
                                </p>
                                <!-- </div>
                            <div class="con-info"> -->
                                <p><span><i class="icon-paperplane"></i></span> <a href="mailto:<?php echo $this->company->email; ?>"><?php echo $this->company->email; ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-pull-4 animate-box">
                <h2><font color="#FFFFFF">Get In Touch</h2>
                <form action="<?php echo base_url("contact/submitMessage") ?>" method="post">
                    <div class="row form-group-lg">
                        <div class="col-md-12">
                            <p>
                            <input type="text" name="name" class="form-control" placeholder="Your name" required>
                            </p>
                        </div>
                    </div>

                    <div class="row form-group-lg">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <p>
                            <input type="email" name="email"  class="form-control" placeholder="Your email address" required>
                            </p>
                        </div>
                    </div>

                    <div class="row form-group-lg">
                        <div class="col-md-12">
                            <!-- <label for="subject">Subject</label> -->
                            <p>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message" required>
                            </p>
                        </div>
                    </div>

                    <div class="row form-group-lg">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <p>
                            <textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
                            </p>
                        </div>
                    </div>
                    <div class="form-group-lg">
                        <?php
                        
                        if($this->session->flashdata('submit_success')==true){
                        ?>
                        <div class="alert alert-success">
                            Thank you, Your message has been sent.
                        </div>
                        <?php 
                        }
                        ?>

                        <?php
                        
                        if($this->session->flashdata('validation_message')!=""){
                            echo '
                            <div class="alert alert-warning">
                                '.$this->session->flashdata('validation_message').'
                            </div>
                            ';
                        }
                        ?>

                        
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                </form>		
            </div>
        </div>
    </div>
</div>
</section>