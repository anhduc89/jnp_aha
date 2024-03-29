<?php
    // $lang =  $this->session->userdata('lang');

    $this->session->set_userdata("lang", $this->uri->segment(1));
    $lang =  $this->session->userdata('lang');
    if($lang == '') 
    {
        $lang = 'vn';
        $this->session->set_userdata("lang", $lang);
        $this->lang->load('home', $lang);
    }
    else 
    {
        // echo $lang;
        $this->lang->load('home', $lang);
    }
?>
<!-- Page Header -->
<header class="header">
    <div class="overlay"> 
        <!-- <h1 class="subtitle"><?php echo $this->lang->line('slide_welcome');?></h1> -->
        <h1 class="title"><?php echo $home_about['slogan'];?></h1> 
    </div>  
    <div class="shape">
        <img src="<?php echo base_url().'public/uploads/'.$home_about['home_about_photo'];?>" alt="">
    </div>  
    <div class="mouse-icon"><div class="wheel"></div></div>
</header>
<!-- End Of Page Header -->



<!-- About Section -->
<section class="section" id="about">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                <?php echo $this->lang->line('tab_desc_aboutus_content_1');?>
                <img src="<?php echo base_url();?>public/jnp_assets/imgs/about.jpg" alt="" class="w-100 mt-3 shadow-sm">
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="row">
                    <div class="col-6">
                        <img src="<?php echo base_url();?>public/jnp_assets//imgs/about-1.jpg" alt="" class="w-100 shadow-sm">
                    </div>
                    <div class="col-6">
                        <img src="<?php echo base_url();?>public/jnp_assets//imgs/about-2.jpg" alt="" class="w-100 shadow-sm">
                    </div>
                    <div class="col-12 mt-4">
                        <?php echo $this->lang->line('tab_desc_aboutus_content_2');?>
                    </div>
                </div>
            </div>
        </div>              
    </div>
</section>
<!-- End OF About Section -->

<!-- Service Section -->

<section  id="service" class="section pt-0">
    <div class="container"> 
        <h6 class="section-title text-center"><?php echo $this->lang->line('tab_img_company');?></h6>
        <h6 class="section-subtitle text-center mb-5 pb-3"><a href="<?php echo base_url().$lang.'/hinh-anh-cong-ty';?>"><?php echo $this->lang->line('tab_img_company_slogan');?> </a></h6>

        <div class="row">
            <?php
                foreach($photo_activities as $item)
                {
                    echo '<div class="col-md-4">
                            <div class="card border-0 mb-4">
                                <img src="'.base_url().'public/uploads/'.$item['photo_name'].'" alt="" class="card-img-top w-100">
                                
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>
</section>

<!-- End OF Service Section -->


<!-- Portfolio Section -->
<section id="portfolio" class="section portfolio-section">
    <div class="container">
        <h6 class="section-title text-center"><?php echo $this->lang->line('tab_products');?></h6>
        <h6 class="section-subtitle mb-5 text-center"><a href="<?php echo base_url().$lang.'/danh-sach-san-pham';?>"><?php echo $this->lang->line('tab_products_showmore');?></a></h6>
        <div class="filters">
            <a href="#" data-filter=".all" class="active">
                <?php echo $this->lang->line('tab_products_all_product');?>           
            <?php
                foreach($home_categories_portfolio as $item )
                {
                    echo '<a href="#" data-filter=".'.$item['category_id'].'">'. $item['category_name_'.$lang.''].'</a>';
                }
            ?>
        </div>

        <div class="portfolio-container"> 
                  
            <?php
                foreach($home__products_portfolio as $item ) // chỗ này sẽ show ra sản phẩm mới nhất, hoặc sản phẩm bán chạy.
                {
                    echo ' <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="'.base_url().'public/uploads/'.$item['photo'].'" class="img-fluid" alt="">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                                <div class="text-holder">

                                    <h6 class="title"><a href="'.base_url().$lang.'/thong-tin-san-pham'.'/'.$item['id'].'">'. $item['name_'.$lang.''].'</a></h6>
                                    <p class="subtitle"><a href="'.base_url().$lang.'/thong-tin-san-pham'.'/'.$item['id'].'">'. $item['short_content_'.$lang.''].'</a></p>
                                </div>
                            </div>   
                        </div>             
                    </div>';
                }
            ?>

            <?php
                foreach($home__products_portfolio as $item ) // chỗ này sẽ show ra sản phẩm mới nhất, hoặc sản phẩm bán chạy. Lấy ra limit tầm 8 sản phẩm
                {
                    echo ' <div class="col-md-6 col-lg-4 all">
                        <div class="portfolio-item">
                            <img src="'.base_url().'public/uploads/'.$item['photo'].'" class="img-fluid" alt="">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                                <div class="text-holder">

                                    <h6 class="title"><a href="'.base_url().$lang.'/thong-tin-san-pham'.'/'.$item['id'].'">'. $item['name_'.$lang.''].'</a></h6>
                                    <p class="subtitle"><a href="'.base_url().$lang.'/thong-tin-san-pham'.'/'.$item['id'].'">'. $item['short_content_'.$lang.''].'</a></p>
                                </div>
                            </div>     
                        </div>             
                    </div>';
                }
            ?>


            <?php
                foreach($home__products_portfolio as $item ) // chỗ này sẽ show ra sản phẩm mới nhất, hoặc sản phẩm bán chạy.
                {
                    echo ' <div class="col-md-6 col-lg-4 '.$item['category_id'].'">
                        <div class="portfolio-item">
                            <img src="'.base_url().'public/uploads/'.$item['photo'].'" class="img-fluid" alt="">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                                <div class="text-holder">

                                    <h6 class="title"><a href="'.base_url().$lang.'/thong-tin-san-pham'.'/'.$item['id'].'">'. $item['name_'.$lang.''].'</a></h6>
                                    <p class="subtitle"><a href="'.base_url().$lang.'/thong-tin-san-pham'.'/'.$item['id'].'">'. $item['short_content_'.$lang.''].'</a></p>
                                </div>
                            </div>   
                        </div>             
                    </div>';
                }
            ?>
        </div>   
    </div>            
</section>
<!-- End of portfolio section -->

<!-- Blog Section -->
<section class="section blog-section" id="blog">
    <div class="container">
        <h6 class="section-title mb-0 text-center"><?php echo $this->lang->line('tab_customers');?></h6>
        <h6 class="section-subtitle mb-5 text-center"><?php echo $this->lang->line('tab_customers_slogan');?></h6>

        <div class="row owl-carousel customers">
            <?php
                foreach($clients as $item)
                {
                    echo '<div class="customer">
                            <div class="card border-0">
                                <img src="'.base_url().'public/uploads/'.$item['photo'].'" alt="" class="card-img-top w-100">
                                <div class="card-body">
                                    <h6 class="card-title">'.$item['name'].'</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>';
                }
            ?>
        </div>
        <div class="blog-dots owl-dots"></div>
    </div>
</section>
<!-- End of Blog Section -->

<!-- Testmonial Section -->
<section class="section" id="testmonial">
    <div class="container">
        <h6 class="section-title text-center mb-0"><?php echo $this->lang->line('tab_comment');?></h6>
        <h6 class="section-subtitle mb-5 text-center"><?php echo $this->lang->line('tab_comment_slogan');?></h6>
        <div class="row">
            <?php
                foreach($testimonials as $item)
                {
                    echo '<div class="col-md-4 my-3 my-md-0">
                            <div class="card card-comment">
                                <div class="card-body">
                                    <div class="media align-items-center mb-3">
                                        <img class="mr-3" src="'.base_url().'public/uploads/'.$item['photo'].'" alt="">
                                        <div class="media-body">
                                            <h6 class="mt-1 mb-0">'.$item['name'].'</h6> 
                                            <small class="text-muted mb-0">'.$item['designation'].'</small>     
                                        </div>
                                    </div>
                                    <p class="mb-0">'.$item['comment'].'</p>
                                </div>
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>
</section>
<!-- End of Testmonial Section -->

<!-- Contact Section -->
<section id="contact" class="section has-img-bg pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 my-3">
                <h6 class="mb-0"><?php echo $this->lang->line('tab_contact_phone');?></h6>
                <p class="mb-4"><?php echo $page_contact['contact_phone'];?></p>

                <h6 class="mb-0"><?php echo $this->lang->line('tab_contact_address');?></h6>
                <p class="mb-4"><?php echo $page_contact['contact_address'];?></p>

                <h6 class="mb-0"><?php echo $this->lang->line('tab_contact_email');?></h6>
                <p class="mb-0"><?php echo $page_contact['contact_email'];?></p>
                <p></p>
            </div>
            <div class="col-md-7">

                <h4 class="mb-4"><?php echo $this->lang->line('tab_contact');?></h4>
                <form  id="frm-send-message"  method="post" novalidate="novalidate" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="<?php echo $this->lang->line('frm_contact_name');?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="email" class="form-control text-white rounded-0 bg-transparent" name="email" placeholder="<?php echo $this->lang->line('frm_contact_email');?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" placeholder="<?php echo $this->lang->line('frm_contact_subject');?>">
                        </div>
                        <div class="form-group col-12">
                            <textarea  id="" cols="30" rows="6" class="form-control text-white rounded-0 bg-transparent" name="message" placeholder="<?php echo $this->lang->line('frm_contact_message');?>"></textarea>

                        </div>
                        <div class="form-group col-12 mb-0">
                            <button type="submit" class="btn btn-primary rounded w-md mt-3" ><?php echo $this->lang->line('frm_contact_btnsubmit');?></button>
                        </div>  
                                       
                    </div>                          
                </form>
            </div>
        </div>
        
        <!-- Page Footer -->
        <footer class="mt-5 py-4 border-top border-secondary">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, phòng Sản phẩm - TT Kinh doanh Công nghệ số - <a href="http://mobifonekv4.vn" target="_blank"> Công ty Dịch vụ MobiFone KV4 </a> </p> 
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="mb-0 small contact-mobifone">Liên hệ : 093 445 3888</p>
                </div>
            </div>
            
        </footer>
        <!-- End of Page Footer -->  
    </div>
</section>
   <!-- core  -->
   <script src="<?php echo base_url();?>public/jnp_assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="<?php echo base_url();?>public/jnp_assets/vendors/bootstrap/bootstrap.bundle.js"></script>
     <script src="<?php echo base_url();?>public/jnp_assets/js/jquery.validate.js"></script>
     <script type="text/javascript">
    $(document).ready(function () {
        $("#frm-send-message").validate({
            rules:{
                name: {
                    required: true,
                    minlength: 3
                },
                subject: "required",
                message : "required",
                email: {
                    required: true,
                    email: true
                },
            },
            messages:{
                name:"Please enter your name..!",
                subject:"Please enter message..!",
                message:"Please enter message..!",
                email:"Please enter your email..!",
            },
            submitHandler: function(form) {
                alert('Cảm ơn Quý khách đã gửi tin nhắn. Chúng tôi sẽ sớm liên lạc Quý khách');
                var base_url= '<?php echo base_url().$lang;?>';
                
                $.ajax({
                    type: "POST",
                    url: base_url + "/JnpHome/send_message",
                    data: $(form).serialize(),
                    success: function(data) {}
                }); 
            }
        });
    });
      
               
            // ====================================================

            // $.ajax({
                // method: "POST",
                // url: base_url + "/JnpHome/send_message",
                // dataType: "json",
                // data: new FormData(this),
                // mimeType: "multipart/form-data",
                // contentType: false,
                // processData: false,
                        
                // success : function (data) 
                // {
                //     console.log('data');
                //     if(data.success == "1")
                //     {
                //         alert(data.response);
                //     }
                // }
            // });
        
  
    </script>
    


    <!-- bootstrap 3 affix -->
	<script src="<?php echo base_url();?>public/jnp_assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="<?php echo base_url();?>public/jnp_assets/vendors/isotope/isotope.pkgd.js"></script>

    <script src="<?php echo base_url();?>public/js/owl.carousel.min.js"></script>
    <!-- LeadMark js -->
    <script src="<?php echo base_url();?>public/jnp_assets/js/leadmark.js"></script>

    <script src="<?php echo base_url();?>public/jnp_assets/js/leadmark-custom.js"></script>
</body>
</html>