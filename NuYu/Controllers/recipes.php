<?

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$view 	= null;

switch ($action . '_' . $method) {
	case 'create_GET':
		break;
	case 'create_POST':
		break;
	case 'edit_GET':
		break;
	case 'edit_POST':
		break;
	case 'delete_GET':	
		break;
	case 'delete_POST':
		break;
	case 'index_GET':
	default:
		$view = 'Recipes/index.php';
		break;
}

switch ($format) {
	case 'json':
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
?>
