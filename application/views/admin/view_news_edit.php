<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Chỉnh sửa tin</h1>
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

			<?php echo form_open_multipart(base_url().'admin/news/edit/'.$news['news_id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tiêu đề <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="news_title" value="<?php echo $news['news_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Mô tả ngắn <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="news_content_short" style="height:80px;"><?php echo $news['news_content_short']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nội dung <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="news_content"><?php echo $news['news_content']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ngày đăng <span>*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="news_date" id="datepicker" value="<?php echo $news['news_date']; ?>">(Format: yy-mm-dd)
							</div>
						</div>
						
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Chuyên mục <span>*</span></label>
				            <div class="col-sm-3">
				            	<select class="form-control select2" name="category_id">
								<?php
				            	$i=0;
				            	foreach ($all_category as $row) {
									?>
									<option value="<?php echo $row['category_id']; ?>" <?php if($row['category_id']==$news['category_id']){echo 'selected';} ?>><?php echo $row['category_name']; ?></option>
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
									<option value="On" <?php if($news['comment'] == 'On') {echo 'selected';} ?>>Cho phép</option>
									<option value="Off" <?php if($news['comment'] == 'Off') {echo 'selected';} ?>>Không cho phép</option>
								</select>
				            </div>
				        </div>
				        <h3 class="seo-info">Hình ảnh và  Banner</h3>
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Hình ảnh</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				            	<?php
				            	if($news['photo'] == '') {
				            		echo 'No photo found';
				            	} else {
				            		?><img src="<?php echo base_url(); ?>public/uploads/<?php echo $news['photo']; ?>" alt="<?php echo $news['news_title']; ?>" class="existing-photo" style="width:140px;"><?php
				            	}
				            	?>
				            </div>
				        </div>
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Thay đổi hình ảnh</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="photo">
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label"> Banner</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				            	<?php
				            	if($news['banner'] == '') {
				            		echo 'No photo found';
				            	} else {
				            		?><img src="<?php echo base_url(); ?>public/uploads/<?php echo $news['banner']; ?>" alt="<?php echo $news['news_title']; ?>" class="existing-photo" style="width:300px;"><?php
				            	}
				            	?>
				            </div>
				        </div>
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Thay đổi Banner</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="banner">
				            </div>
				        </div>
						<h3 class="seo-info">Thông tin SEO</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Mô tả tiêu đề </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title" value="<?php echo $news['meta_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Từ khóa  </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_keyword" value="<?php echo $news['meta_keyword']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Mô tả </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:200px;"><?php echo $news['meta_description']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Cập nhật</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>