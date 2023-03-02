<?php
    $lang =  $this->session->userdata('lang');
?>
<div class="product-list-page common-banner header">
    <!-- Hero Start -->
    <div class="container-fluid bg-secondary py-5 bg-hero">
        <div class="bg-image">
            <img src="<?php echo base_url().'public/uploads/'.$home_about['home_about_photo'];?>" alt="">
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
                <?php
                    foreach($home__products_portfolio as $item)
                    {
                        echo '
                            <div class="col-12 col-md-6 col-xl-4 my-3 my-md-5">
                                <div class="product-item">
                                    <a class="image-container" href="'.base_url().$lang.'/thong-tin-san-pham'.'/'.$item['id'].'">
                                        <div class="img-activities" style="margin-right: 10px; width: 360px; height: 280px; background-size: cover;background-image:url('.base_url().'public/uploads/'.$item['photo'].')"> </div>
                                    </a>
                                    <div class="content" style="margin-top: 30px;">
                                        <a class="title" href="'.base_url().$lang.'/thong-tin-san-pham'.'/'.$item['id'].'">
                                            <h5 class="ellipsis-text">'.$item['name_'.$lang.''].'</h5>
                                        </a>
                                        <div class="short-description ellipsis-text">
                                            '.$item['short_content_'.$lang.''].'
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                    //<img src="'.base_url().'public/uploads/'.$item['photo'].'" alt="">
                ?>
            </div>
        </div>
    </div>