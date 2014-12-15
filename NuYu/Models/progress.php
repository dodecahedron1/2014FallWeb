<?php
	include_once __DIR__ . '/../includes/_all.php';

class Progress {
	
	public static function Blank()
	{
		return array('id'=>null,'Arms'=>null,'Legs'=>null,'Cardio'=>null,'Stretching'=>null,'Weight'=>null, 'Date'=>date(strtotime('tomorrow')));
	}
	
	public static function Get($id=null)
	{
		$sql = "	SELECT * FROM 2014_Fall_NuYu_Excercise";
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
			$row2['Date'] = date( 'Y-m-d H:i:s', $row2['Date'] );
			if (!empty($row['id'])) {
				$sql = "Update 2014_Fall_NuYu_Excercise
							Set Arms='$row2[Arms]', Legs='$row2[Legs]',
								Cardio='$row2[Cardio]', Stretching='$row2[Stretching]', Weight='$row2[Weight]', Date='$row2[Date]'
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO 2014_Fall_NuYu_Excercise
						(Arms, Legs, Cardio, Stretching, Weight, Time, created_at, UserID)
						VALUES ('$row2[Arms]', '$row2[Legs]', '$row2[Cardio]', '$row2[Stretching]', '$row2[Weight]', '$row2[Date]', Now(), 2 ) ";				
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
			$sql = "DELETE FROM 2014_Fall_NuYu_Excercise WHERE id = $id";
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
		
		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['Weight'])) $errors['Weight'] = "is required";
			
		
			return count($errors) > 0 ? $errors : false ;
 		}
}
