<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Portfolio</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/portfolio" class="btn btn-primary btn-sm">View All</a>
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

			<?php echo form_open_multipart(base_url().'admin/portfolio/edit/'.$portfolio['id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						
						<!-- Tiếng Việt -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tên (VN) *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name_vn" value="<?php echo $portfolio['name_vn']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Short Content (VN) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content_vn" style="height:100px;"><?php echo $portfolio['short_content_vn']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Content (VN) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content_vn" id="editor1"><?php echo $portfolio['content_vn']; ?></textarea>
							</div>
						</div>

						<!-- Tiếng Anh -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tên (EN) *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name_en" value="<?php echo $portfolio['name_en']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Short Content (EN) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content_en" style="height:100px;"><?php echo $portfolio['short_content_en']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Content (EN) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content_en" id="editor2"><?php echo $portfolio['content_en']; ?></textarea>
							</div>
						</div>

						<!-- Tiếng Hàn -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tên (KR) *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name_kr" value="<?php echo $portfolio['name_kr']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Short Content (KR) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content_kr" style="height:100px;"><?php echo $portfolio['short_content_kr']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Content (KR) *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content_kr" id="editor3"><?php echo $portfolio['content_kr']; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Select Category *</label>
							<div class="col-sm-4">
								<select name="category_id" class="form-control select2">
									<?php
									foreach ($all_photo_category as $row) {
										?>
										<option value="<?php echo $row['category_id']; ?>" <?php if($row['category_id'] == $portfolio['category_id']) {echo 'selected';} ?>><?php echo $row['category_name_vn'].' -- '.$row['category_name_en'].' -- '.$row['category_name_kr'] ; ?></option>
										<?php
									}
									?>	
								</select>
							</div>
						</div>
						
						<h3 class="seo-info">Featured Photo</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Featuerd Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $portfolio['photo']; ?>" alt="" style="width:120px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Change Featuerd Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<h3 class="seo-info">Other Photos</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Other Photos</label>
							<div class="col-sm-6" style="padding-top:5px">
								<table class="table table-bordered">
									<?php
									foreach ($all_photos_by_id as $row) {
										?>
										<tr>
											<td>
												<img src="<?php echo base_url(); ?>public/uploads/portfolio_photos/<?php echo $row['photo']; ?>" alt="" style="width:120px;">
											</td>
											<td>
												<a href="<?php echo base_url(); ?>admin/portfolio/single-photo-delete/<?php echo $row['id']; ?>/<?php echo $portfolio['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										<?php
									}
									?>
								</table>								
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Add Other Photos</label>
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
                                <input type="button" id="btnAddNew" value="Add Item" style="margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">
                            </div>
						</div>
						<!-- <h3 class="seo-info">Thông tin SEO</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Mô tả tiêu đề</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="meta_title" value="<?php echo $portfolio['meta_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Từ khóa</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_keyword" style="height:100px;"><?php echo $portfolio['meta_keyword']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Mô tả nội dung </label>
							<div class="col-sm-8">
								<textarea class="form-control" name="meta_description" style="height:100px;"><?php echo $portfolio['meta_description']; ?></textarea>
							</div>
						</div> -->
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

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
            </div>
        </div>
    </div>
</div>