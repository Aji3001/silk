<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<p><b>Data Toko Buah</b></p>
<a href="<?= base_url('silk/sampel/tambah')?>" >Tambah Data</a>
<br>
<table>
	<th>ID </th>
	<th>Name </th>
	<th>Price </th>
	<th>Description </th>
	<?php foreach ($products as $key => $value) { ?>
	<tr> 
		<td><?php echo $value->product_id; ?></td>
		<td><?php echo $value->name; ?>	</td>
		<td><?php echo $value->price; ?>	</td>
		<td><?php echo $value->description; ?>	</td>
		<td><a href="<?= base_url('silk/sampel/delete/')?><?= $value->product_id;?>">Hapus</a></td>

	</tr>
	<?php } ?>
</table>
</body>

</html>