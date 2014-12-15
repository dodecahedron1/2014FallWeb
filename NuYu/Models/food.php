<?php
	include_once __DIR__ . '/../includes/_all.php';

class Food {
	
	public static function Blank()
	{
		return array('id'=>null,'Name'=>null,'Calories'=>null,'Fat'=>null,'Carbs'=>null,'Fiber'=>null, 'Protein'=>null,'Time'=>date(strtotime('tomorrow')));
	}
	
	public static function Get($id=null)
	{
		$sql = "	SELECT * FROM 2014_Fall_NuYu_Food_Eaten ";
		
		if($id){
			$sql .= " WHERE id=$id ";
			$ret = FetchAll($sql);
			return $ret[0];
		}else{
			return FetchAll($sql);			
		}
	}
	
	static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);
			$row2['Time'] = date( 'Y-m-d H:i:s', strtotime($row2['Time']));
			if (!empty($row['id'])) {
				$sql = "Update 2014_Fall_NuYu_Food_Eaten
							Set Name='$row2[Name]', Calories='$row2[Calories]',
								Fat='$row2[Fat]', Carbs='$row2[Carbs]', Fiber='$row2[Fiber]', Protein='$row2[Protein]', Time='$row2[Time]'
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO 2014_Fall_NuYu_Food_Eaten
						(Name, Calories, Fat, Carbs, Fiber, Protein, Time, created_at, UserID)
						VALUES ('$row2[Name]', '$row2[Calories]', '$row2[Fat]', '$row2[Carbs]', '$row2[Fiber]', '$row2[Protein]', '$row2[Time]', Now(), 2) ";				
			}
			
						$results = $conn->query($sql);
			$error = $conn->error;
			
			if(!$error && empty($row['id'])){
				$row['id'] = $conn->insert_id;
			}
			
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
		static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM 2014_Fall_NuYu_Food_Eaten WHERE id = $id";
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
		
		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['Name'])) $errors['Name'] = "is required";
			if(empty($row['Calories'])) $errors['Calories'] = "is required";
			
			if($row['Carbs'] >= 30) $errors['Carbs'] = "must less than 30";
			if(empty($row['Carbs'])) $errors['Carbs'] = "is required";
			
			if($row['Fiber'] >= 10) $errors['Fiber'] = "must less than 10";
			
			
		
			return count($errors) > 0 ? $errors : false ;
 		}
	
}