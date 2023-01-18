<?php
    $lang =  $this->session->userdata('lang');
?>
<div class="product-list-page common-banner">
    <!-- Hero Start -->
    <div class="container-fluid bg-secondary py-5 bg-hero">
        <div class="bg-image">
            <img src="<?php echo base_url();?>public/jnp_assets/imgs/header.jpg" alt="">
        </div>
        <div class="bg-container container py-5">
            <div class="justify-content-start">
                <div class="text-center text-lg-left">
                    <h1 class="display-1 text-light-present text-dark">All Products</h1>
                    <div class="pt-2">
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4 mx-2 btn-rounded-pill">Home</a>
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4 mx-2 btn-rounded-pill">Product Listing Page</a>
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
                                        <img src="'.base_url().'public/uploads/'.$item['photo'].'" alt="">
                                    </a>
                                    <div class="content">
                                        <a class="title" href="'.base_url().$lang.'/thong-tin-san-pham'.'/'.$item['id'].'">
                                            <h4 class="ellipsis-text">'.$item['name'].'</h4>
                                        </a>
                                        <div class="short-description ellipsis-text">
                                            '.$item['short_content'].'
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                
                ?>
                
            </div>
        </div>
    </div>