<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin/login');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Chuyên mục dự án</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/portfolio_category/add" class="btn btn-primary btn-sm">Thêm chuyên mục</a>
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
			        <th>Tên chuyên mục</th>
			        <th>Trạng thái</th>
			        <th>Tùy chọn</th>
			    </tr>
			</thead>
            <tbody>
            	<?php
            	$i=0;
            	foreach ($portfolio_category as $row) {
            		$i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row['category_name']; ?></td>
	                    <td><?php echo $row['status']; ?></td>
	                    <td>
	                        <a href="<?php echo base_url(); ?>admin/portfolio_category/edit/<?php echo $row['category_id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh sửa</a>
                            <a href="<?php echo base_url(); ?>admin/portfolio_category/delete/<?php echo $row['category_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
	                    </td>
	                </tr>
            		<?php
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div>
  

</section>