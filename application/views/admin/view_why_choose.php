<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Tại sao chọn chúng tôi</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/why_choose/add" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Thêm mới</a>
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
	        
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>STT </th>
								<th>Tiêu đề</th>
								<th>Icon</th>
								<th>Hình ảnh</th>
								<th width="140">Tùy chọn</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($why_choose as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo  $row['name']; ?></td>
									<td><i class="<?php echo  $row['icon']; ?>" style="font-size:30px;"></i></td>
									<td style="width:200px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo  $row['photo']; ?>" alt="<?php echo  $row['name']; ?>" style="width:200px;"></td>									
									<td>
										<a href="<?php echo base_url(); ?>admin/why_choose/edit/<?php echo  $row['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh sửa</a>
										<a href="<?php echo base_url(); ?>admin/why_choose/delete/<?php echo  $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a> 
									</td>
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>