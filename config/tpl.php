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
	'is_cache' => true, //�Ƿ�����ģ�建��
	'cache_limit' => 3600, //ģ�建��ʱ�䣨�룩
	'left_delimiter' => '{:', //ģ�����ǩ
	'right_delimiter' => '}', //ģ���ұ�ǩ
	'is_compresshtml' => true, //�Ƿ�ѹ��html
);