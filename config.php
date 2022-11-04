<?php 

	 session_start();

	$autoload = function($class){
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost/Projeto_01/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

	//Conexão com a DB
	define('HOST','localhost');
	define('DATABASE','projeto_01');
	define('USER','root');
	define('PASSWORD','');

	//Funções
	function pegaCargo($cargo){
		$arr = [
			'0' => 'Normal',
			'1' => 'Administrador',
			'2' => 'Moderador'];

			return $arr[$cargo];
	}

?>