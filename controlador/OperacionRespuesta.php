<?php
 require '../vendor/autoload.php';
 $idem=$_REQUEST['cod2'];  
//  include '../controlador/Conexion.php';
$conexion = new mysqli("localhost", "root", "" , "bdauditwp");
 class MyReadFilter implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter {

  public function readCell($columnAdress, $row, $worksheetName = '') {
      // Read title row and rows 20 - 30
      if ($row>1) {
        // if (in_array($column,range('C','M'))){
          // $columnAdress = Coordinate::columnIndexFromString('B');
          return true;
      // }
    }
      return false;
  }
}
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
$inputFileName = $_FILES['excel']['tmp_name'];

/**  Identify the type of $inputFileName  **/
$inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
/**  Create a new Reader of the type that has been identified  **/
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
/**leo la funcion apra obtener datos de celda especifica mayores al numero colocado en la funcion */
$reader->setReadFilter( new MyReadFilter() );
/**  Load $inputFileName to a Spreadsheet Object  **/
$spreadsheet = $reader->load($inputFileName);
$cantidad = $spreadsheet->getActiveSheet()->toArray();
foreach($cantidad as $row){
  if($row[0] !=''){
    // echo '' .print_r($row[0].'-');
    $consulta = "insert into respuesta(nombre,pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8,pregunta9,pregunta10, idEmpresa) VALUES
    ('$row[0]', '$row[1]', '$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]', '$idem')";
    $result = $conexion -> query($consulta); 
  }
}

?>