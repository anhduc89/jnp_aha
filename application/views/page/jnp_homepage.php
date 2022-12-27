<!-- Page Header -->
<header class="header">
    <div class="overlay">
        <h1 class="subtitle">Welcome to Vina J&P Company</h1>
        <h1 class="title">We Are Family</h1>  
    </div>  
    <div class="shape">
        <svg viewBox="0 0 1500 200">
            <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
        </svg>
    </div>  
    <div class="mouse-icon"><div class="wheel"></div></div>
</header>
<!-- End Of Page Header -->



<!-- About Section -->
<section class="section" id="about">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                <h6 class="section-title mb-0">Về chúng tôi</h6>
                <h6 class="section-subtitle mb-4">Vina J&P Company</h6>
                <p> Công ty Vina J&P là công ty liên doanh Việt Nam - Hàn Quốc chuyên sản xuất về các sản phẩm bao bì đóng gói.
                    Được thành lập từ năm 200x, với gần 20 năm kinh nghiệm trong ngành, chúng tôi luôn cố gắng đem đến Quý khách hàng những sản phẩm tốt nhất về lĩnh vực bao bì đóng gói.
                </p>
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
                        <p> Chúng tôi cung cấp tất cả các sản phẩm bao bì liên quan đến các lĩnh vực : thực phẩm, y tế, hàng xuất khẩu, linh kiện điện tử ...</p>
                        <p><b>Chúng tôi lựa chọn những nguyên liệu tốt nhất, thân thiện với môi trường.</b><br>
                        </p>
                        <p>Với những sản phẩm của mình, chúng tôi đã có được sự tin tưởng của các khách hàng lớn như : Samsung, LG, Hundai, ...
                            cùng với những thành tựu đã đạt được, chúng tôi vẫn luôn tâm niệm cố gắng hết sức, cải tiến kĩ thuật để có những sản phẩm chất lượng tốt nhất đem đến Quý khách hàng.
                        </p>
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
        <h6 class="section-title text-center">Hình ảnh của công ty</h6>
        <h6 class="section-subtitle text-center mb-5 pb-3">Một tập thể gắn kết</h6>

        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="<?php echo base_url()?>public/jnp_assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">Pariatur Omnis Harum quae sint.</h6>
                        <p>Fuga quae ratione inventore Perferendis porro.</p>
                        <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="<?php echo base_url()?>public/jnp_assets/imgs/blog-2.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title"> Harum Quae Porro</h5>
                        <p>Fuga quae ratione inventore Perferendis porro.</p>
                        <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="<?php echo base_url()?>public/jnp_assets/imgs/blog-3.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">Qui optio neque alias</h6>
                        <p>Fuga quae ratione inventore Perferendis porro.</p>
                        <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End OF Service Section -->


<!-- Portfolio Section -->
<section id="portfolio" class="section portfolio-section">
    <div class="container">
        <h6 class="section-title text-center">Sản phẩm chính</h6>
        <h6 class="section-subtitle mb-5 text-center"><a href="#">Xem thêm các sản phẩm khác</a></h6>
        <div class="filters">
            <a href="#" data-filter=".all" class="active">
                Tất cả
            </a>
            <?php
                foreach($home_categories_portfolio as $item )
                {
                    echo '<a href="#" data-filter=".'.$item['category_id'].'">';
                    echo        $item['category_name'];
                    echo    '</a>';
                }
            ?>
        </div>

        <?php
            $portfolioCategories = [];
        ?>
        <div class="portfolio-container">
            <div class="lds-hourglass"></div>
            <div class="portfolio-list owl-carousel all">
            <?php
                foreach($home__products_portfolio as $item ) // chỗ này sẽ show ra sản phẩm mới nhất, hoặc sản phẩm bán chạy.
                {
                    $view = $this->view('page/template_part/home_products_portfolio', [
                        'category_id' => $item['category_id'],
                        'photo' => $item['photo'],
                        'name' => $item['name'],
                        'short_content' => $item['short_content'],
                    ], true);
                    $portfolioCategories[$item['category_id']][] = $view;

                    echo $view;
                }
            ?>
            </div>

            <?php
            foreach($portfolioCategories as $id => $views )
            {
                echo '<div class="portfolio-list owl-carousel '.$id.'">';
                foreach($views as $view )
                {
                    echo $view;
                }
                echo '</div>';
            }
            ?>

            <div class="portfolio-dots owl-dots"></div>
        </div>
    </div>
</section>
<!-- End of portfolio section -->

<!-- Blog Section -->
<section class="section blog-section" id="blog">
    <div class="container">
        <h6 class="section-title mb-0 text-center">Khách hàng của chúng tôi</h6>
        <h6 class="section-subtitle mb-5 text-center">Cảm ơn sự đồng hành của Quý khách hàng với Vina J&P</h6>

        <div class="row owl-carousel customers">
            <?php
                foreach($clients as $item)
                {
                    echo '<div class="customer">
                            <div class="card border-0">
                                <img src="'.base_url().'public/uploads/'.$item['photo'].'" alt="" class="card-img-top w-100">
                                <div class="card-body">
                                    <h6 class="card-title">'.$item['name'].'</h6>
<<<<<<< HEAD
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
=======
>>>>>>> 59731d92bba94aaeb3d50462e3a6cf12d566fb44
                                </div>
                            </div>
                        </div>';
                }
            ?>
            <!-- <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="<?php echo base_url()?>public/jnp_assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">SAMSUNG VINA ELECTRONICS CO.,LTD</h6>
                        <p>Công ty TNHH Điện tử Samsung Vina</p>
                        <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="blog-dots owl-dots"></div>
    </div>
</section>
<!-- End of Blog Section -->

<!-- Testmonial Section -->
<section class="section" id="testmonial">
    <div class="container">
        <h6 class="section-title text-center mb-0">Sự tin tưởng của khách hàng</h6>
        <h6 class="section-subtitle mb-5 text-center">Chất lượng sản phẩm là uy tín của Vina J&P</h6>
        <div class="row">
            <?php
                foreach($testimonials as $item)
                {
                    echo '<div class="col-md-4 my-3 my-md-0">
                            <div class="card">
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
            
            <!-- <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="<?php echo base_url()?>public/jnp_assets/imgs/avatar-1.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">Maria Garcia</h6>
                                <small class="text-muted mb-0">Insurance Agent</small>      
                            </div>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="<?php echo base_url()?>public/jnp_assets/imgs/avatar-2.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">Mason Miller</h6>
                                <small class="text-muted mb-0">Residential Appraiser</small>        
                            </div>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- End of Testmonial Section -->

<!-- Contact Section -->
<section id="contact" class="section has-img-bg pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 my-3">
                <h6 class="mb-0">Phone</h6>
                <p class="mb-4">+ 123-456-7890</p>

                <h6 class="mb-0">Địa chỉ</h6>
                <p class="mb-4">Khu công nghiệp Bảo Đà - P. Dữu Lâu - Tp Việt Trì - Phú Thọ</p>

                <h6 class="mb-0">Email</h6>
                <p class="mb-0">jpvina.co.ltd@gmail.com</p>
                <p></p>
            </div>
            <div class="col-md-7">
                <form>
                    <h4 class="mb-4">Liên hệ với chúng tôi</h4>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Họ tên">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="email" class="form-control text-white rounded-0 bg-transparent" name="Email" placeholder="Email">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" placeholder="Tiêu đề">
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="" cols="30" rows="6" class="form-control text-white rounded-0 bg-transparent" placeholder="Tin nhắn"></textarea>

                        </div>
                        <div class="form-group col-12 mb-0">
                            <button type="submit" class="btn btn-primary rounded w-md mt-3">Gửi phản hồi</button>
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