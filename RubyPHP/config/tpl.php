<?php
/**
 * ģ�������ļ�
 */
if(!defined("APP_NAME")){
	if(strtolower(APP_MODEL) == 'debug'){
		die('Not allowed');
	}else{
		exit;
	}
}

$config['tmpl'] = array(
	//'url·��'=>'ģ��·��:����'
	'prefix' => 'html', //ģ���ļ���׺
	'left_delimiter' => '{:', //ģ�����ǩ
	'right_delimiter' => '}', //ģ���ұ�ǩ
);