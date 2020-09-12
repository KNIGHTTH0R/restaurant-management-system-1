<?php

	class Controller {
		
		public function view($view, $data=[]){
			$path = "views/" . $view . ".php";
			if( file_exists($path) ) {
				require_once $path;
			}
		}

	}