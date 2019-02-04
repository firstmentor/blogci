<?php include "layout/header.php"; ?>
<?php print_r($showdata); ?>
<div class="container" style="margin-top: 50px;">

	<div class="row">
		<?= anchor('admin/adduser','Add Articles',['class'=>'btn btn-lg btn-primary'])?>
	</div>
	<?php  if($msg=$this->session->flashdata('msg')):  
	$msg_class =$this->session->flashdata('msg_class')
		?>
<div class="row">
<div class="col-lg-6">
<div class="alert <?= $msg_class ?>">
<?= $msg; ?>
</div>
</div>
</div>


<?php endif; ?>

	<div class="table">
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Article Title</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>	
			</thead>
			<tbody>
				<?php if(count($showdata)): ?>
				<?php foreach ($showdata as $art ): ?>
				
				<tr>
					<td>1</td>
					<td><?php echo $art->article_title; ?> </td>
					<td><a href="" class="btn btn-primary">Edit</a>
					<td><a href="" class="btn btn-info">Delete</a>
				</td>	
				<?php endforeach; ?>
				<?php endif; ?>		
					
				</tbody>
			















		</table>
	





</div>
