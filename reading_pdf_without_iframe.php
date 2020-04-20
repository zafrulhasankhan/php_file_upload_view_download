<?php
$conn = new mysqli("localhost", "root", "", "dbtuts");
//Check for connection error
$select = "SELECT * FROM infopdf order by fileid desc limit 1";
$result = $conn->query($select);
while($row = $result->fetch_object()){
  $pdf = $row->filename;
  $path = $row->directory;
  
}

echo '<h1>Here is the information PDF</h1>';
$vie=$path.$pdf;
//session_start();
//$file= 'uploads/$_session['file'] ' ;
$filename=$vie ;
header('Content-type: application/pdf');
header( 'Content-Disposition:inline; filename=" ' . $filename .'"');
header('Content-transfer-Encoding:binary');
header('Accept-Ranges:bytes');
@readfile($filename);
?>


