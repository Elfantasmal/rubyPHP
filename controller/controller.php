<?php
class Controller{
	private $view;
	
	public function __construct(){
		//������ͼ
		require_once('view/view.php');
		$this->view = new View();
	}
	
	//����json����
	public function return_json($status, $info, $data){
		$this->view->return_json($status, $info, $data);
	}
	
	//Ϊģ��������
	public function assign($key, $value){
		$this->view->assign($key, $value);
	}
	
	//����ģ���ļ�
	public function display($file_path,$prefix = null,$cache = ''){
		$this->view->display($file_path, $prefix, $cache);
	}
}