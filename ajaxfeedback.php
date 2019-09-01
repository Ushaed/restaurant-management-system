<?php
include 'lib/user.php';
$u = new User();
if ($user = $u->getAllFeedback()) { $sl = 0;?>
	<table style="border: 1px solid;width: 100%; margin: 3px; padding: 3px; border-collapse: collapse;text-align: center;">
		<caption style="background-color:red;color: green; font-weight: bold;font-size: 33px;">Feed Back From User</caption>
		<tr style="border: 1px solid">
			<th style="border: 1px solid" >sl</th>
			<th style="border: 1px solid">Name</th>
			<th style="border: 1px solid">Email</th>
			<th style="border: 1px solid">Contact</th>
			<th style="border: 1px solid">Message</th>
		</tr>
		<?php foreach ($user as $usr): ?>
		<tr>
			<td style="border: 1px solid"><?= ++$sl; ?></td>
			<td style="border: 1px solid"><?= $usr['name']; ?></td>
			<td style="border: 1px solid"><?= $usr['email']; ?></td>
			<td style="border: 1px solid"><?= $usr['contact']; ?></td>
			<td style="border: 1px solid"><?= $usr['message']; ?></td>
		</tr>
		<?php endforeach ?>
		
	</table>
<?php }?>