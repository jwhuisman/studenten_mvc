<div class="container">
	
	<form method="POST">
		
		<input type="text" name="student_number" placeholder="Student number" value="<?=$student["student_number"]?>">
		<input type="text" name="name" placeholder="Name" value="<?=$student["name"]?>">
		<?=$errormsg?>
		<input type="submit" name="postback" value="Opslaan">

	</form>
	

</div>