<div class="container">


	<table border="1">
		<tr>
			<th>#</th>
			<th>Naam</th>
		</tr>
		
		<?php
			foreach($students as $student){
		?>

		<tr>
			<td><?=$student["student_number"]?></td>
			<td><?=$student["name"]?></td>
			<td><a href="/games/student/edit/<?=$student["id"]?>">Bewerk</a> <a href="/games/student/delete/<?=$student["id"]?>">Verwijder</a></td>
		</tr>

		<?php } ?>
		

		


	</table>
	<a href="/games/student/create">Nieuwe student</a>
</div>