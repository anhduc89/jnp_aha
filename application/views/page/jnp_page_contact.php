<?php
    $lang =  $this->session->userdata('lang');
?>

<div class="contact-page common-banner">
    <!-- Hero Start -->
    <div class="container-fluid bg-secondary py-5 bg-hero">
        <div class="bg-image">
            <img src="<?php echo base_url();?>public/jnp_assets/imgs/header.jpg" alt="">
        </div>
        <div class="bg-container container py-5">
            <div class="justify-content-start">
                <div class="text-center text-lg-left">
                    <h1 class="display-1 text-dark text-light-present"><?php echo $this->lang->line('contact_heading');?></h1>
                    <div class="pt-2">
                        <a href="<?php echo base_url().$lang;?>" class="btn btn-primary rounded-pill py-2 px-4 mx-2 btn-rounded-pill"><?php echo $this->lang->line('contact_btn_home');?></a>
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4 mx-2 btn-rounded-pill"><?php echo $this->lang->line('contact_btn_page');?></a>
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
                        <h4 class="mt-5"><?php echo $page_contact['contact_email'];?></h4>
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
               <div class="col-md-6 padding_right0">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone" type="type" name="Phone">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="btn btn-sendmail btn-outline-primary rounded-pill py-2 px-4 mx-2"><?php echo $this->lang->line('contact_btn_sendmail');?></button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6 padding_left0">
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


    <!-- Page Footer -->
    <footer class="mt-5 py-4 border-top border-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, phòng Sản phẩm - TT Kinh doanh Công nghệ số - <a href="http://mobifonekv4.vn" target="_blank"> Công ty Dịch vụ MobiFone KV4 </a> </p> 
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="mb-0 small contact-mobifone">Liên hệ : 093 445 3888</p>
                </div>
            </div>
        </div>
        
    </footer>
    <!-- End of Page Footer -->
</div>