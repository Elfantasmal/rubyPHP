<?php
/**
 * Redis���������ļ�
 */
if(!defined("APP_NAME")){
	if(strtolower(APP_MODEL) == 'debug'){
		die('Not allowed');
	}else{
		exit;
	}
}

$config['redis'] = array(
	//'url·��'=>'ģ��·��:����'
	'enable' => true, //ʹ��redis����
	'host' => '127.0.0.1', //����
	'port' => 6379, //�˿ں�
	'expire' => 300, //����ʱ�䣨�룩
	'database' => 7, //redis����ʹ�õ����ݿ�
);