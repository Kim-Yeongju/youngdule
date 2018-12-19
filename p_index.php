<?php
class FileOwners
{
	public static function groupByOwners($files)
	{
		return $files;
	}
}

$files = array(
	"Input.txt" => "Randy",
	"Code.py" => "Stan",
	"Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));