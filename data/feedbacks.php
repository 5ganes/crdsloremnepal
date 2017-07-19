<?php
class Feedbacks
{
	function save($firstname, $lastname, $email, $address, $phone, $country, $gender, $comment)
	{
		global $conn;
		$firstname = cleanQuery($firstname);
		$lastname = cleanQuery($lastname);
		$email = cleanQuery($email);
		$address = cleanQuery($address);
		$phone = cleanQuery($phone);
		$country = cleanQuery($country);
		$gender = cleanQuery($gender);
		$comment = cleanQuery($comment);

		$sql = "INSERT INTO feedbacks 
				SET 
					firstname = '$firstname', 
					lastname = '$lastname', 
					email = '$email', 
					address = '$address', 
					phone = '$phone', 
					country = '$country',
					gender = '$gender',
					comment = '$comment',
					onDate = now()";
		// echo $sql; die();
		$conn->exec($sql);
		
		return $conn->insertId();
	}	
	
	function delete($id)
	{  
		global $conn;
		
		$sql = "DELETE FROM feedbacks WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function getAll()
	{
		global $conn;
		
		$sql = "SElECT * FROM feedbacks ORDER BY id DESC";
		$result = $conn->exec($sql);
		
		return $result;
	}

	function getById($id)
	{
		global $conn;
		
		$sql = "SElECT * FROM feedbacks WHERE id = '$id'";
		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		return $row;
	}
}country?>