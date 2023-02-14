<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<title>Document</title>
</head>

<body>
	<div class="container">
		<h1>
			<center>Product List</center>
		</h1>

		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Product Name</th>
					<th scope="col">Price</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<?php
			$i = 0;
			foreach ($products as $row) :
				$i++;
			?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row->product_name ?></td>
					<td><?php echo str_replace(',', '.', 'Rp' . number_format($row->product_price)) ?></td>
					<td>
						<a href="<?php echo base_url('product/edit/' . $row->product_id); ?>" class="btn btn-sm btn-warning">Update</a>
						<a href="<?php echo base_url('product/delete/' . $row->product_id); ?>" class="btn btn-sm btn-danger">Delete</a>
					</td>
				</tr>

			<?php endforeach; ?>
			<tbody>

			</tbody>
		</table>
	</div>
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>

</html>