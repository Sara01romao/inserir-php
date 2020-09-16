<?php  

class Manager extends Conexao {

	// add cliente
	public function insertClient($cliente, $data) {
		$pdo = parent::get_instance();
		$fields = implode(", ", array_keys($data));
		$values = ":".implode(", :", array_keys($data));
		$sql = "INSERT INTO $cliente ($fields) VALUES ($values)";
		$statement = $pdo->prepare($sql);
		foreach($data as $key => $value) {
			$statement->bindValue(":$key", $value, PDO::PARAM_STR);
		}
		$statement->execute();
	}

	// lista
	 public function listClient($cliente) {
	 	$pdo = parent::get_instance();
	 	$sql = "SELECT * FROM $cliente ORDER BY nome ASC";
	 	$statement = $pdo->query($sql);
	 	$statement->execute();

		return $statement->fetchAll();
	 }

	 //deletar cliente
	 public function deleteClient($cliente, $id) {
	 	$pdo = parent::get_instance();
	 	$sql = "DELETE FROM $cliente WHERE id = :id";
	 	$statement = $pdo->prepare($sql);
	 	$statement->bindValue(":id", $id);
	 	$statement->execute();
	 }

	 public function getInfo($cliente, $id) {
	 	$pdo = parent::get_instance();
	 	$sql = "SELECT * FROM $cliente WHERE id = :id";
	 	$statement = $pdo->prepare($sql);
	 	$statement->bindValue(":id", $id);
	 	$statement->execute();

	 	return $statement->fetchAll();
	 }


	 //atualizar
	 public function updateClient($cliente, $data, $id) {
	 	$pdo = parent::get_instance();
	 	$new_values = "";
	 	foreach($data as $key => $value) {
	 		$new_values .= "$key=:$key, ";
	 	}
	 	$new_values = substr($new_values, 0, -2);
	 	$sql = "UPDATE $cliente SET $new_values WHERE id = :id";
	 	$statement = $pdo->prepare($sql);
	 	foreach($data as $key => $value) {
			$statement->bindValue(":$key", $value, PDO::PARAM_STR);
	 	}
	 	$statement->execute();
	 }

}

?>