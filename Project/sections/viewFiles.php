<?php
	include 'operations.php';
	$Proj_ID = $_REQUEST['id'];
	$tab = $_REQUEST['tab'];
	$i = 1;
	

	$row = $op->viewFiles($Proj_ID, $tab);?>
	<table border="1" width="600px">
		<thead>
			<tr>
				<th>S#</th>
				<th>File Name</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
		<?php while($data=mysqli_fetch_array($row)) {?>
			<tr>
				<td><?php echo $i;?></td>
				<td><a href="../uploads/<?php echo $data['filename'];?>" target="_blank"><?php echo $data['filename'];?></a></td>
				<td><?php echo $data['description'];?></td>
			</tr>
		<?php $i++; }?>
		</tbody>
	</table>