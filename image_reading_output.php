<?php
// image_reader input neua hoise pdf_reader_input er maddome 
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
//echo $path;
//$vie=$path/$pdf;
//echo $vie;
?>
 <html>
     <head>
     </head>
     <body>
         
        <!-- select image from image where id=12 -->
        
        <img src='imaging/<?php echo $pdf;  ?>'  width="300px"  height="300px"> 
     </body>
 </html>