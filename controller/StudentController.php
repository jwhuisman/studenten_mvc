<?php

require(ROOT . "model/StudentModel.php");

function index()
{
	$students = getAllStudents();
	render("student/index", array(
		'students' => $students
	));
}

function create(){
 	if($_SERVER["REQUEST_METHOD"] == "POST"){
 		$data = array(
 			'student_number' => $_POST["student_number"],
 			'name' => $_POST["name"]
 		);
 		createStudent($data);
 		header('Location: /games/student/');
	}
	render("student/create");
}

function delete($id){
	deleteStudent($id);
	header('Location: /games/student/');
}

function edit($id){

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		if(!empty($_POST["name"])){
			$data = array(
				'id' => $id,
				'student_number' => $_POST["student_number"],
				'name' => $_POST["name"]
			);
			updateStudent($data);
			header('Location: /games/student/');
		} else {
			$errormsg = "Dit is een verplicht veld";
		}

	}

	$student = getStudent($id);

	render("student/update", array(
		'student' => $student,
		'errormsg' => isset($errormsg) ? $errormsg : ""
	));
}