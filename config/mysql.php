<?php
/**
 * MySQL�����ļ�
 * ֧������ͬ��
 */
if(!defined("APP_NAME")){
	if(strtolower(APP_MODEL) == 'debug'){
		die('Not allowed');
	}else{
		exit;
	}
}

$config['mysql'] = array(
	//'url·��'=>'ģ��·��:����'
	'enable' => true, //����״̬
	'prefix' => 'gc_', //��ǰ׺
	'master' => array(
		'host' => '121.41.21.58', //����
		'port' => '3306', //�˿�
		'username' => 'rubyphp', //�û���
		'password' => 'rubyphp', //����
		'database' => 'rubyphp', //���ݿ�
	),
	'slaver' => array(
		'host' => '121.41.21.58', //����
		'port' => '3306', //�˿�
		'username' => 'rubyphp', //�û���
		'password' => 'rubyphp', //����
		'database' => 'rubyphp', //���ݿ�
	),
);
