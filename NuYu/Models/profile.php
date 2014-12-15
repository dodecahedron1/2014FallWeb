<?php
	include_once __DIR__ . '/../includes/_all.php';

class Profile {
	
	public static function Blank()
	{
		return array('id'=>null,'Name'=>null, 'Location'=>null,'Email'=>null);
	}
	
	public static function Get($id=null)
	{
		$sql = "	SELECT * FROM 2014_Fall_NuYu_Profile";
		if($id){
			$sql .= " WHERE id=$id ";
			$ret = FetchAll($sql);
			return $ret[0];
		}else{
			return FetchAll($sql);			
		}
	}
	
}
		