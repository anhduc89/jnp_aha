<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Bảng giá</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/pricing_table/add" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Thêm bảng giá</a>
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
								<th>Icon</th>
								<th>Tiêu đề</th>
								<th>Giá</th>
								<th>Phụ đề</th>
								<th width="140">Tùy chọn</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($pricing_table as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><i class="<?php echo $row['icon']; ?>" style="color:#333;font-size:40px;"></i></td>
									<td><?php echo $row['title']; ?></td>
									<td><?php echo $row['price']; ?></td>
									<td><?php echo $row['subtitle']; ?></td>
									<td>
										<a href="<?php echo base_url(); ?>admin/pricing_table/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh sửa</a>
										<a href="<?php echo base_url(); ?>admin/pricing_table/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a> 
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