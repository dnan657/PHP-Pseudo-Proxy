function proxy($url_file, $name_file=''){
	if(trim($name_file) == ''){
		$name_file = basename($url_file);
	}
	header('Content-Description: File Transfer');
	header("Content-Transfer-Encoding: Binary"); 
	header('Content-Type: application/octet-stream'); 
	header('Content-Disposition: attachment; filename="'. $name_file .'"'); 
	
	readfile ($url_file);
	exit();
}


$url = $_GET['url'];
$name = $_GET['name'];

proxy($url, $name);
