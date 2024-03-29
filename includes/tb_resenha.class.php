<?php
include 'MySQLDAO.php';
include 'Security.php';

/**
 * Definition of Class Tb_resenha
 * This class represents a data access object for a database table, it has been automatically
 * generated by Eclipse PHP Class Generator plug-in [https://sourceforge.net/projects/phpclgenerator/]
 * Template name: PHP class generator default template
 * Template filename: /ch/sahits/phpclassgenerator/templates/defaultTemplate.xml
 * Template version: 1.0
 */
class Tb_resenha {

private $dao = null;
private $i = 1;
private $tbResenhaId  = 0;
private $tbResenhaIdusuario;
private $tbResenhaIdlivro;
private $tbResenhaDt;
private $tbResenhaResenha;


/**
 * Retrieves the value from the field tb_resenha_id
 * @return String with the value of the field
 */
public function getTbResenhaId(){
	return $this->tbResenhaId;
}

/**
 * Retrieves the value from the field tb_resenha_idusuario
 * @return String with the value of the field
 */
public function getTbResenhaIdusuario(){
	return $this->tbResenhaIdusuario;
}

/**
 * Retrieves the value from the field tb_resenha_idlivro
 * @return String with the value of the field
 */
public function getTbResenhaIdlivro(){
	return $this->tbResenhaIdlivro;
}

/**
 * Retrieves the value from the field tb_resenha_dt
 * @return String with the value of the field
 */
public function getTbResenhaDt(){
	return $this->tbResenhaDt;
}

/**
 * Retrieves the value from the field tb_resenha_resenha
 * @return String with the value of the field
 */
public function getTbResenhaResenha(){
	return $this->tbResenhaResenha;
}

/**
 * Set the value from the field tb_resenha_id
 * @param tbResenhaId String with the value for the field
 */
public function setTbResenhaId($tbResenhaId){
	$this->tbResenhaId = $tbResenhaId;
}

/**
 * Set the value from the field tb_resenha_idusuario
 * @param tbResenhaIdusuario String with the value for the field
 */
public function setTbResenhaIdusuario($tbResenhaIdusuario){
	$this->tbResenhaIdusuario = $tbResenhaIdusuario;
}

/**
 * Set the value from the field tb_resenha_idlivro
 * @param tbResenhaIdlivro String with the value for the field
 */
public function setTbResenhaIdlivro($tbResenhaIdlivro){
	$this->tbResenhaIdlivro = $tbResenhaIdlivro;
}

/**
 * Set the value from the field tb_resenha_dt
 * @param tbResenhaDt String with the value for the field
 */
public function setTbResenhaDt($tbResenhaDt){
	$this->tbResenhaDt = $tbResenhaDt;
}

/**
 * Set the value from the field tb_resenha_resenha
 * @param tbResenhaResenha String with the value for the field
 */
public function setTbResenhaResenha($tbResenhaResenha){
	$this->tbResenhaResenha = $tbResenhaResenha;
}

/**
 * Default constructor
 * @param value some value
 */
function __construct($value){

		$this->dao = new MySQLDao("tb_resenha");
		
}

/**
 * Initialize the business object with data read from the DB.
 * @param row array containing one read record.
 */
private function init($row){
	$this->tbResenhaId = $row['tb_resenha_id'];
	$this->tbResenhaIdusuario = $row['tb_resenha_idusuario'];
	$this->tbResenhaIdlivro = $row['tb_resenha_idlivro'];
	$this->tbResenhaDt = $row['tb_resenha_dt'];
	$this->tbResenhaResenha = $row['tb_resenha_resenha'];
}

/**
 * Returns the string representation of this obbject
 * @return String repesentation ofTb_resenha
 */
public function toString(){
	$s = '';
	$s .= 'tb_resenha_id: '.$this->tbResenhaId;
	$s .= 'tb_resenha_idusuario: '.$this->tbResenhaIdusuario;
	$s .= 'tb_resenha_idlivro: '.$this->tbResenhaIdlivro;
	$s .= 'tb_resenha_dt: '.$this->tbResenhaDt;
	$s .= 'tb_resenha_resenha: '.$this->tbResenhaResenha;
	return $s;
}

/**
 * Returns a HTML representation of this obbject using DIVs for formatting via css
 * @return String HTML representation of the Tb_resenha object
 */
public function toHTMLString(){
	$htmlCode = "<div class=\"tb_resenha\">\n";
	$htmlCode .= '	<div class="tb_resenha_tb_resenha_id">'.$this->tbResenhaId."</div>\n";
	$htmlCode .= '	<div class="tb_resenha_tb_resenha_idusuario">'.$this->tbResenhaIdusuario."</div>\n";
	$htmlCode .= '	<div class="tb_resenha_tb_resenha_idlivro">'.$this->tbResenhaIdlivro."</div>\n";
	$htmlCode .= '	<div class="tb_resenha_tb_resenha_dt">'.$this->tbResenhaDt."</div>\n";
	$htmlCode .= '	<div class="tb_resenha_tb_resenha_resenha">'.$this->tbResenhaResenha."</div>\n";
	$htmlCode .= "</div>\n";
	return $htmlCode;
}


public function loadAll(){

	$tb_resenha = new Tb_resenha();
	$rows = $tb_resenha->dao->getData("");
	$tb_resenhas = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_resenha();
		$d->init($rows[$index]);
		array_push($tb_resenhas,$d);
	}
	return $tb_resenhas;
		
}

/**
 * 
 * Load the Tb_resenha uniquely by its primary key.
 * @param tbResenhaId primary key
 * @return Instance of {@link Tb_resenha}
 */
static function loadUnique($tbResenhaId){

	$tb_resenha = new Tb_resenha();
	$rows = $tb_resenha->dao->getData("`tb_resenha_id`='$tbResenhaId'");
	$tb_resenha->init($rows[0]);
	return $tb_resenha;
  	  	
}

/**
 * 
 * Load all records of Tb_resenha uniquely by its foreign keys:
 * tb_resenha_idusuario
 * @param tbResenhaIdusuario foreign key
 * @return array of Instance of {@link Tb_resenha}
 */
public static function loadByFKTb_resenha_idusuario($tbResenhaIdusuario){

	$tb_resenha = new Tb_resenha();
	$rows = $tb_resenha->dao->getData("`tb_resenha_idusuario`='$tbResenhaIdusuario'");
	$tb_resenhas = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_resenha();
		$d->init($rows[$index]);
		array_push($tb_resenhas,$d);
	}
	return $tb_resenhas;
 	  	
}

/**
 * 
 * Load all records of Tb_resenha uniquely by its foreign keys:
 * tb_resenha_idlivro
 * @param tbResenhaIdlivro foreign key
 * @return array of Instance of {@link Tb_resenha}
 */
public static function loadByFKTb_resenha_idlivro($tbResenhaIdlivro){

	$tb_resenha = new Tb_resenha();
	$rows = $tb_resenha->dao->getData("`tb_resenha_idlivro`='$tbResenhaIdlivro'");
	$tb_resenhas = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_resenha();
		$d->init($rows[$index]);
		array_push($tb_resenhas,$d);
	}
	return $tb_resenhas;
 	  	
}

/**
 * Insert this object into the DB
 * @return new id (auto increment value) genereated
 */
private function insert(){

	$list = array("tb_resenha_id"=>$this->tbResenhaId, "tb_resenha_idusuario"=>$this->tbResenhaIdusuario, "tb_resenha_idlivro"=>$this->tbResenhaIdlivro, "tb_resenha_dt"=>$this->tbResenhaDt, "tb_resenha_resenha"=>$this->tbResenhaResenha);
	return $this->dao->insertRecord($list);	
	
}

/**
 * Update this object into the DB
 * @return number of updated records
 */
private function update(){

	$list = array("tb_resenha_id"=>$this->tbResenhaId, "tb_resenha_idusuario"=>$this->tbResenhaIdusuario, "tb_resenha_idlivro"=>$this->tbResenhaIdlivro, "tb_resenha_dt"=>$this->tbResenhaDt, "tb_resenha_resenha"=>$this->tbResenhaResenha);
	$where = "`tb_resenha_id`='$tbResenhaId'";
	return $this->dao->updateRecord($list,$where);	
	
}

/**
 * Initialize the business object with data read from the DB.
 */
private function initPOST(){
	if (isset($_POST['tbResenhaId'])){
		$this->tbResenhaId = $_POST['tbResenhaId'];
	}
	if (isset($_POST['tbResenhaIdusuario'])){
		$this->tbResenhaIdusuario = $_POST['tbResenhaIdusuario'];
	}
	if (isset($_POST['tbResenhaIdlivro'])){
		$this->tbResenhaIdlivro = $_POST['tbResenhaIdlivro'];
	}
	if (isset($_POST['tbResenhaDt'])){
		$this->tbResenhaDt = $_POST['tbResenhaDt'];
	}
	if (isset($_POST['tbResenhaResenha'])){
		$this->tbResenhaResenha = $_POST['tbResenhaResenha'];
	}
}

/**
 * Initialize the business object with data read from the DB.
 */
private function initGET(){
	if (isset($_GET['tbResenhaId'])){
		$this->tbResenhaId = $_GET['tbResenhaId'];
	}
	if (isset($_GET['tbResenhaIdusuario'])){
		$this->tbResenhaIdusuario = $_GET['tbResenhaIdusuario'];
	}
	if (isset($_GET['tbResenhaIdlivro'])){
		$this->tbResenhaIdlivro = $_GET['tbResenhaIdlivro'];
	}
	if (isset($_GET['tbResenhaDt'])){
		$this->tbResenhaDt = $_GET['tbResenhaDt'];
	}
	if (isset($_GET['tbResenhaResenha'])){
		$this->tbResenhaResenha = $_GET['tbResenhaResenha'];
	}
}
}
?>