<?php
include 'MySQLDAO.php';
include 'Security.php';

/**
 * Definition of Class Tb_autor
 * This class represents a data access object for a database table, it has been automatically
 * generated by Eclipse PHP Class Generator plug-in [https://sourceforge.net/projects/phpclgenerator/]
 * Template name: PHP class generator default template
 * Template filename: /ch/sahits/phpclassgenerator/templates/defaultTemplate.xml
 * Template version: 1.0
 */
class Tb_autor {

private $dao = null;
private $i = 1;
private $tbAutorId  = 0;
private $tbAutorNome;
private $tbAutorSobrenome;
private $tbAutorDtnasc;
private $tbAutorCidadenascimento;
private $tbAutorCidadevive;
private $tbAutorApresentacaoPessoal;
private $tbAutorObs;


/**
 * Retrieves the value from the field tb_autor_id
 * @return String with the value of the field
 */
public function getTbAutorId(){
	return $this->tbAutorId;
}

/**
 * Retrieves the value from the field tb_autor_nome
 * @return String with the value of the field
 */
public function getTbAutorNome(){
	return $this->tbAutorNome;
}

/**
 * Retrieves the value from the field tb_autor_sobrenome
 * @return String with the value of the field
 */
public function getTbAutorSobrenome(){
	return $this->tbAutorSobrenome;
}

/**
 * Retrieves the value from the field tb_autor_dtnasc
 * @return String with the value of the field
 */
public function getTbAutorDtnasc(){
	return $this->tbAutorDtnasc;
}

/**
 * Retrieves the value from the field tb_autor_cidadenascimento
 * @return String with the value of the field
 */
public function getTbAutorCidadenascimento(){
	return $this->tbAutorCidadenascimento;
}

/**
 * Retrieves the value from the field tb_autor_cidadevive
 * @return String with the value of the field
 */
public function getTbAutorCidadevive(){
	return $this->tbAutorCidadevive;
}

/**
 * Retrieves the value from the field tb_autor_apresentacao_pessoal
 * @return String with the value of the field
 */
public function getTbAutorApresentacaoPessoal(){
	return $this->tbAutorApresentacaoPessoal;
}

/**
 * Retrieves the value from the field tb_autor_obs
 * @return String with the value of the field
 */
public function getTbAutorObs(){
	return $this->tbAutorObs;
}

/**
 * Set the value from the field tb_autor_id
 * @param tbAutorId String with the value for the field
 */
public function setTbAutorId($tbAutorId){
	$this->tbAutorId = $tbAutorId;
}

/**
 * Set the value from the field tb_autor_nome
 * @param tbAutorNome String with the value for the field
 */
public function setTbAutorNome($tbAutorNome){
	$this->tbAutorNome = $tbAutorNome;
}

/**
 * Set the value from the field tb_autor_sobrenome
 * @param tbAutorSobrenome String with the value for the field
 */
public function setTbAutorSobrenome($tbAutorSobrenome){
	$this->tbAutorSobrenome = $tbAutorSobrenome;
}

/**
 * Set the value from the field tb_autor_dtnasc
 * @param tbAutorDtnasc String with the value for the field
 */
public function setTbAutorDtnasc($tbAutorDtnasc){
	$this->tbAutorDtnasc = $tbAutorDtnasc;
}

/**
 * Set the value from the field tb_autor_cidadenascimento
 * @param tbAutorCidadenascimento String with the value for the field
 */
public function setTbAutorCidadenascimento($tbAutorCidadenascimento){
	$this->tbAutorCidadenascimento = $tbAutorCidadenascimento;
}

/**
 * Set the value from the field tb_autor_cidadevive
 * @param tbAutorCidadevive String with the value for the field
 */
public function setTbAutorCidadevive($tbAutorCidadevive){
	$this->tbAutorCidadevive = $tbAutorCidadevive;
}

/**
 * Set the value from the field tb_autor_apresentacao_pessoal
 * @param tbAutorApresentacaoPessoal String with the value for the field
 */
public function setTbAutorApresentacaoPessoal($tbAutorApresentacaoPessoal){
	$this->tbAutorApresentacaoPessoal = $tbAutorApresentacaoPessoal;
}

/**
 * Set the value from the field tb_autor_obs
 * @param tbAutorObs String with the value for the field
 */
public function setTbAutorObs($tbAutorObs){
	$this->tbAutorObs = $tbAutorObs;
}

/**
 * Default constructor
 * @param value some value
 */
function __construct($value){

		$this->dao = new MySQLDao("tb_autor");
		
}

/**
 * Initialize the business object with data read from the DB.
 * @param row array containing one read record.
 */
private function init($row){
	$this->tbAutorId = $row['tb_autor_id'];
	$this->tbAutorNome = $row['tb_autor_nome'];
	$this->tbAutorSobrenome = $row['tb_autor_sobrenome'];
	$this->tbAutorDtnasc = $row['tb_autor_dtnasc'];
	$this->tbAutorCidadenascimento = $row['tb_autor_cidadenascimento'];
	$this->tbAutorCidadevive = $row['tb_autor_cidadevive'];
	$this->tbAutorApresentacaoPessoal = $row['tb_autor_apresentacao_pessoal'];
	$this->tbAutorObs = $row['tb_autor_obs'];
}

/**
 * Returns the string representation of this obbject
 * @return String repesentation ofTb_autor
 */
public function toString(){
	$s = '';
	$s .= 'tb_autor_id: '.$this->tbAutorId;
	$s .= 'tb_autor_nome: '.$this->tbAutorNome;
	$s .= 'tb_autor_sobrenome: '.$this->tbAutorSobrenome;
	$s .= 'tb_autor_dtnasc: '.$this->tbAutorDtnasc;
	$s .= 'tb_autor_cidadenascimento: '.$this->tbAutorCidadenascimento;
	$s .= 'tb_autor_cidadevive: '.$this->tbAutorCidadevive;
	$s .= 'tb_autor_apresentacao_pessoal: '.$this->tbAutorApresentacaoPessoal;
	$s .= 'tb_autor_obs: '.$this->tbAutorObs;
	return $s;
}

/**
 * Returns a HTML representation of this obbject using DIVs for formatting via css
 * @return String HTML representation of the Tb_autor object
 */
public function toHTMLString(){
	$htmlCode = "<div class=\"tb_autor\">\n";
	$htmlCode .= '	<div class="tb_autor_tb_autor_id">'.$this->tbAutorId."</div>\n";
	$htmlCode .= '	<div class="tb_autor_tb_autor_nome">'.$this->tbAutorNome."</div>\n";
	$htmlCode .= '	<div class="tb_autor_tb_autor_sobrenome">'.$this->tbAutorSobrenome."</div>\n";
	$htmlCode .= '	<div class="tb_autor_tb_autor_dtnasc">'.$this->tbAutorDtnasc."</div>\n";
	$htmlCode .= '	<div class="tb_autor_tb_autor_cidadenascimento">'.$this->tbAutorCidadenascimento."</div>\n";
	$htmlCode .= '	<div class="tb_autor_tb_autor_cidadevive">'.$this->tbAutorCidadevive."</div>\n";
	$htmlCode .= '	<div class="tb_autor_tb_autor_apresentacao_pessoal">'.$this->tbAutorApresentacaoPessoal."</div>\n";
	$htmlCode .= '	<div class="tb_autor_tb_autor_obs">'.$this->tbAutorObs."</div>\n";
	$htmlCode .= "</div>\n";
	return $htmlCode;
}


public function loadAll(){

	$tb_autor = new Tb_autor();
	$rows = $tb_autor->dao->getData("");
	$tb_autors = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_autor();
		$d->init($rows[$index]);
		array_push($tb_autors,$d);
	}
	return $tb_autors;
		
}

/**
 * 
 * Load the Tb_autor uniquely by its primary key.
 * @param tbAutorId primary key
 * @return Instance of {@link Tb_autor}
 */
static function loadUnique($tbAutorId){

	$tb_autor = new Tb_autor();
	$rows = $tb_autor->dao->getData("`tb_autor_id`='$tbAutorId'");
	$tb_autor->init($rows[0]);
	return $tb_autor;
  	  	
}

/**
 * 
 * Load all records of Tb_autor uniquely by its foreign keys:
 * tb_autor_cidadenascimento
 * @param tbAutorCidadenascimento foreign key
 * @return array of Instance of {@link Tb_autor}
 */
public static function loadByFKTb_autor_cidadenascimento($tbAutorCidadenascimento){

	$tb_autor = new Tb_autor();
	$rows = $tb_autor->dao->getData("`tb_autor_cidadenascimento`='$tbAutorCidadenascimento'");
	$tb_autors = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_autor();
		$d->init($rows[$index]);
		array_push($tb_autors,$d);
	}
	return $tb_autors;
 	  	
}

/**
 * 
 * Load all records of Tb_autor uniquely by its foreign keys:
 * tb_autor_cidadevive
 * @param tbAutorCidadevive foreign key
 * @return array of Instance of {@link Tb_autor}
 */
public static function loadByFKTb_autor_cidadevive($tbAutorCidadevive){

	$tb_autor = new Tb_autor();
	$rows = $tb_autor->dao->getData("`tb_autor_cidadevive`='$tbAutorCidadevive'");
	$tb_autors = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_autor();
		$d->init($rows[$index]);
		array_push($tb_autors,$d);
	}
	return $tb_autors;
 	  	
}

/**
 * Insert this object into the DB
 * @return new id (auto increment value) genereated
 */
private function insert(){

	$list = array("tb_autor_id"=>$this->tbAutorId, "tb_autor_nome"=>$this->tbAutorNome, "tb_autor_sobrenome"=>$this->tbAutorSobrenome, "tb_autor_dtnasc"=>$this->tbAutorDtnasc, "tb_autor_cidadenascimento"=>$this->tbAutorCidadenascimento, "tb_autor_cidadevive"=>$this->tbAutorCidadevive, "tb_autor_apresentacao_pessoal"=>$this->tbAutorApresentacaoPessoal, "tb_autor_obs"=>$this->tbAutorObs);
	return $this->dao->insertRecord($list);	
	
}

/**
 * Update this object into the DB
 * @return number of updated records
 */
private function update(){

	$list = array("tb_autor_id"=>$this->tbAutorId, "tb_autor_nome"=>$this->tbAutorNome, "tb_autor_sobrenome"=>$this->tbAutorSobrenome, "tb_autor_dtnasc"=>$this->tbAutorDtnasc, "tb_autor_cidadenascimento"=>$this->tbAutorCidadenascimento, "tb_autor_cidadevive"=>$this->tbAutorCidadevive, "tb_autor_apresentacao_pessoal"=>$this->tbAutorApresentacaoPessoal, "tb_autor_obs"=>$this->tbAutorObs);
	$where = "`tb_autor_id`='$tbAutorId'";
	return $this->dao->updateRecord($list,$where);	
	
}

/**
 * Initialize the business object with data read from the DB.
 */
private function initPOST(){
	if (isset($_POST['tbAutorId'])){
		$this->tbAutorId = $_POST['tbAutorId'];
	}
	if (isset($_POST['tbAutorNome'])){
		$this->tbAutorNome = $_POST['tbAutorNome'];
	}
	if (isset($_POST['tbAutorSobrenome'])){
		$this->tbAutorSobrenome = $_POST['tbAutorSobrenome'];
	}
	if (isset($_POST['tbAutorDtnasc'])){
		$this->tbAutorDtnasc = $_POST['tbAutorDtnasc'];
	}
	if (isset($_POST['tbAutorCidadenascimento'])){
		$this->tbAutorCidadenascimento = $_POST['tbAutorCidadenascimento'];
	}
	if (isset($_POST['tbAutorCidadevive'])){
		$this->tbAutorCidadevive = $_POST['tbAutorCidadevive'];
	}
	if (isset($_POST['tbAutorApresentacaoPessoal'])){
		$this->tbAutorApresentacaoPessoal = $_POST['tbAutorApresentacaoPessoal'];
	}
	if (isset($_POST['tbAutorObs'])){
		$this->tbAutorObs = $_POST['tbAutorObs'];
	}
}

/**
 * Initialize the business object with data read from the DB.
 */
private function initGET(){
	if (isset($_GET['tbAutorId'])){
		$this->tbAutorId = $_GET['tbAutorId'];
	}
	if (isset($_GET['tbAutorNome'])){
		$this->tbAutorNome = $_GET['tbAutorNome'];
	}
	if (isset($_GET['tbAutorSobrenome'])){
		$this->tbAutorSobrenome = $_GET['tbAutorSobrenome'];
	}
	if (isset($_GET['tbAutorDtnasc'])){
		$this->tbAutorDtnasc = $_GET['tbAutorDtnasc'];
	}
	if (isset($_GET['tbAutorCidadenascimento'])){
		$this->tbAutorCidadenascimento = $_GET['tbAutorCidadenascimento'];
	}
	if (isset($_GET['tbAutorCidadevive'])){
		$this->tbAutorCidadevive = $_GET['tbAutorCidadevive'];
	}
	if (isset($_GET['tbAutorApresentacaoPessoal'])){
		$this->tbAutorApresentacaoPessoal = $_GET['tbAutorApresentacaoPessoal'];
	}
	if (isset($_GET['tbAutorObs'])){
		$this->tbAutorObs = $_GET['tbAutorObs'];
	}
}
}
?>