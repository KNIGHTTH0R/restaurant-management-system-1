<?php

	class Mapper {

		protected $base_path = 'http://localhost/projects/mr-chef';

		public function libs($path=''){
			$origin_path = $this->base_path . '/public/libs/';
			$request = $origin_path . $path;

			echo $request;  
		}

		public function vendor($path=''){
			$origin_path = $this->base_path . '/vendor/';
			$request = $origin_path . $path;

			echo $request;  
		}


		public function assets($path=''){
			$origin_path = $this->base_path . '/public/assets/';
			$request = $origin_path . $path;

			echo $request;  
		}

	}