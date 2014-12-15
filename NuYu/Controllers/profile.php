<?
  include_once __DIR__ . '/../includes/_all.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$view 	= null;

switch ($action . '_' . $method) {
	case 'create_GET':
		$model3 = Profile::Blank(); 
		$view = "Profile/edit.php";
		break;
	case 'edit_GET':
		$model3 = Profile::Get($_REQUEST['id']);
		$view = "Profile/edit.php";
		break;
		break;
	case 'index_GET':
	default:
		$model3 = Profile::Get();
		$view = "Profile/index.php";		
		break;
} 

switch ($format) {
	case 'json':
		echo json_encode($model3);
		break;
	case 'plain':
		include __DIR__ . "/../Views/$view";		
		break;		
	case 'web':
    default:
		include __DIR__ . "/../Views/Shared/_Template.php";	
		include __DIR__ . "/../Views/$view";	
 		break;
} 

