<?php

namespace DiskApi;

class CreateApi
{
	public function create_space($dir);
	{
		header("application/json");
		$disk = disk_free_space($dir);
		$array = array("Space" => $disk);
		return json_encode($array);
	}
}

