<!-- Đổi thành hiển thị tin nhắn người dùng gửi đến từ trang khách -->
<?php
// if(!$this->session->userdata('id')) {
//     redirect(base_url().'admin');

//      echo base_url().'public/uploads/'.$page_about['home_about_photo'];
// }
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Phản hồi của khách hàng</h1>
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
					<li class="active"><a href="#tab_1" data-toggle="tab">Chưa phản hồi</a></li>
					<li><a href="#tab_9" data-toggle="tab">Đã phản hồi</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="tab_1">
                        <div class="box box-info">
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="30">STT </th>
                                            <th width="30">Tên người dùng </th>
                                            <th width="30">Email</th>
                                            <th width="100">Tiêu đề</th>
                                            <th width="100">Nội dung</th>
                                            <th width="80">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=1;							
                                            foreach ($message as $row) 
                                            {
                                                
                                                echo '<tr>
                                                    <td>'.$i.'</td>
                                                    <td>'.$row['name'].'</td>
                                                    <td>'.$row['email'].'</td>
                                                    <td>'.$row['subject'].'</td>
                                                    <td>'.$row['message'].'</td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="'.$row['status'].'"  id="'.$row['id'].'" name="change_status_mess">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                            Chuyển trạng thái
                                                            </label>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                ';
                                                $i++;
                                            }
                                        ?>							
                                    </tbody>
                                </table>
                            </div>
                        </div>
						
					</div> <!-- hết -->
                    
                    <div class="tab-pane" id="tab_9">
                        
                        <div class="box box-info">
                            <div class="box-body table-responsive">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="30">STT </th>
                                            <th width="30">Tên người dùng </th>
                                            <th width="30">Email</th>
                                            <th width="100">Tiêu đề</th>
                                            <th width="100">Nội dung</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $i=1;							
                                            foreach ($message_reply as $row) 
                                            {
                                                
                                                echo '<tr>
                                                        <td>'.$i.'</td>
                                                        <td>'.$row['name'].'</td>
                                                        <td>'.$row['email'].'</td>
                                                        <td>'.$row['subject'].'</td>
                                                        <td>'.$row['message'].'</td>
                                                  
                                                    </tr>
                                                ';
                                                $i++;
                                            }
                                        ?>							
                                    </tbody>
                                </table>
                            </div>
                        </div>
						
                        
                    </div>
                </div>        
			</div>
        </div>

    </div>
</section>
