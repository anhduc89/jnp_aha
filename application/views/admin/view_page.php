<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');

     echo base_url().'public/uploads/'.$page_about['home_about_photo'];
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Về chúng tôi</h1>
    </div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
    <div class="row">
        <div class="col-md-12">
            <?php
            if($this->session->flashdata('error')) {
                ?>
                <div class="callout callout-danger">
                    <p><?php echo $this->session->flashdata('error'); ?></p>
                </div>
                <?php
            }
            if($this->session->flashdata('success')) {
                ?>
                <div class="callout callout-success">
                    <p><?php echo $this->session->flashdata('success'); ?></p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>


<section class="content">

    <div class="row">
        <div class="col-md-12">
                            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_2" data-toggle="tab">Giới thiệu</a></li>
                        <li><a href="#tab_9" data-toggle="tab">Liên hệ</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_2">
                            <?php echo form_open(base_url().'admin/page/update/',array('class' => 'form-horizontal'));  // update cho bản ghi có id = 1. bảng tbl_page_about
                                foreach($page_about as $i)
                                {
                                    if($i['lang'] == 'vn') 
                                    {
                                        echo '<div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">Tiêu đề </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="about_heading" class="form-control" value="'.$i['about_heading'].'">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">Nội dung </label>
                                                    <div class="col-sm-9">
                                                        <textarea name="about_content" class="form-control" cols="30" rows="10" id="editor1">
                                                            '.$i['about_content'].'
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">Slogan (VN)</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="slogan" class="form-control" value="'.$i['slogan'].'">
                                                    </div>
                                                </div>


                                                <input type="hidden" name="id" value="'.$i['id'].'">
                                            ';
                                    }
                                }

                                        echo '<div class="form-group">
                                                <label for="" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-6">
                                                    <button type="submit" class="btn btn-success pull-left" name="form_about">Cập nhật</button>
                                                </div>
                                            </div>'; 
                                echo form_close();
                            ?>

                            <?php echo form_open(base_url().'admin/page/update/',array('class' => 'form-horizontal'));  // update cho bản ghi có id = 2. bảng tbl_page_about
                                    foreach($page_about as $i)
                                    {
                                        if($i['lang'] == 'en') 
                                        {
                                            echo '<div class="form-group">
                                                        <label for="" class="col-sm-2 control-label">Heading </label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="about_heading" class="form-control" value="'.$i['about_heading'].'">
                                                        </div>
                                                    </div>

                                    
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-2 control-label">Content</label>
                                                        <div class="col-sm-9">
                                                            <textarea name="about_content" class="form-control" cols="30" rows="10" id="editor2">
                                                                '.$i['about_content'].'
                                                            </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="" class="col-sm-2 control-label">Slogan (EN)</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="slogan" class="form-control" value="'.$i['slogan'].'">
                                                        </div>
                                                    </div>

                                                    <input type="hidden"  name="id" value="'.$i['id'].'">
                                                ';
                                        }
                                    }

                                    echo '<div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left" name="form_about">Update</button>
                                            </div>
                                        </div>'; 
                                echo form_close();
                            ?>
                            <?php echo form_open(base_url().'admin/page/update/',array('class' => 'form-horizontal'));  // update cho bản ghi có id = 3. bảng tbl_page_about
                                    foreach($page_about as $i)
                                    {
                                        if($i['lang'] == 'kr') 
                                        {
                                            echo '<div class="form-group">
                                                        <label for="" class="col-sm-2 control-label">제목</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="about_heading" class="form-control" value="'.$i['about_heading'].'">
                                                        </div>
                                                    </div>

                                    
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-2 control-label">콘텐츠</label>
                                                        <div class="col-sm-9">
                                                            <textarea name="about_content" class="form-control" cols="30" rows="10" id="editor3">
                                                                '.$i['about_content'].'
                                                            </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="" class="col-sm-2 control-label">Slogan (KR)</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="slogan" class="form-control" value="'.$i['slogan'].'">
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="id" value="'.$i['id'].'">
                                                ';
                                        }
                                    }

                                    echo '<div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left" name="form_about">업데이트</button>
                                            </div>
                                        </div>'; 
                                    echo form_close();


                                    echo form_open_multipart(base_url().'admin/page/update',array('class' => 'form-horizontal'));
                                    echo '<div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Hình ảnh giới thiệu</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="'.base_url().'public/uploads/'.$page_about[0]['home_about_photo'].'" class="existing-photo" style="height:180px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Thay đổi hình giới thiệu</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="home_about_photo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_home_aboutus_photo">Cập nhật</button>
                                        </div>
                                    </div>';
                                    echo form_close();
                            ?>
                        </div>

                        <div class="tab-pane" id="tab_9">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                               
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Địa chỉ liên hệ </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_address" style="height:60px;"><?php echo $page_contact['contact_address']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Địa chỉ Email </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_email" style="height:60px;"><?php echo $page_contact['contact_email']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Số điện thoại </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_phone" style="height:60px;"><?php echo $page_contact['contact_phone']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Bản đồ (iframe Code) </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_map" style="height:120px;"><?php echo $page_contact['contact_map']; ?></textarea>
                                    </div>
                                </div> 
                             
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_contact">Cập nhật</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>

                    </div>
                </div>
        </div>
    </div>

</section>