<?php if (isset($contacts)) { ?>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone Number</th>
			<?php if (isset($company)) { ?>
			<th>Company ID</th>
			<th>Company Name</th>
			<th>Comapny Addess</th>
			<?php } ?>
		</tr>
	</thead>

	<tbody>
	<?php foreach ($contacts as $contact) { ?>
		<tr>
			<td><?=$contact->id?></td>
			<td><?=$contact->first_name?></td>
			<td><?=$contact->last_name?></td>
			<td><?=$contact->phone_number?></td>
			<?php if (isset($company)) { ?>
			<td><?=$contact->company->id?></td>
			<td><?=$contact->company->company_name?></td>
			<td><?=$contact->company->address?></td>
			<?php } ?>
		</tr>
	<?php } ?>
	</tbody>
</table>

<?php } else {
	echo "no available data";
}
?>