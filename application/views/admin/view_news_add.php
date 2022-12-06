<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Đăng tin mới</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/news" class="btn btn-primary btn-sm">Xem tất cả</a>
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

			<?php echo form_open_multipart(base_url().'admin/news/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tiêu đề <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="news_title" value="<?php if(isset($_POST['news_title'])) {echo $_POST['news_title'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Mô tả ngắn <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="news_content_short" style="height:80px;"><?php if(isset($_POST['news_content_short'])) {echo $_POST['news_content_short'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nội dung <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="news_content"><?php if(isset($_POST['news_content'])) {echo $_POST['news_content'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ngày đăng <span>*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="news_date" id="datepicker" value="<?php echo date('Y-m-d'); ?>">(Format: yy-mm-dd)
							</div>
						</div>						
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Chuyên mục <span>*</span></label>
				            <div class="col-sm-3">
				            	<select class="form-control select2" name="category_id">
				            		<option value="">Chọn chuyên mục</option>
				            		<?php
						            	$i=0;
						            	foreach ($all_category as $row) {
						            		?>
											<option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
						            		<?php
						            	}
					            	?>
				            	</select>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Bình luận <span>*</span></label>
				            <div class="col-sm-3">
				            	<select class="form-control select2" name="comment">
									<option value="On">Cho phép</option>
									<option value="Off">Không cho phép</option>
								</select>
				            </div>
				        </div>
				        <h3 class="seo-info">Hình ảnh và Banner</h3>
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Hình ảnh *</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="photo">
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Banner *</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="banner">
				            </div>
				        </div>
						<h3 class="seo-info">Thông tin SEO</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Mô tả tiêu đề </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title" value="<?php if(isset($_POST['meta_title'])) {echo $_POST['meta_title'];} ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Từ khóa  </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_keyword" style="height:100px;"><?php if(isset($_POST['meta_keyword'])) {echo $_POST['meta_keyword'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Mô tả </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:100px;"><?php if(isset($_POST['meta_description'])) {echo $_POST['meta_description'];} ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>