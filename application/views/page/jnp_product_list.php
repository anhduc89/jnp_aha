<?php
     $lang =  $this->session->userdata('lang');
?>

<div class="product-list-page common-banner header">
   <!-- Hero Start -->
   <div class="container-fluid bg-secondary py-5 bg-hero">
        <div class="bg-image">
            <img src="<?php echo base_url().'public/uploads/'.$page_about['home_about_photo'];?>" alt="">
        </div>
        <div class="overlay">
            <div class="bg-container container py-5 ">
                <div class="justify-content-start ">
                    <div class="text-center text-lg-left">
                        <h1 class="display-1 text-dark text-light-present"><?php echo $this->lang->line('products_title');?></h1>
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

    <div class="list-page">
        <div class="container text-center">
            <div class="row">
                <!-- // list product -->
                <div class="col-12 col-md-6 col-xl-4 my-3 my-md-5">
                    <div class="product-item">
                        <a class="image-container" href="">
                            <img src="<?php echo base_url();?>public/jnp_assets/imgs/header.jpg" alt="">
                        </a>
                        <div class="content">
                            <a class="title" href="">
                                <h4 class="ellipsis-text">Cillum ut et eiusmod nostrud dolore do.</h4>
                            </a>
                            <div class="short-description ellipsis-text">
                                Consectetur non exercitation sit dolor eiusmod enim exercitation sit qui ex consequat nostrud eiusmod. Irure fugiat commodo est minim labore ea. Sit laboris enim nulla non id irure consequat exercitation velit.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- // list product -->
                <div class="col-12 col-md-6 col-xl-4 my-3 my-md-5">
                    <div class="product-item">
                        <a class="image-container" href="">
                            <img src="<?php echo base_url();?>public/jnp_assets/imgs/header.jpg" alt="">
                        </a>
                        <div class="content">
                            <a class="title" href="">
                                <h4 class="ellipsis-text">Cillum ut et eiusmod nostrud dolore do.</h4>
                            </a>
                            <div class="short-description ellipsis-text">
                                Consectetur non exercitation sit dolor eiusmod enim exercitation sit qui ex consequat nostrud eiusmod. Irure fugiat commodo est minim labore ea. Sit laboris enim nulla non id irure consequat exercitation velit.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- // list product -->
                <div class="col-12 col-md-6 col-xl-4 my-3 my-md-5">
                    <div class="product-item">
                        <a class="image-container" href="">
                            <img src="<?php echo base_url();?>public/jnp_assets/imgs/header.jpg" alt="">
                        </a>
                        <div class="content">
                            <a class="title" href="">
                                <h4 class="ellipsis-text">Cillum ut et eiusmod nostrud dolore do.</h4>
                            </a>
                            <div class="short-description ellipsis-text">
                                Consectetur non exercitation sit dolor eiusmod enim exercitation sit qui ex consequat nostrud eiusmod. Irure fugiat commodo est minim labore ea. Sit laboris enim nulla non id irure consequat exercitation velit.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- // list product -->
                <div class="col-12 col-md-6 col-xl-4 my-3 my-md-5">
                    <div class="product-item">
                        <a class="image-container" href="">
                            <img src="<?php echo base_url();?>public/jnp_assets/imgs/header.jpg" alt="">
                        </a>
                        <div class="content">
                            <a class="title" href="">
                                <h4 class="ellipsis-text">Cillum ut et eiusmod nostrud dolore do.</h4>
                            </a>
                            <div class="short-description ellipsis-text">
                                Consectetur non exercitation sit dolor eiusmod enim exercitation sit qui ex consequat nostrud eiusmod. Irure fugiat commodo est minim labore ea. Sit laboris enim nulla non id irure consequat exercitation velit.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>