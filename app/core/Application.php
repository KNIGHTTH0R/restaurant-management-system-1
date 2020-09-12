<?php

	class Application {

		protected $controller = "Home";
		protected $method = "index";
		protected $params = [];

		public function __construct(){
			$urlSegments = $this->parseURL();
			
			$controllerPathRequest = '../app/controllers/' . ucfirst($urlSegments[0]) . '.php'; 

			if( file_exists($controllerPathRequest) ) {
				$this->controller = ucfirst( $urlSegments[0] );
				unset($urlSegments[0]);
			} 

			require_once '../app/controllers/'. $this->controller . '.php'; 

			$this->controller = new $this->controller();

			if( !empty($urlSegments[1]) ){
				if( method_exists($this->controller, $urlSegments[1]) ){
					$this->method = $urlSegments[1];
					unset($urlSegments[1]);
				}
			}

			
			$this->params = isset($urlSegments) ? array_values($urlSegments) : [];

			call_user_func_array([$this->controller, $this->method], $this->params);

			// print_r($this->method);
		} 

		protected function parseURL() {
			if(isset($_GET['url'])) {

				$url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
				$urlSegments = explode('/', $url);

				return $urlSegments;
			}
		}

	}