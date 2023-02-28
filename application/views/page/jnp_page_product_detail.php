<?php
    $lang =  $this->session->userdata('lang');
?>
<div class="product-detail-page common-banner">
    <!-- Hero Start -->
    <div class="container-fluid bg-secondary py-5 bg-hero">
        <div class="bg-image">
            <img src="<?php echo base_url();?>public/jnp_assets/imgs/header.jpg" alt="">
        </div>
        <div class="bg-container container py-5">
            <div class="justify-content-start">
                <div class="text-center text-lg-left">
                    <h1 class="display-1 text-dark text-light-present">Thông tin sản phẩm</h1>
                    <div class="pt-2">
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4 mx-2 btn-rounded-pill">Home</a>
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4 mx-2 btn-rounded-pill">Thông tin sản phẩm</a>
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
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo base_url().'public/uploads/'.$product_detail['photo']?>" alt="..."></div>
                    <div class="col-md-6">
                        
                        <h1 class="display-5 fw-bolder"><?php echo $product_detail['name'];?></h1>
                        
                        <p class="lead"><?php echo $product_detail['content'];?></p>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Sản phẩm khác </h2>
                <!-- <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"> -->
                <div class="row justify-content-center">
                    <?php
                        foreach($home__products_portfolio as $i)
                        {
                            echo '<div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <img class="card-img-top" src="'.base_url().'public/uploads/'.$i['photo'].'" alt="...">
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                               
                                                <h5 class="fw-bolder">'.$i['name'].'</h5>
                                               
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
