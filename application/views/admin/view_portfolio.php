<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Danh sách sản phẩm</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/portfolio/add" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm sản phẩm mới</a>
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
								<th>Sản Phẩm (VN)</th>
								<th>Sản Phẩm (EN)</th>
								<th>Sản Phẩm (KR)</th>
								<th>Danh mục</th>
								<th>Hình ảnh</th>
								<th width="140">Tùy chọn</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i=0;						
								foreach ($portfolio as $row) 
								{ $i++;
							?>
								<tr>
									<td style="width:100px;"><?php echo $i; ?></td>
									<td><?php echo $row['name_vn']; ?></td>
									<td><?php echo $row['name_en']; ?></td>
									<td><?php echo $row['name_kr']; ?></td>
									<td><?php echo $row['category_name_vn'] .' -- '.$row['category_name_en'].' -- '.$row['category_name_kr']; ?></td>
									<td style="width:250px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>"  style="width:150px;"></td>
									<td>
										<a class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Details</a>						
										<a href="<?php echo base_url(); ?>admin/portfolio/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh sửa</a>
										<a href="<?php echo base_url(); ?>admin/portfolio/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
									</td>
								</tr>

								<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			                        <div class="modal-dialog" role="document">
			                            <div class="modal-content">
			                                <div class="modal-header">
			                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			                                    <h4 class="modal-title" id="myModalLabel">Thông tin chi tiết </h4>
			                                </div>
			                                <div class="modal-body">
			                                    <div class="rTable">
			                                        <div class="rTableRow">
			                                            <div class="rTableHead"><strong>Name</strong></div>
			                                            <div class="rTableCell">
			                                                <?php echo $row['name_vn'].' -- '.$row['name_en'].' -- '. $row['name_kr'] ; ?>
			                                            </div>
			                                        </div>
			                                        <div class="rTableRow">
			                                            <div class="rTableHead"><strong>Content (VN)</strong></div>
			                                            <div class="rTableCell">
			                                                <?php echo $row['content_vn']; ?>
			                                            </div>
			                                        </div>

													<div class="rTableRow">
			                                            <div class="rTableHead"><strong>Content (EN)</strong></div>
			                                            <div class="rTableCell">
			                                                <?php echo $row['content_en']; ?>
			                                            </div>
			                                        </div>

													<div class="rTableRow">
			                                            <div class="rTableHead"><strong>Content (KR)</strong></div>
			                                            <div class="rTableCell">
			                                                <?php echo $row['content_kr']; ?>
			                                            </div>
			                                        </div>
			                                      
			                                        <div class="rTableRow">
			                                            <div class="rTableHead"><strong>Category</strong></div>
			                                            <div class="rTableCell">
			                                               	<?php echo $row['category_name_vn'] .' -- '.$row['category_name_en'].' -- '.$row['category_name_kr']; ?>
			                                            </div>
			                                        </div>
			                                        <div class="rTableRow">
			                                            <div class="rTableHead"><strong>Featured Photo</strong></div>
			                                            <div class="rTableCell">
			                                                <img src="<?php echo base_url().'public/uploads/'.$row['photo']; ?>" alt="" style="width:120px;">
			                                            </div>
			                                        </div>
			                                        <div class="rTableRow">
			                                            <div class="rTableHead"><strong>Other Photos</strong></div>
			                                            <div class="rTableCell">
			                                                <?php
			                                                $all_photos = $this->Model_portfolio->get_all_photos_by_category_id($row['id']);
			                                                foreach ($all_photos as $row1) {
			                                                	?>
																	<img src="<?php echo base_url().'public/uploads/portfolio_photos/'.$row1['photo']; ?>" alt="" style="width:120px;">
			                                                	<?php
			                                                }
			                                                ?>
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                                <div class="modal-footer">
			                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			                                </div>
			                            </div>
			                        </div>
			                    </div>

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