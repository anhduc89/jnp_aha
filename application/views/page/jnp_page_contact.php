<?php
    $lang =  $this->session->userdata('lang');
?>

<div class="contact-page common-banner header">
   <!-- Hero Start -->
   <div class="container-fluid bg-secondary py-5 bg-hero">
        <div class="bg-image">
            <img src="<?php echo base_url().'public/uploads/'.$home_about['home_about_photo'];?>" alt="">
        </div>
        <div class="overlay">
            <div class="bg-container container py-5 ">
                <div class="justify-content-start ">
                    <div class="text-center text-lg-left">
                        <h1 class="display-1 text-dark text-light-present"><?php echo $this->lang->line('about');?></h1>
                        <div class="pt-2">
                            <a href="<?php echo base_url().$lang;?>" class="btn btn-primary rounded-pill py-2 px-4 mx-2 btn-rounded-pill"><?php echo $this->lang->line('about_btn_home');?></a>
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 mx-2 btn-rounded-pill"><?php echo $this->lang->line('about_btn_page');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Hero End -->

    <!-- Contact Info Start-->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5">
                <h1 class="display-5"><?php echo $this->lang->line('contact_heading_line');?></h1>
                <hr class="w-25 mx-auto text-primary">
            </div>
            <div class="row g-3 mb-3 pt-2">
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="contact-item d-flex flex-column align-items-center justify-content-start text-center pb-5">
                        <div class="contact-icon p-3">
                            <div><span class="ti-location-pin icon"></span></div>
                        </div>
                        <h4 class="mt-5"><?php echo $page_contact['contact_address'];?></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="contact-item d-flex flex-column align-items-center justify-content-start text-center pb-5">
                        <div class="contact-icon p-3">
                            <div><span class="ti-mobile icon"></span></div>
                        </div>
                        <h4 class="mt-5"><?php echo $page_contact['contact_phone'];?></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="contact-item d-flex flex-column align-items-center justify-content-start text-center pb-5">
                        <div class="contact-icon p-3">
                            <div><span class="ti-email icon"></span></div>
                        </div>
                        <h4 class="mt-5">
                            <a href="mailto:gairun79@naver.com?subject=Email%20from%20website%20J&PVina"><?php echo $page_contact['contact_email'];?></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->

    <!--  contact -->
    <div class="contact-form">
        <div class="container">
            <div class="row">
               <!-- <div class="col-md-6 padding_right0">
                    <?php echo form_open_multipart(base_url().$lang.'/JnpHome/send_message',array('class' => 'form-horizontal main_form')) ; ?> id="request" class="main_form"
                     <div class="row">
                     
                        <div class="col-md-12 ">
                           <input class="contactus form-control text-white rounded-0 bg-transparent" placeholder="Name" type="type" name="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus form-control text-white rounded-0 bg-transparent" placeholder="Email" type="type" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus form-control text-white rounded-0 bg-transparent" placeholder="Subject" type="type" name="subject">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea form-control text-white rounded-0 bg-transparent" name="message">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="btn btn-sendmail btn-outline-primary rounded-pill py-2 px-4 mx-2" name="btn_sendmail"><?php echo $this->lang->line('contact_btn_sendmail');?></button>
                        </div>
                        <div class="callout callout-success col-12">
                                <p><?php echo $this->session->flashdata('success'); ?></p>
                            </div>       
                     </div>
                     <?php echo form_close(); ?>
               </div> -->

               <div class="col-md-12">
                  <div class="map_main">
                     <div class="map-responsive">
                        <?php echo $page_contact['contact_map'];?>
                        <!-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="463" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe> -->
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
    <!-- end contact -->


    