<?php
    $lang =  $this->session->userdata('lang');
?>
<div class="about-page common-banner">
    <!-- Hero Start -->
    <div class="container-fluid bg-secondary py-5 bg-hero">
        <div class="bg-image">
            <img src="<?php echo base_url().'public/uploads/'.$page_about['home_about_photo'];?>" alt="">
        </div>
        <div class="bg-container container py-5">
            <div class="justify-content-start">
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
    <!-- Hero End -->

    <div class="about-page">
        <div class="section-title container py-5">
            <h4 class="text-center">
                <?php echo $page_about['about_heading'];?>
            </h4>
        </div>
        <div class="section-inner container">
            <?php echo $page_about['about_content'];?>
        </div>

        <!-- <div class="section-outter my-5 container">
            <div class="img-container mx-md-5">
                <img src="<?php echo base_url();?>public/jnp_assets/imgs/header.jpg" alt="">
            </div>
        </div>

        <div class="section-inner container">
            <p>In consequat ullamco velit culpa. Elit deserunt elit cillum proident laboris velit Lorem duis in aliquip veniam velit fugiat. Nostrud do id tempor id Lorem magna in cupidatat do cillum magna ad Lorem qui. Nulla fugiat pariatur veniam veniam qui ea aliqua consequat. Sunt irure reprehenderit sit qui deserunt fugiat id amet quis ullamco adipisicing laboris cupidatat nostrud.</p>

            <p>Est irure aliquip labore ullamco aute nulla cupidatat anim nostrud mollit irure ad irure. Mollit irure laboris officia enim exercitation velit. Duis aute sit aliquip aliqua quis magna Lorem nostrud. Laborum tempor sit ad ex enim non laboris aute Lorem anim enim mollit eu.</p>
        </div> -->
    </div>

</div>