<?php
include 'MySQLDAO.php';
include 'Security.php';

/**
 * Definition of Class Tb_livro
 * This class represents a data access object for a database table, it has been automatically
 * generated by Eclipse PHP Class Generator plug-in [https://sourceforge.net/projects/phpclgenerator/]
 * Template name: PHP class generator default template
 * Template filename: /ch/sahits/phpclassgenerator/templates/defaultTemplate.xml
 * Template version: 1.0
 */
class Tb_livro {

private $dao = null;
private $i = 1;
private $tbLivroId  = 0;
private $tbLivroTitulo;
private $tbLivroSubtitulo;
private $tbLivroTitulooriginal;
private $tbLivroFormato;
private $tbLivroEditora;
private $tbLivroAssunto;
private $tbLivroIsbn;
private $tbLivroIsbn13;
private $tbLivroCodbarras;
private $tbLivroDimensao;
private $tbLivroEdicao;
private $tbLivroAnolancamento;
private $tbLivroNumeropaginas;
private $tbLivroSinopse;
private $tbLivroImgcapa;


/**
 * Retrieves the value from the field tb_livro_id
 * @return String with the value of the field
 */
public function getTbLivroId(){
	return $this->tbLivroId;
}

/**
 * Retrieves the value from the field tb_livro_titulo
 * @return String with the value of the field
 */
public function getTbLivroTitulo(){
	return $this->tbLivroTitulo;
}

/**
 * Retrieves the value from the field tb_livro_subtitulo
 * @return String with the value of the field
 */
public function getTbLivroSubtitulo(){
	return $this->tbLivroSubtitulo;
}

/**
 * Retrieves the value from the field tb_livro_tituloOriginal
 * @return String with the value of the field
 */
public function getTbLivroTitulooriginal(){
	return $this->tbLivroTitulooriginal;
}

/**
 * Retrieves the value from the field tb_livro_formato
 * @return String with the value of the field
 */
public function getTbLivroFormato(){
	return $this->tbLivroFormato;
}

/**
 * Retrieves the value from the field tb_livro_editora
 * @return String with the value of the field
 */
public function getTbLivroEditora(){
	return $this->tbLivroEditora;
}

/**
 * Retrieves the value from the field tb_livro_assunto
 * @return String with the value of the field
 */
public function getTbLivroAssunto(){
	return $this->tbLivroAssunto;
}

/**
 * Retrieves the value from the field tb_livro_ISBN
 * @return String with the value of the field
 */
public function getTbLivroIsbn(){
	return $this->tbLivroIsbn;
}

/**
 * Retrieves the value from the field tb_livro_ISBN13
 * @return String with the value of the field
 */
public function getTbLivroIsbn13(){
	return $this->tbLivroIsbn13;
}

/**
 * Retrieves the value from the field tb_livro_codbarras
 * @return String with the value of the field
 */
public function getTbLivroCodbarras(){
	return $this->tbLivroCodbarras;
}

/**
 * Retrieves the value from the field tb_livro_dimensao
 * @return String with the value of the field
 */
public function getTbLivroDimensao(){
	return $this->tbLivroDimensao;
}

/**
 * Retrieves the value from the field tb_livro_edicao
 * @return String with the value of the field
 */
public function getTbLivroEdicao(){
	return $this->tbLivroEdicao;
}

/**
 * Retrieves the value from the field tb_livro_anoLancamento
 * @return String with the value of the field
 */
public function getTbLivroAnolancamento(){
	return $this->tbLivroAnolancamento;
}

/**
 * Retrieves the value from the field tb_livro_numeroPaginas
 * @return String with the value of the field
 */
public function getTbLivroNumeropaginas(){
	return $this->tbLivroNumeropaginas;
}

/**
 * Retrieves the value from the field tb_livro_sinopse
 * @return String with the value of the field
 */
public function getTbLivroSinopse(){
	return $this->tbLivroSinopse;
}

/**
 * Retrieves the value from the field tb_livro_imgcapa
 * @return String with the value of the field
 */
public function getTbLivroImgcapa(){
	return $this->tbLivroImgcapa;
}

/**
 * Set the value from the field tb_livro_id
 * @param tbLivroId String with the value for the field
 */
public function setTbLivroId($tbLivroId){
	$this->tbLivroId = $tbLivroId;
}

/**
 * Set the value from the field tb_livro_titulo
 * @param tbLivroTitulo String with the value for the field
 */
public function setTbLivroTitulo($tbLivroTitulo){
	$this->tbLivroTitulo = $tbLivroTitulo;
}

/**
 * Set the value from the field tb_livro_subtitulo
 * @param tbLivroSubtitulo String with the value for the field
 */
public function setTbLivroSubtitulo($tbLivroSubtitulo){
	$this->tbLivroSubtitulo = $tbLivroSubtitulo;
}

/**
 * Set the value from the field tb_livro_tituloOriginal
 * @param tbLivroTitulooriginal String with the value for the field
 */
public function setTbLivroTitulooriginal($tbLivroTitulooriginal){
	$this->tbLivroTitulooriginal = $tbLivroTitulooriginal;
}

/**
 * Set the value from the field tb_livro_formato
 * @param tbLivroFormato String with the value for the field
 */
public function setTbLivroFormato($tbLivroFormato){
	$this->tbLivroFormato = $tbLivroFormato;
}

/**
 * Set the value from the field tb_livro_editora
 * @param tbLivroEditora String with the value for the field
 */
public function setTbLivroEditora($tbLivroEditora){
	$this->tbLivroEditora = $tbLivroEditora;
}

/**
 * Set the value from the field tb_livro_assunto
 * @param tbLivroAssunto String with the value for the field
 */
public function setTbLivroAssunto($tbLivroAssunto){
	$this->tbLivroAssunto = $tbLivroAssunto;
}

/**
 * Set the value from the field tb_livro_ISBN
 * @param tbLivroIsbn String with the value for the field
 */
public function setTbLivroIsbn($tbLivroIsbn){
	$this->tbLivroIsbn = $tbLivroIsbn;
}

/**
 * Set the value from the field tb_livro_ISBN13
 * @param tbLivroIsbn13 String with the value for the field
 */
public function setTbLivroIsbn13($tbLivroIsbn13){
	$this->tbLivroIsbn13 = $tbLivroIsbn13;
}

/**
 * Set the value from the field tb_livro_codbarras
 * @param tbLivroCodbarras String with the value for the field
 */
public function setTbLivroCodbarras($tbLivroCodbarras){
	$this->tbLivroCodbarras = $tbLivroCodbarras;
}

/**
 * Set the value from the field tb_livro_dimensao
 * @param tbLivroDimensao String with the value for the field
 */
public function setTbLivroDimensao($tbLivroDimensao){
	$this->tbLivroDimensao = $tbLivroDimensao;
}

/**
 * Set the value from the field tb_livro_edicao
 * @param tbLivroEdicao String with the value for the field
 */
public function setTbLivroEdicao($tbLivroEdicao){
	$this->tbLivroEdicao = $tbLivroEdicao;
}

/**
 * Set the value from the field tb_livro_anoLancamento
 * @param tbLivroAnolancamento String with the value for the field
 */
public function setTbLivroAnolancamento($tbLivroAnolancamento){
	$this->tbLivroAnolancamento = $tbLivroAnolancamento;
}

/**
 * Set the value from the field tb_livro_numeroPaginas
 * @param tbLivroNumeropaginas String with the value for the field
 */
public function setTbLivroNumeropaginas($tbLivroNumeropaginas){
	$this->tbLivroNumeropaginas = $tbLivroNumeropaginas;
}

/**
 * Set the value from the field tb_livro_sinopse
 * @param tbLivroSinopse String with the value for the field
 */
public function setTbLivroSinopse($tbLivroSinopse){
	$this->tbLivroSinopse = $tbLivroSinopse;
}

/**
 * Set the value from the field tb_livro_imgcapa
 * @param tbLivroImgcapa String with the value for the field
 */
public function setTbLivroImgcapa($tbLivroImgcapa){
	$this->tbLivroImgcapa = $tbLivroImgcapa;
}

/**
 * Default constructor
 * @param value some value
 */
function __construct($value){

		$this->dao = new MySQLDao("tb_livro");
		
}

/**
 * Initialize the business object with data read from the DB.
 * @param row array containing one read record.
 */
private function init($row){
	$this->tbLivroId = $row['tb_livro_id'];
	$this->tbLivroTitulo = $row['tb_livro_titulo'];
	$this->tbLivroSubtitulo = $row['tb_livro_subtitulo'];
	$this->tbLivroTitulooriginal = $row['tb_livro_tituloOriginal'];
	$this->tbLivroFormato = $row['tb_livro_formato'];
	$this->tbLivroEditora = $row['tb_livro_editora'];
	$this->tbLivroAssunto = $row['tb_livro_assunto'];
	$this->tbLivroIsbn = $row['tb_livro_ISBN'];
	$this->tbLivroIsbn13 = $row['tb_livro_ISBN13'];
	$this->tbLivroCodbarras = $row['tb_livro_codbarras'];
	$this->tbLivroDimensao = $row['tb_livro_dimensao'];
	$this->tbLivroEdicao = $row['tb_livro_edicao'];
	$this->tbLivroAnolancamento = $row['tb_livro_anoLancamento'];
	$this->tbLivroNumeropaginas = $row['tb_livro_numeroPaginas'];
	$this->tbLivroSinopse = $row['tb_livro_sinopse'];
	$this->tbLivroImgcapa = $row['tb_livro_imgcapa'];
}

/**
 * Returns the string representation of this obbject
 * @return String repesentation ofTb_livro
 */
public function toString(){
	$s = '';
	$s .= 'tb_livro_id: '.$this->tbLivroId;
	$s .= 'tb_livro_titulo: '.$this->tbLivroTitulo;
	$s .= 'tb_livro_subtitulo: '.$this->tbLivroSubtitulo;
	$s .= 'tb_livro_tituloOriginal: '.$this->tbLivroTitulooriginal;
	$s .= 'tb_livro_formato: '.$this->tbLivroFormato;
	$s .= 'tb_livro_editora: '.$this->tbLivroEditora;
	$s .= 'tb_livro_assunto: '.$this->tbLivroAssunto;
	$s .= 'tb_livro_ISBN: '.$this->tbLivroIsbn;
	$s .= 'tb_livro_ISBN13: '.$this->tbLivroIsbn13;
	$s .= 'tb_livro_codbarras: '.$this->tbLivroCodbarras;
	$s .= 'tb_livro_dimensao: '.$this->tbLivroDimensao;
	$s .= 'tb_livro_edicao: '.$this->tbLivroEdicao;
	$s .= 'tb_livro_anoLancamento: '.$this->tbLivroAnolancamento;
	$s .= 'tb_livro_numeroPaginas: '.$this->tbLivroNumeropaginas;
	$s .= 'tb_livro_sinopse: '.$this->tbLivroSinopse;
	$s .= 'tb_livro_imgcapa: '.$this->tbLivroImgcapa;
	return $s;
}

/**
 * Returns a HTML representation of this obbject using DIVs for formatting via css
 * @return String HTML representation of the Tb_livro object
 */
public function toHTMLString(){
	$htmlCode = "<div class=\"tb_livro\">\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_id">'.$this->tbLivroId."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_titulo">'.$this->tbLivroTitulo."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_subtitulo">'.$this->tbLivroSubtitulo."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_tituloOriginal">'.$this->tbLivroTitulooriginal."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_formato">'.$this->tbLivroFormato."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_editora">'.$this->tbLivroEditora."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_assunto">'.$this->tbLivroAssunto."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_ISBN">'.$this->tbLivroIsbn."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_ISBN13">'.$this->tbLivroIsbn13."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_codbarras">'.$this->tbLivroCodbarras."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_dimensao">'.$this->tbLivroDimensao."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_edicao">'.$this->tbLivroEdicao."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_anoLancamento">'.$this->tbLivroAnolancamento."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_numeroPaginas">'.$this->tbLivroNumeropaginas."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_sinopse">'.$this->tbLivroSinopse."</div>\n";
	$htmlCode .= '	<div class="tb_livro_tb_livro_imgcapa">'.$this->tbLivroImgcapa."</div>\n";
	$htmlCode .= "</div>\n";
	return $htmlCode;
}


public function loadAll(){

	$tb_livro = new Tb_livro();
	$rows = $tb_livro->dao->getData("");
	$tb_livros = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_livro();
		$d->init($rows[$index]);
		array_push($tb_livros,$d);
	}
	return $tb_livros;
		
}

/**
 * 
 * Load the Tb_livro uniquely by its primary key.
 * @param tbLivroId primary key
 * @return Instance of {@link Tb_livro}
 */
static function loadUnique($tbLivroId){

	$tb_livro = new Tb_livro();
	$rows = $tb_livro->dao->getData("`tb_livro_id`='$tbLivroId'");
	$tb_livro->init($rows[0]);
	return $tb_livro;
  	  	
}

/**
 * 
 * Load all records of Tb_livro uniquely by its foreign keys:
 * tb_livro_editora
 * @param tbLivroEditora foreign key
 * @return array of Instance of {@link Tb_livro}
 */
public static function loadByFKTb_livro_editora($tbLivroEditora){

	$tb_livro = new Tb_livro();
	$rows = $tb_livro->dao->getData("`tb_livro_editora`='$tbLivroEditora'");
	$tb_livros = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_livro();
		$d->init($rows[$index]);
		array_push($tb_livros,$d);
	}
	return $tb_livros;
 	  	
}

/**
 * 
 * Load all records of Tb_livro uniquely by its foreign keys:
 * tb_livro_assunto
 * @param tbLivroAssunto foreign key
 * @return array of Instance of {@link Tb_livro}
 */
public static function loadByFKTb_livro_assunto($tbLivroAssunto){

	$tb_livro = new Tb_livro();
	$rows = $tb_livro->dao->getData("`tb_livro_assunto`='$tbLivroAssunto'");
	$tb_livros = array();
	for ($index = 0; $index < sizeof($rows); $index++) {
		$d = new Tb_livro();
		$d->init($rows[$index]);
		array_push($tb_livros,$d);
	}
	return $tb_livros;
 	  	
}

/**
 * Insert this object into the DB
 * @return new id (auto increment value) genereated
 */
private function insert(){

	$list = array("tb_livro_id"=>$this->tbLivroId, "tb_livro_titulo"=>$this->tbLivroTitulo, "tb_livro_subtitulo"=>$this->tbLivroSubtitulo, "tb_livro_tituloOriginal"=>$this->tbLivroTitulooriginal, "tb_livro_formato"=>$this->tbLivroFormato, "tb_livro_editora"=>$this->tbLivroEditora, "tb_livro_assunto"=>$this->tbLivroAssunto, "tb_livro_ISBN"=>$this->tbLivroIsbn, "tb_livro_ISBN13"=>$this->tbLivroIsbn13, "tb_livro_codbarras"=>$this->tbLivroCodbarras, "tb_livro_dimensao"=>$this->tbLivroDimensao, "tb_livro_edicao"=>$this->tbLivroEdicao, "tb_livro_anoLancamento"=>$this->tbLivroAnolancamento, "tb_livro_numeroPaginas"=>$this->tbLivroNumeropaginas, "tb_livro_sinopse"=>$this->tbLivroSinopse, "tb_livro_imgcapa"=>$this->tbLivroImgcapa);
	return $this->dao->insertRecord($list);	
	
}

/**
 * Update this object into the DB
 * @return number of updated records
 */
private function update(){

	$list = array("tb_livro_id"=>$this->tbLivroId, "tb_livro_titulo"=>$this->tbLivroTitulo, "tb_livro_subtitulo"=>$this->tbLivroSubtitulo, "tb_livro_tituloOriginal"=>$this->tbLivroTitulooriginal, "tb_livro_formato"=>$this->tbLivroFormato, "tb_livro_editora"=>$this->tbLivroEditora, "tb_livro_assunto"=>$this->tbLivroAssunto, "tb_livro_ISBN"=>$this->tbLivroIsbn, "tb_livro_ISBN13"=>$this->tbLivroIsbn13, "tb_livro_codbarras"=>$this->tbLivroCodbarras, "tb_livro_dimensao"=>$this->tbLivroDimensao, "tb_livro_edicao"=>$this->tbLivroEdicao, "tb_livro_anoLancamento"=>$this->tbLivroAnolancamento, "tb_livro_numeroPaginas"=>$this->tbLivroNumeropaginas, "tb_livro_sinopse"=>$this->tbLivroSinopse, "tb_livro_imgcapa"=>$this->tbLivroImgcapa);
	$where = "`tb_livro_id`='$tbLivroId'";
	return $this->dao->updateRecord($list,$where);	
	
}

/**
 * Initialize the business object with data read from the DB.
 */
private function initPOST(){
	if (isset($_POST['tbLivroId'])){
		$this->tbLivroId = $_POST['tbLivroId'];
	}
	if (isset($_POST['tbLivroTitulo'])){
		$this->tbLivroTitulo = $_POST['tbLivroTitulo'];
	}
	if (isset($_POST['tbLivroSubtitulo'])){
		$this->tbLivroSubtitulo = $_POST['tbLivroSubtitulo'];
	}
	if (isset($_POST['tbLivroTitulooriginal'])){
		$this->tbLivroTitulooriginal = $_POST['tbLivroTitulooriginal'];
	}
	if (isset($_POST['tbLivroFormato'])){
		$this->tbLivroFormato = $_POST['tbLivroFormato'];
	}
	if (isset($_POST['tbLivroEditora'])){
		$this->tbLivroEditora = $_POST['tbLivroEditora'];
	}
	if (isset($_POST['tbLivroAssunto'])){
		$this->tbLivroAssunto = $_POST['tbLivroAssunto'];
	}
	if (isset($_POST['tbLivroIsbn'])){
		$this->tbLivroIsbn = $_POST['tbLivroIsbn'];
	}
	if (isset($_POST['tbLivroIsbn13'])){
		$this->tbLivroIsbn13 = $_POST['tbLivroIsbn13'];
	}
	if (isset($_POST['tbLivroCodbarras'])){
		$this->tbLivroCodbarras = $_POST['tbLivroCodbarras'];
	}
	if (isset($_POST['tbLivroDimensao'])){
		$this->tbLivroDimensao = $_POST['tbLivroDimensao'];
	}
	if (isset($_POST['tbLivroEdicao'])){
		$this->tbLivroEdicao = $_POST['tbLivroEdicao'];
	}
	if (isset($_POST['tbLivroAnolancamento'])){
		$this->tbLivroAnolancamento = $_POST['tbLivroAnolancamento'];
	}
	if (isset($_POST['tbLivroNumeropaginas'])){
		$this->tbLivroNumeropaginas = $_POST['tbLivroNumeropaginas'];
	}
	if (isset($_POST['tbLivroSinopse'])){
		$this->tbLivroSinopse = $_POST['tbLivroSinopse'];
	}
	if (isset($_POST['tbLivroImgcapa'])){
		$this->tbLivroImgcapa = $_POST['tbLivroImgcapa'];
	}
}

/**
 * Initialize the business object with data read from the DB.
 */
private function initGET(){
	if (isset($_GET['tbLivroId'])){
		$this->tbLivroId = $_GET['tbLivroId'];
	}
	if (isset($_GET['tbLivroTitulo'])){
		$this->tbLivroTitulo = $_GET['tbLivroTitulo'];
	}
	if (isset($_GET['tbLivroSubtitulo'])){
		$this->tbLivroSubtitulo = $_GET['tbLivroSubtitulo'];
	}
	if (isset($_GET['tbLivroTitulooriginal'])){
		$this->tbLivroTitulooriginal = $_GET['tbLivroTitulooriginal'];
	}
	if (isset($_GET['tbLivroFormato'])){
		$this->tbLivroFormato = $_GET['tbLivroFormato'];
	}
	if (isset($_GET['tbLivroEditora'])){
		$this->tbLivroEditora = $_GET['tbLivroEditora'];
	}
	if (isset($_GET['tbLivroAssunto'])){
		$this->tbLivroAssunto = $_GET['tbLivroAssunto'];
	}
	if (isset($_GET['tbLivroIsbn'])){
		$this->tbLivroIsbn = $_GET['tbLivroIsbn'];
	}
	if (isset($_GET['tbLivroIsbn13'])){
		$this->tbLivroIsbn13 = $_GET['tbLivroIsbn13'];
	}
	if (isset($_GET['tbLivroCodbarras'])){
		$this->tbLivroCodbarras = $_GET['tbLivroCodbarras'];
	}
	if (isset($_GET['tbLivroDimensao'])){
		$this->tbLivroDimensao = $_GET['tbLivroDimensao'];
	}
	if (isset($_GET['tbLivroEdicao'])){
		$this->tbLivroEdicao = $_GET['tbLivroEdicao'];
	}
	if (isset($_GET['tbLivroAnolancamento'])){
		$this->tbLivroAnolancamento = $_GET['tbLivroAnolancamento'];
	}
	if (isset($_GET['tbLivroNumeropaginas'])){
		$this->tbLivroNumeropaginas = $_GET['tbLivroNumeropaginas'];
	}
	if (isset($_GET['tbLivroSinopse'])){
		$this->tbLivroSinopse = $_GET['tbLivroSinopse'];
	}
	if (isset($_GET['tbLivroImgcapa'])){
		$this->tbLivroImgcapa = $_GET['tbLivroImgcapa'];
	}
}
}
?>