<?
  include_once __DIR__ . '/../includes/_all.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$view 	= null;

switch ($action . '_' . $method) {
	case 'create_GET':
		$model2 = Progress::Blank(); 
		$view = "Progress/edit.php";
		break;
	case 'save_POST':
		$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';
		$errors = Progress::Validate($_REQUEST);
			if(!$errors){
				$errors = Progress::Save($_REQUEST);
			}
			if(!$errors){
				header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
				die();
			}else{
				$model2 = $_REQUEST;
				$view = "Progress/edit.php";		
			}
			break;
	case 'delete':
			if($_SERVER['REQUEST_METHOD'] == 'GET'){
				//Promt
			}else{				
						}
			break;
 		break;
	case 'edit_GET':
		$model2 = Progress::Get($_REQUEST['id']);
		$view = "Progress/edit.php";
		break;
		break;
	case 'delete_GET':
		$model2 = Progress::Get($_REQUEST['id']);
        $view = "Progress/delete.php";
		break;
	case 'delete_POST':
		$errors = Progress::Delete($_REQUEST['id']);
		if($errors){
				$model2 = Progress::Get($_REQUEST['id']);
				$view = "Progress/delete.php";
		}else{
				header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
				die();			
		}
		break;
	case 'index_GET':
	default:
		$model2 = Progress::Get();
		$view = "Progress/index.php";		
		break;
} 

switch ($format) {
	case 'json':
		echo json_encode($model2);
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