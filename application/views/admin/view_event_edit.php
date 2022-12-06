<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Chỉnh sửa sự kiện</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/event" class="btn btn-primary btn-sm">Xem tất cả</a>
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

			<?php echo form_open_multipart(base_url().'admin/event/edit/'.$event['event_id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tiêu đề <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="event_title" value="<?php echo $event['event_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Mô tả ngắn <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="event_content_short" style="height:80px;"><?php echo $event['event_content_short']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nội dung <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="event_content"><?php echo $event['event_content']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ngày bắt đầu <span>*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control datepicker" name="event_start_date" value="<?php echo $event['event_start_date']; ?>">(Format: yy-mm-dd)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ngày kết thúc <span>*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control datepicker" name="event_end_date" value="<?php echo $event['event_end_date']; ?>">(Format: yy-mm-dd)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Địa điểm <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="event_location" style="height:100px;"><?php echo $event['event_location']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Bản đồ <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="event_map" style="height:100px;"><?php echo $event['event_map']; ?></textarea>
							</div>
						</div>
				        <h3 class="seo-info">Hình ảnh and Banner</h3>
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Hình ảnh</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				            	<?php
				            	if($event['photo'] == '') {
				            		echo 'No photo found';
				            	} else {
				            		?><img src="<?php echo base_url(); ?>public/uploads/<?php echo $event['photo']; ?>" alt="<?php echo $event['event_title']; ?>" class="existing-photo" style="width:140px;"><?php
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
				            <label for="" class="col-sm-2 control-label">Banner</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				            	<?php
				            	if($event['banner'] == '') {
				            		echo 'No photo found';
				            	} else {
				            		?><img src="<?php echo base_url(); ?>public/uploads/<?php echo $event['banner']; ?>" alt="<?php echo $event['event_title']; ?>" class="existing-photo" style="width:300px;"><?php
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
								<input type="text" class="form-control" name="meta_title" value="<?php echo $event['meta_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Từ khóa  </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_keyword" value="<?php echo $event['meta_keyword']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Mô tả </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:200px;"><?php echo $event['meta_description']; ?></textarea>
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