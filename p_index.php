<?php
class FileOwners
{
	public static function groupByOwners($files)
	{
		if($files) $arr_data = $files;
		
		$new_data = array();
		foreach($arr_data  as $k => $v){
			if($new_data[$v] == $v){
				$new_data[$v][] = $k;
			} else {
				$new_data[$v] = $k;
			}
			
//			$filename = $k;
//			$filename = explode('.', $filename);
//			$filename = $filename[0];
		}
		return $new_data;
	}
}
$files = array
(
	"Input.txt" => "Randy",
	"Code.py" => "Stan",
	"Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));