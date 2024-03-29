<?php
include 'MySQLDAO.php';
include 'Security.php';

/**
 * Definition of Class Tb_usuario
 * This class represents a data access object for a database table, it has been automatically
 * generated by Eclipse PHP Class Generator plug-in [https://sourceforge.net/projects/phpclgenerator/]
 * Template name: PHP class generator default template
 * Template filename: /ch/sahits/phpclassgenerator/templates/defaultTemplate.xml
 * Template version: 1.0
 */
class Tb_usuario {

private $dao = null;
private $i = 1;
private $tbUsuarioId  = 0;
private $tbUsuarioLogin;
private $tbUsuarioNome;
private $tbUsuarioSobrenome;
private $tbUsuarioDtnasc;
private $tbUsuarioDtregistro;
private $tbUsuarioPais;
private $tbUsuarioEstado;
private $tbUsuarioCidade;


/**
 * Retrieves the value from the field tb_usuario_id
 * @return String with the value of the field
 */
public function getTbUsuarioId(){
	return $this->tbUsuarioId;
}

/**
 * Retrieves the value from the field tb_usuario_login
 * @return String with the value of the field
 */
public function getTbUsuarioLogin(){
	return $this->tbUsuarioLogin;
}

/**
 * Retrieves the value from the field tb_usuario_nome
 * @return String with the value of the field
 */
public function getTbUsuarioNome(){
	return $this->tbUsuarioNome;
}

/**
 * Retrieves the value from the field tb_usuario_sobrenome
 * @return String with the value of the field
 */
public function getTbUsuarioSobrenome(){
	return $this->tbUsuarioSobrenome;
}

/**
 * Retrieves the value from the field tb_usuario_dtnasc
 * @return String with the value of the field
 */
public function getTbUsuarioDtnasc(){
	return $this->tbUsuarioDtnasc;
}

/**
 * Retrieves the value from the field tb_usuario_dtregistro
 * @return String with the value of the field
 */
public function getTbUsuarioDtregistro(){
	return $this->tbUsuarioDtregistro;
}

/**
 * Retrieves the value from the field tb_usuario_pais
 * @return String with the value of the field
 */
public function getTbUsuarioPais(){
	return $this->tbUsuarioPais;
}

/**
 * Retrieves the value from the field tb_usuario_estado
 * @return String with the value of the field
 */
public function getTbUsuarioEstado(){
	return $this->tbUsuarioEstado;
}

/**
 * Retrieves the value from the field tb_usuario_cidade
 * @return String with the value of the field
 */
public function getTbUsuarioCidade(){
	return $this->tbUsuarioCidade;
}

/**
 * Set the value from the field tb_usuario_id
 * @param tbUsuarioId String with the value for the field
 */
public function setTbUsuarioId($tbUsuarioId){
	$this->tbUsuarioId = $tbUsuarioId;
}

/**
 * Set the value from the field tb_usuario_login
 * @param tbUsuarioLogin String with the value for the field
 */
public function setTbUsuarioLogin($tbUsuarioLogin){
	$this->tbUsuarioLogin = $tbUsuarioLogin;
}

/**
 * Set the value from the field tb_usuario_nome
 * @param tbUsuarioNome String with the value for the field
 */
public function setTbUsuarioNome($tbUsuarioNome){
	$this->tbUsuarioNome = $tbUsuarioNome;
}

/**
 * Set the value from the field tb_usuario_sobrenome
 * @param tbUsuarioSobrenome String with the value for the field
 */
public function setTbUsuarioSobrenome($tbUsuarioSobrenome){
	$this->tbUsuarioSobrenome = $tbUsuarioSobrenome;
}

/**
 * Set the value from the field tb_usuario_dtnasc
 * @param tbUsuarioDtnasc String with the value for the field
 */
public function setTbUsuarioDtnasc($tbUsuarioDtnasc){
	$this->tbUsuarioDtnasc = $tbUsuarioDtnasc;
}

/**
 * Set the value from the field tb_usuario_dtregistro
 * @param tbUsuarioDtregistro String with the value for the field
 */
public function setTbUsuarioDtregistro($tbUsuarioDtregistro){
	$this->tbUsuarioDtregistro = $tbUsuarioDtregistro;
}

/**
 * Set the value from the field tb_usuario_pais
 * @param tbUsuarioPais String with the value for the field
 */
public function setTbUsuarioPais($tbUsuarioPais){
	$this->tbUsuarioPais = $tbUsuarioPais;
}

/**
 * Set the value from the field tb_usuario_estado
 * @param tbUsuarioEstado String with the value for the field
 */
public function setTbUsuarioEstado($tbUsuarioEstado){
	$this->tbUsuarioEstado = $tbUsuarioEstado;
}

/**
 * Set the value from the field tb_usuario_cidade
 * @param tbUsuarioCidade String with the value for the field
 */
public function setTbUsuarioCidade($tbUsuarioCidade){
	$this->tbUsuarioCidade = $tbUsuarioCidade;
}

/**
 * Default constructor
 * @param value some value
 */
function __construct($value){

		$this->dao = new MySQLDao("tb_usuario");
		
}

/**
 * Initialize the business object with data read from the DB.
 * @param row array containing one read record.
 */
private function init($row){
	$this->tbUsuarioId = $row['tb_usuario_id'];
	$this->tbUsuarioLogin = $row['tb_usuario_login'];
	$this->tbUsuarioNome = $row['tb_usuario_nome'];
	$this->tbUsuarioSobrenome = $row['tb_usuario_sobrenome'];
	$this->tbUsuarioDtnasc = $row['tb_usuario_dtnasc'];
	$this->tbUsuarioDtregistro = $row['tb_usuario_dtregistro'];
	$this->tbUsuarioPais = $row['tb_usuario_pais'];
	$this->tbUsuarioEstado = $row['tb_usuario_estado'];
	$this->tbUsuarioCidade = $row['tb_usuario_cidade'];
}

/**
 * Returns the string representation of this obbject
 * @return String repesentation ofTb_usuario
 */
public function toString(){
	$s = '';
	$s .= 'tb_usuario_id: '.$this->tbUsuarioId;
	$s .= 'tb_usuario_login: '.$this->tbUsuarioLogin;
	$s .= 'tb_usuario_nome: '.$this->tbUsuarioNome;
	$s .= 'tb_usuario_sobrenome: '.$this->tbUsuarioSobrenome;
	$s .= 'tb_usuario_dtnasc: '.$this->tbUsuarioDtnasc;
	$s .= 'tb_usuario_dtregistro: '.$this->tbUsuarioDtregistro;
	$s .= 'tb_usuario_pais: '.$this->tbUsuarioPais;
	$s .= 'tb_usuario_estado: '.$this->tbUsuarioEstado;
	$s .= 'tb_usuario_cidade: '.$this->tbUsuarioCidade;
	return $s;
}

/**
 * Returns a HTML representation of this obbject using DIVs for formatting via css
 * @return String HTML representation of the Tb_usuario object
 */
public function toHTMLString(){
	$htmlCode = "<div class=\"tb_usuario\">\n";
	$htmlCode .= '	<div class="tb_usuario_tb_usuario_id">'.$this->tbUsuarioId."</div>\n";
	$htmlCode .= '	<div class="tb_usuario_tb_usuario_login">'.$this->tbUsuarioLogin."</div>\n";
	$htmlCode .= '	<div class="tb_usuario_tb_usuario_nome">'.$this->tbUsuarioNome."</div>\n";
	$htmlCode .= '	<div class="tb_usuario_tb_usuario_sobrenome">'.$this->tbUsuarioSobrenome."</div>\n";
	$htmlCode .= '	<div class="tb_usuario_tb_usuario_dtnasc">'.$this->tbUsuarioDtnasc."</div>\n";
	$htmlCode .= '	<div class="tb_usuario_tb_usuario_dtregistro">'.$this->tbUsuarioDtregistro."</div>\n";
	$htmlCode .= '	<div class="tb_usuario_tb_usuario_pais">'.$this->tbUsuarioPais."</div>\n";
	$htmlCode .= '	<div class="tb_usuario_tb_usuario_estado">'.$this->tbUsuarioEstado."</div>\n";
	$htmlCode .= '	<div class="tb_usuario_tb_usuario_cidade">'.$this->tbUsuarioCidade."</div>\n";
	$htmlCode .= "</div>\n";
	return $htmlCode;
}


public function loadAll(){

	$tb_usuario = new Tb_usuario();
	$rows = $tb_usuario->dao->getData("");
	$tb_usuarios = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_usuario();
		$d->init($rows[$index]);
		array_push($tb_usuarios,$d);
	}
	return $tb_usuarios;
		
}

/**
 * 
 * Load the Tb_usuario uniquely by its primary key.
 * @param tbUsuarioId primary key
 * @return Instance of {@link Tb_usuario}
 */
static function loadUnique($tbUsuarioId){

	$tb_usuario = new Tb_usuario();
	$rows = $tb_usuario->dao->getData("`tb_usuario_id`='$tbUsuarioId'");
	$tb_usuario->init($rows[0]);
	return $tb_usuario;
  	  	
}

/**
 * 
 * Load all records of Tb_usuario uniquely by its foreign keys:
 * tb_usuario_pais
 * @param tbUsuarioPais foreign key
 * @return array of Instance of {@link Tb_usuario}
 */
public static function loadByFKTb_usuario_pais($tbUsuarioPais){

	$tb_usuario = new Tb_usuario();
	$rows = $tb_usuario->dao->getData("`tb_usuario_pais`='$tbUsuarioPais'");
	$tb_usuarios = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_usuario();
		$d->init($rows[$index]);
		array_push($tb_usuarios,$d);
	}
	return $tb_usuarios;
 	  	
}

/**
 * Insert this object into the DB
 * @return new id (auto increment value) genereated
 */
private function insert(){

	$list = array("tb_usuario_id"=>$this->tbUsuarioId, "tb_usuario_login"=>$this->tbUsuarioLogin, "tb_usuario_nome"=>$this->tbUsuarioNome, "tb_usuario_sobrenome"=>$this->tbUsuarioSobrenome, "tb_usuario_dtnasc"=>$this->tbUsuarioDtnasc, "tb_usuario_dtregistro"=>$this->tbUsuarioDtregistro, "tb_usuario_pais"=>$this->tbUsuarioPais, "tb_usuario_estado"=>$this->tbUsuarioEstado, "tb_usuario_cidade"=>$this->tbUsuarioCidade);
	return $this->dao->insertRecord($list);	
	
}

/**
 * Update this object into the DB
 * @return number of updated records
 */
private function update(){

	$list = array("tb_usuario_id"=>$this->tbUsuarioId, "tb_usuario_login"=>$this->tbUsuarioLogin, "tb_usuario_nome"=>$this->tbUsuarioNome, "tb_usuario_sobrenome"=>$this->tbUsuarioSobrenome, "tb_usuario_dtnasc"=>$this->tbUsuarioDtnasc, "tb_usuario_dtregistro"=>$this->tbUsuarioDtregistro, "tb_usuario_pais"=>$this->tbUsuarioPais, "tb_usuario_estado"=>$this->tbUsuarioEstado, "tb_usuario_cidade"=>$this->tbUsuarioCidade);
	$where = "`tb_usuario_id`='$tbUsuarioId'";
	return $this->dao->updateRecord($list,$where);	
	
}

/**
 * Initialize the business object with data read from the DB.
 */
private function initPOST(){
	if (isset($_POST['tbUsuarioId'])){
		$this->tbUsuarioId = $_POST['tbUsuarioId'];
	}
	if (isset($_POST['tbUsuarioLogin'])){
		$this->tbUsuarioLogin = $_POST['tbUsuarioLogin'];
	}
	if (isset($_POST['tbUsuarioNome'])){
		$this->tbUsuarioNome = $_POST['tbUsuarioNome'];
	}
	if (isset($_POST['tbUsuarioSobrenome'])){
		$this->tbUsuarioSobrenome = $_POST['tbUsuarioSobrenome'];
	}
	if (isset($_POST['tbUsuarioDtnasc'])){
		$this->tbUsuarioDtnasc = $_POST['tbUsuarioDtnasc'];
	}
	if (isset($_POST['tbUsuarioDtregistro'])){
		$this->tbUsuarioDtregistro = $_POST['tbUsuarioDtregistro'];
	}
	if (isset($_POST['tbUsuarioPais'])){
		$this->tbUsuarioPais = $_POST['tbUsuarioPais'];
	}
	if (isset($_POST['tbUsuarioEstado'])){
		$this->tbUsuarioEstado = $_POST['tbUsuarioEstado'];
	}
	if (isset($_POST['tbUsuarioCidade'])){
		$this->tbUsuarioCidade = $_POST['tbUsuarioCidade'];
	}
}

/**
 * Initialize the business object with data read from the DB.
 */
private function initGET(){
	if (isset($_GET['tbUsuarioId'])){
		$this->tbUsuarioId = $_GET['tbUsuarioId'];
	}
	if (isset($_GET['tbUsuarioLogin'])){
		$this->tbUsuarioLogin = $_GET['tbUsuarioLogin'];
	}
	if (isset($_GET['tbUsuarioNome'])){
		$this->tbUsuarioNome = $_GET['tbUsuarioNome'];
	}
	if (isset($_GET['tbUsuarioSobrenome'])){
		$this->tbUsuarioSobrenome = $_GET['tbUsuarioSobrenome'];
	}
	if (isset($_GET['tbUsuarioDtnasc'])){
		$this->tbUsuarioDtnasc = $_GET['tbUsuarioDtnasc'];
	}
	if (isset($_GET['tbUsuarioDtregistro'])){
		$this->tbUsuarioDtregistro = $_GET['tbUsuarioDtregistro'];
	}
	if (isset($_GET['tbUsuarioPais'])){
		$this->tbUsuarioPais = $_GET['tbUsuarioPais'];
	}
	if (isset($_GET['tbUsuarioEstado'])){
		$this->tbUsuarioEstado = $_GET['tbUsuarioEstado'];
	}
	if (isset($_GET['tbUsuarioCidade'])){
		$this->tbUsuarioCidade = $_GET['tbUsuarioCidade'];
	}
}
}
?>