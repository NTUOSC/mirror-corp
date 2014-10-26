<?php
$filename = date("Ymd_His_U_").rand(100,999).'.txt';
$content = file_get_contents('php://input');
if(strlen($content) <= 524288 && !empty($content)){
	file_put_contents($filename, $content);
}
echo json_encode(
	array(
		"result" => "ok"
	)
)
?>
