<?php
class View{
	private $smarty;
	
	function __construct() {
		global $config;
        require 'libs/smarty/Smarty.class.php';
		$this->smarty = new Smarty;

		$this->smarty->template_dir = 'view/';
		$this->smarty->compile_dir = 'cache/';
		$this->smarty->left_delimiter = $config['tmpl']['left_delimiter'];
		$this->smarty->right_delimiter = $config['tmpl']['right_delimiter'];
    }
	
	//Ϊģ��������
	public function assign($key, $value){
		$this->smarty->assign($key,$value);
	}
	
	//����json����
	public function return_json($status, $info, $data){
		header('content-type:application/json;charset=utf8');
		$result['status'] = $status;
		$result['info'] = $info;
		$result['data'] = $data;
		exit(json_encode($result));
	}
	
	//����ģ���ļ�
	public function display($file_path){
		global $config;
		$this->smarty->display($file_path.".".$config['tmpl']['prefix']);
	}
}