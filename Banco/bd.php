<?php
// Conexão
try {
	$bd = new PDO("mysql:dbname=Fast_shopping;host=localhost","root","");
} catch (PDOException $e) {
	
	echo "ERRO no banco: ".$e->getMessage();

} catch(Exception $e) {

	echo "ERRO: ".$e->getMessage();

}
// ----------INSERT----------
// $resi = $bd->prepare("INSERT INTO usuario(Nome, email ,Senha) VALUES (:n, :e, :s)");
// $resi->bindValue(":n","Leonardo");
// $resi->bindValue(":e","teste@teste");
// $resi->bindValue(":s","");
// $resi->execute();

// ----------Delete----------
/*$resd = $bd->prepare("DELETE FROM usuario where id_Usuario = :id");
$id = 2;
$resd->bindValue(":id",$id);
$resd->execute();*/

// ----------uPDATE----------
// $resu = $bd->prepare("UPDATE usuario SET email = :e where id_Usuario = :id");
// $resu->bindValue(":e","Leozinn@consegui");
// $resu->bindValue(":id",1);
// $resu->execute();

// ----------SELECT----------
$ress = $bd->prepare("SELECT * FROM usuario WHERE id_Usuario = :id");
$ress->bindValue(":id",11);
$ress->execute();
$resultado = $ress->fetch(PDO::FETCH_ASSOC);
foreach ($resultado as $key => $value) {
	echo $key.": ".$value."<br>";
}
?>