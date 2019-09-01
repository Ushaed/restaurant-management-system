<?php
include 'lib/user.php';
$u = new User();
if ($user = $u->getAllStaff()) { $sl = 0;?>
	<table style="border: 1px solid;width: 100%; margin: 3px; padding: 3px; border-collapse: collapse;text-align: center;">
		<caption style="background-color:red;color: green; font-weight: bold;font-size: 33px;">User List</caption>
		<tr style="border: 1px solid">
			<th style="border: 1px solid" >sl</th>
			<th style="border: 1px solid">Name</th>
			<th style="border: 1px solid">Gender</th>
			<th style="border: 1px solid">Contact</th>
			<th style="border: 1px solid">Address</th>
		</tr>
		<?php foreach ($user as $usr): ?>
		<tr>
			<td style="border: 1px solid"><?= ++$sl; ?></td>
			<td style="border: 1px solid"><?= $usr['name']; ?></td>
			<td style="border: 1px solid"><?= $usr['gender']; ?></td>
			<td style="border: 1px solid"><?= $usr['contact']; ?></td>
			<td style="border: 1px solid"><?= $usr['address']; ?></td>
		</tr>
		<?php endforeach ?>
		
	</table>
<?php }?>