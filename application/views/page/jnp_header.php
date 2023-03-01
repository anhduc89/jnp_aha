<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Vina J&P Company</title>
     <!-- font icons -->
     <link rel="stylesheet" href="<?php echo base_url();?>public/jnp_assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/owl.carousel.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>public/jnp_assets/css/leadmark.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/jnp_assets/css/leadmark-custom.css">
        
    <!-- <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>"> -->
    <link rel="icon" type="image/png" href="<?php echo base_url().'/public/uploads/logo.png' ?>">    
   
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <?php
        $lang =  $this->session->userdata('lang');
        // xử lý việc khi người dùng đang ở trong 1 trang con mà chuyển ngôn ngữ thì sẽ giữ nguyên trang và đổi sang ngôn ngữ được chọn
        $current_uri_part = $this->uri->segment(2);
        $current_id_product = $this->uri->segment(3);
    ?>  



    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container container-menu">
            <a class="navbar-brand" href="<?php echo base_url().$lang;;?>">
                <img src="<?php echo base_url()?>/public/uploads/logo.png" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">   
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().$lang.'/gioi-thieu';?>"> <?php echo $this->lang->line('menu_aboutus');?> </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().$lang.'/danh-sach-san-pham';?>"> <?php echo $this->lang->line('menu_product');?> </a> 
                    </li>

                    <li class="nav-item"> 
                        <a class="nav-link" href="<?php echo base_url().$lang.'/hinh-anh-cong-ty';?>"> <?php echo $this->lang->line('menu_activities');?> </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().$lang.'/lien-he';?>"><?php echo $this->lang->line('menu_contact');?></a>
                    </li>
                    
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li> -->
                   
                    <li class="nav-item languages">
                        <!-- <a href="components.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Components</a> -->
                        <span class="nav-link ti-world"></span>
                        <div class="language-list">
                            <?php 
                                $lang = $this->uri->segment(1);
                            ?>
                            <ul>

                                <li class="language-item <?php if($lang == 'vn') echo 'active';?>">
                                    <a href="<?=base_url().'vn/'.$current_uri_part.'/'.$current_id_product?>" class="lang-3">Vietnamese</a>
                                </li>

                                <li class="language-item <?php if($lang == 'kr') echo 'active';?>">
                                    <a href="<?=base_url().'kr/'.$current_uri_part.'/'.$current_id_product?>" class="lang-2">Korean</a>
                                </li>
                                
                                <li class="language-item <?php if($lang == 'en') echo 'active';?>">
                                    <a href="<?=base_url().'en/'.$current_uri_part.'/'.$current_id_product?>" class="lang-1">English</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->