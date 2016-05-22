<?php
class View{
	private $tpl_data = array();
	
	//Ϊģ��������
	public function assign($key, $value){
		$this->tpl_data[$key] = $value;
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
	public function display($file_path,$prefix = null,$cache = ''){
		$is_cache = @$_GET['cache'];
		if(empty($is_cache)){
			$is_cache = $cache;
		}
		global $config;
		//�Ƿ����û���
		if($config['tmpl']['is_cache'] && $is_cache != 'no'){
			//��⻺���ļ��Ƿ����
			//�Զ���ȫ�ʺ�
			if(!strstr('?',$_SERVER['REQUEST_URI'])){
				$_SERVER['REQUEST_URI'] .= "?";
			}
			$cache_file = str_replace(array("/","?"),array("_p_","_w_"),$_SERVER['REQUEST_URI']);
			if(file_exists('cache/'.$cache_file)){
				//���ڻ����ļ�
				//��黺���ļ��Ƿ����
				$modify_time = filemtime('cache/'.$cache_file);
				if(((time()-$modify_time)>$config['tmpl']['cache_limit']) || ((time()-$modify_time)<0)){
					//�ļ��ѹ���
					$this->_view($file_path, $prefix);
				}else{
					//���ػ����ļ�
					require_once('cache/'.$cache_file);
					$is_cache = 'no';
				}
			}else{
				$this->_view($file_path, $prefix);
			}
			if($is_cache != 'no'){
				//���ɻ����ļ�
				$html = file_get_contents('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'&cache=no');
				file_put_contents('cache/'.$cache_file, $html);
			}
		}else{
			$this->_view($file_path, $prefix);
		}
	}
	
	/** 
	* ѹ��html: ������з�,����Ʊ��,ȥ��ע�ͱ�� 
	* @param $string 
	* @returnѹ�����$string 
	* */ 
	private function compress_html($string){ 
		$string=str_replace("\r\n",'',$string);//������з�
		$string=str_replace("\n",'',$string);//������з�
		$string=str_replace("\t",'',$string);//����Ʊ��
		$pattern=array(
		"/> *([^ ]*) *</",//ȥ��ע�ͱ��
		"/[\s]+/",
		"/<!--[^!]*-->/",
		"/\" /",
		"/ \"/",
		"'/\*[^*]*\*/'"
		);
		$replace=array (
		">\\1<",
		" ",
		"",
		"\"",
		"\"",
		""
		);
		return preg_replace($pattern, $replace, $string);
	}
	
	//������ͼ�ļ�
	private function _view($file_path, $prefix){
		global $config;
		$prefix = empty($prefix) ? $config['tmpl']['prefix'] : $prefix;
		if(!file_exists('view/'.$file_path.".".$prefix)){
			if(strtolower(APP_MODEL) == 'debug'){
				die('TMPL NOT EXISTS');
			}else{
				exit;
			} 
		}
		$tpl = file_get_contents('view/'.$file_path.".".$prefix);
		$replace_orign = array();
		$replace_to = array();
		foreach($this->tpl_data as $key=> $val){
			array_push($replace_orign, $config['tmpl']['left_delimiter'].$key.$config['tmpl']['right_delimiter']);
			array_push($replace_to, $val);
		}
		$html = str_replace($replace_orign, $replace_to, $tpl);
		if($config['tmpl']['is_compresshtml']){
			$html = $this->compress_html($html);
		}
		echo $html;
	}
}