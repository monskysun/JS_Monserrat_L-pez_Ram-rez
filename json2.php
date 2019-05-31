
<?php
$data2 = file_get_contents("hoja2.json");
$products2 = json_decode($data2, true);
echo json_encode($products2);
 ?>
