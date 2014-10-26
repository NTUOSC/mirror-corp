<?php
$filename = date("Ymd_His_U_").rand(100,999).'.txt';
$content = file_get_contents('php://input');
if(strlen($content) <= 524288){
	file_put_contents($content, $filename);
}
echo json_encode(
	array(
		"result" => "ok"
	)
)
?>
