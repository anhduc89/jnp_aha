<?php
    $lang =  $this->session->userdata('lang');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
</style>
<div class="product-detail-page common-banner header">
   <!-- Hero Start -->
   <div class="container-fluid bg-secondary py-5 bg-hero">
        <div class="bg-image">
            <img src="<?php echo base_url().'public/uploads/'.$home_about['home_about_photo'];?>" alt="">
        </div>
        <div class="overlay">
            <div class="bg-container container py-5 ">
                <div class="justify-content-start ">
                    <div class="text-center text-lg-left">
                        <h1 class="display-1 text-dark text-light-present"><?php echo $this->lang->line('product_detail_title');?></h1>
                        <div class="pt-2">
                            <a href="<?php echo base_url().$lang;?>" class="btn btn-primary rounded-pill py-2 px-4 mx-2 btn-rounded-pill"><?php echo $this->lang->line('about_btn_home');?></a>
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 mx-2 btn-rounded-pill"><?php echo $this->lang->line('btn_products');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Hero End -->

    <div class="detail-page">
       <!-- Product section-->
       <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 ">
                        <!-- slide -->
                        <div class="row owl-carousel owl-theme"  id="owl-demo" >
                          
                            <div class="item"> <img class="card-img-top mb-5 mb-md-0" src="<?php echo base_url().'public/uploads/'.$product_detail['photo']?>"></div>
                            <?php
                                foreach($img_product as $i)
                                {
                                    echo '<div class="item"> 
                                        <img src="'.base_url().'public/uploads/portfolio_photos/'.$i['photo'].'" alt="" class="card-img-top mb-5 mb-md-0">
                                    </div>';
                                }
                            ?>
                        </div>
                    </div>
                    

                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?php echo $product_detail['name_'.$lang.''];?></h1>
                        <p class="lead"><?php echo $product_detail['content_'.$lang.''];?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4"><?php echo $this->lang->line('orther_product');?></h2>
                <!-- <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"> -->
                <div class="row justify-content-center">
                    <?php
                        foreach($home__products_portfolio as $i)
                        {
                            echo '<div class="col-xs-12 col-sm-12 col-md-3" style="margin-bottom: 10px;">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <!-- <img class="card-img-top" src="'.base_url().'public/uploads/'.$i['photo'].'" alt="'.$i['name_'.$lang.''].'">-->
                                        <div class="img-activities" style="margin-right: 10px; width: 100%; height: 160px; background-size: cover;background-image:url('.base_url().'public/uploads/'.$i['photo'].')"> </div>
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <h5 class="fw-bolder">'.$i['name_'.$lang.''].'</h5>
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="'.base_url().$lang.'/thong-tin-san-pham'.'/'.$i['id'].'">Chi tiết</a></div>
                                        </div>
                                    </div>
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>






