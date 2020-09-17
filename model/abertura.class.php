<?php  

class Abertura extends Conexao {

	// add cliente
	public function insertAbertura($abertura, $data) {
		$pdo = parent::get_instance();
		$fields = implode(", ", array_keys($data));
		$values = ":".implode(", :", array_keys($data));
		$sql = "INSERT INTO $abertura ($fields) VALUES ($values)";
		$statement = $pdo->prepare($sql);
		foreach($data as $key => $value) {
			$statement->bindValue(":$key", $value, PDO::PARAM_STR);
		}
		$statement->execute();
	}

	// lista
	 public function listAbertura($abertura) {
	 	$pdo = parent::get_instance();
	 	$sql = "SELECT * FROM $abertura ORDER BY nome ASC";
	 	$statement = $pdo->query($sql);
	 	$statement->execute();

		return $statement->fetchAll();
	 }

	 //deletar abertura
	 public function deleteAbertura($abertura, $id) {
	 	$pdo = parent::get_instance();
	 	$sql = "DELETE FROM $abertura WHERE id = :id";
	 	$statement = $pdo->prepare($sql);
	 	$statement->bindValue(":id", $id);
	 	$statement->execute();
	 }

	 public function getInfo($abertura, $id) {
	 	$pdo = parent::get_instance();
	 	$sql = "SELECT * FROM $abertura WHERE id = :id";
	 	$statement = $pdo->prepare($sql);
	 	$statement->bindValue(":id", $id);
	 	$statement->execute();

	 	return $statement->fetchAll();
	 }


	 //atualizar
	 public function updateAbertura($abertura, $data, $id) {
	 	$pdo = parent::get_instance();
	 	$new_values = "";
	 	foreach($data as $key => $value) {
	 		$new_values .= "$key=:$key, ";
	 	}
	 	$new_values = substr($new_values, 0, -2);
	 	$sql = "UPDATE $abertura SET $new_values WHERE id = :id";
	 	$statement = $pdo->prepare($sql);
	 	foreach($data as $key => $value) {
			$statement->bindValue(":$key", $value, PDO::PARAM_STR);
	 	}
	 	$statement->execute();
	 }

}

?>