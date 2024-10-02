<?php  

$url = isset($_GET['url']) ? $_GET['url']: 'index';

switch ($url) {
	case 'MyGeoGradientHomePage':
		include 'home.php';
		break;

	case 'LoginHere':
		include 'geogradient.php';
		break;
	
	default:
		echo "<script>window.location.href='LoginHere'</script>";
		break;
}


?>