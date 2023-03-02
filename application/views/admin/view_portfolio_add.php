<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Thêm sản phẩm</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/portfolio" class="btn btn-primary btn-sm">Xem tất cả</a>
	</div>
</section>


<section class="content">

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

			<?php echo form_open_multipart(base_url().'admin/portfolio/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Danh mục sản phẩm *</label>
							<div class="col-sm-4">
								<select name="category_id" class="form-control select2">
									<?php
									foreach ($all_photo_category as $row) {
										?>
										<option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name_vn'].' -- '.$row['category_name_en'].' -- '.$row['category_name_kr']; ?></option>
										<?php
									}
									?>
								</select>
							</div>
						</div>
						
						<!-- Tiếng Việt -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tên sản phẩm (VN) *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name_vn" value="<?php if(isset($_POST['name'])){echo $_POST['name_vn'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Giới thiệu ngắn (VN) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content_vn" style="height:100px;"><?php if(isset($_POST['short_content'])){echo $_POST['short_content_vn'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nội dung giới thiệu chi tiết (VN) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content_vn" id="editor1"><?php if(isset($_POST['content'])){echo $_POST['content_vn'];} ?></textarea>
							</div>
						</div>

						<!-- Tiếng Anh -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tên sản phẩm (EN) *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name_en" value="<?php if(isset($_POST['name'])){echo $_POST['name_en'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Giới thiệu ngắn (EN) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content_en" style="height:100px;"><?php if(isset($_POST['short_content'])){echo $_POST['short_content_en'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nội dung giới thiệu chi tiết (EN) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content_en" id="editor2"><?php if(isset($_POST['content'])){echo $_POST['content_en'];} ?></textarea>
							</div>
						</div>

						<!-- Tiếng Hàn -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tên sản phẩm (KR) *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name_kr" value="<?php if(isset($_POST['name'])){echo $_POST['name_kr'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Giới thiệu ngắn (KR) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content_kr" style="height:100px;"><?php if(isset($_POST['short_content'])){echo $_POST['short_content_kr'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nội dung giới thiệu chi tiết (KR) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content_kr" id="editor3"><?php if(isset($_POST['content'])){echo $_POST['content_kr'];} ?></textarea>
							</div>
						</div>
						
			
						<h3 class="seo-info">Hình ảnh</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Hình ảnh *</label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<h3 class="seo-info">Hình ảnh khác</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Hình ảnh khác</label>
							<div class="col-sm-6" style="padding-top:5px">
								<table id="PhotosTable" style="width:100%;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="upload-btn">
                                                    <input type="file" name="photos[]">
                                                </div>
                                            </td>
                                            <td style="width:28px;"><a href="javascript:void()" class="Delete btn btn-danger btn-xs">X</a></td>
                                        </tr>
                                    </tbody>
                                </table>
							</div>
							<div class="col-sm-2" style="padding-top:5px">
                                <input type="button" id="btnAddNew" value="Thêm ảnh" style="margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">
                            </div>
						</div>
					
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Thêm mới</button>
							</div>
						</div>

					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>