<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Chỉnh sửa</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/portfolio_category" class="btn btn-primary btn-sm">Xem tất cả</a>
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

	       <?php echo form_open(base_url().'admin/portfolio_category/edit/'.$portfolio_category['category_id'],array('class' => 'form-horizontal')); ?>

	        <div class="box box-info">

	            <div class="box-body">
	                <div class="form-group">
	                    <label for="" class="col-sm-2 control-label">Tên danh mục (VN)*</label>
	                    <div class="col-sm-4">
	                        <input type="text" class="form-control" name="category_name_vn" value="<?php echo $portfolio_category['category_name_vn']; ?>">
	                    </div>
	                </div>
					<div class="form-group">
	                    <label for="" class="col-sm-2 control-label">Tên danh mục (EN)*</label>
	                    <div class="col-sm-4">
	                        <input type="text" class="form-control" name="category_name_en" value="<?php echo $portfolio_category['category_name_en']; ?>">
	                    </div>
	                </div>
					<div class="form-group">
	                    <label for="" class="col-sm-2 control-label">Tên danh mục (KR)*</label>
	                    <div class="col-sm-4">
	                        <input type="text" class="form-control" name="category_name_kr" value="<?php echo $portfolio_category['category_name_kr']; ?>">
	                    </div>
	                </div>
	                <div class="form-group">
			            <label for="" class="col-sm-2 control-label">Trạng thái *</label>
			            <div class="col-sm-4">
			            	<select name="status" class="form-control select2">
			            		<option value="Active" <?php if($portfolio_category['status']=='Active') {echo 'selected';} ?>>Active</option>
			            		<option value="Inactive" <?php if($portfolio_category['status']=='Inactive') {echo 'selected';} ?>>Inactive</option>
			            	</select>
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