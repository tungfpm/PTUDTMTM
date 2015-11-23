		<table>
		<tr>
		<td>ID</td>
		<td>Ten</td>
		<td>Mo ta</td>
		<td>Xoa</td>
		<td>Them</td>
		<td>Sua</td>
		</tr>
		<?php foreach($data as $rows):?>
		<tr>
		<td><?php echo $rows['id']?></td>
		<td><?php echo $rows['ten']?></td>
		<td><?php echo $rows['mota']?></td>
		<td><a href=index.php?controller=sanpham&task=xoasanpham&id=<?php echo $rows['id']?>>[-] </a></td>
		<td><a href=index.php?controller=sanpham&task=themsanpham>[+] </a></td>
		<td><a href=index.php?controller=sanpham&task=suasanpham&id=<?php echo $rows['id']?>>[<>] </a></td>
		</tr>
		<?php endforeach;?>
		</table>
		
