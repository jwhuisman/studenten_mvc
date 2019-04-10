<?php

function getAllStudents() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM students";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createStudent($student){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO students (`student_number`, `name`) VALUES (:student_number, :name)";
	$query = $db->prepare($sql);
	$query->bindParam(":student_number", $student["student_number"]);
	$query->bindParam(":name", $student["name"]);

	$query->execute();
	$db = null;
}

function deleteStudent($id){
	$db = openDatabaseConnection();
	$sql = "DELETE FROM students WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
}

function updateStudent($student){
	$db = openDatabaseConnection();
	$sql = "UPDATE students SET name = :name, student_number = :student_number WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":student_number", $student["student_number"]);
	$query->bindParam(":name", $student["name"]);
	$query->bindParam(":id", $student["id"]);
	$query->execute();
	$db = null;
}

function getStudent($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM students WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetch();
}