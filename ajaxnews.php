<?php
include 'lib/user.php';
$u = new User();
if ($user = $u->getAllNews()) { $sl = 0;?>
	<table style="border: 1px solid;width: 100%; margin: 3px; padding: 3px; border-collapse: collapse;text-align: center;">
		<caption style="background-color:red;color: green; font-weight: bold;font-size: 33px;">User List</caption>
		<tr style="border: 1px solid">
			<th style="border: 1px solid" >sl</th>
			<th style="border: 1px solid">News</th>
			<th style="border: 1px solid">Action</th>
		</tr>
		<?php foreach ($user as $usr): ?>
		<tr>
			<td style="border: 1px solid"><?= ++$sl; ?></td>
			<td style="border: 1px solid"><?= $usr['news']; ?></td>
			<td style="border: 1px solid"><a href="deletenews.php?id=<?= $usr['id'] ?>">Delete</a></td>
		<?php endforeach ?>
		
	</table>
<?php }?>