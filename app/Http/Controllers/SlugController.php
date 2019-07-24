<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

trait SlugController
{
    function slug($name)
    {
    	$slug = str_replace(' ', '-', trim($name));
		$slug = str_replace('\\', '-', trim($slug));	
		$slug = str_replace('\'', '-', trim($slug));	
		$slug = str_replace('"', '-', trim($slug));	
		$slug = str_replace('/', '-', trim($slug));	
		$slug = str_replace('|', '-', trim($slug));	
		$slug = str_replace('?', '-', trim($slug));		

		return $slug;
    }

}
