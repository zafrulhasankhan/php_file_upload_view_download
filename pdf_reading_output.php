<?php
// Database Connection 
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
echo $vie;
?>
<br/><br/>
<iframe src="<?php echo $vie; ?>" width="100%" height="800px">
</iframe>
