<?
  include_once __DIR__ . '/../includes/_all.php';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = $_SERVER['REQUEST_METHOD'];
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$view 	= null;

switch ($action . '_' . $method) {
	case 'create_GET':
		$model1 = Food::Blank();
		$view = "FoodTracker/edit.php";
		break;
	case 'save_POST':
		$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';
			$errors = Food::Validate($_REQUEST);
			if(!$errors){
				$errors = Food::Save($_REQUEST);
			}
			if(!$errors){
				if($format == 'json'){
				header("Location: ?action=edit&format=json&id=$_REQUEST[id]");			
				}else{
				header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
				}
			die();
			}else{
				$model1 = $_REQUEST;
				$view = "FoodTracker/edit.php";		
			}
			break;

break;

	
	case 'edit_GET':
		$model1 = Food::Get($_REQUEST['id']);
		$view = "FoodTracker/edit.php";		
		break;
	case 'delete_GET':
		$model1 = Food::Get($_REQUEST['id']);
		$view = "FoodTracker/delete.php";		
		break;
	case 'delete_POST':
		$errors = Food::Delete($_REQUEST['id']);
		if($errors){
			$model1 = Food::Get($_REQUEST['id']);
			$view = "FoodTracker/delete.php";
		}else{
				header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
				die();			}
		break;
	case 'index_GET':
	default:
		$model1 = Food::Get();
		$view = 'FoodTracker/index.php';		
		break;
}
switch ($format) {
	case 'json':
		echo json_encode($model1);
		
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