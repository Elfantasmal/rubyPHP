<?php
/**
 * Db��������
 */
class Mysql_tool{
	//������ʵ���ľ�̬��Ա����
	private static $_instance;
	
	private $table_name; //����
	private $prefix; //��ǰ׺
	private $field; //�ֶ�
	private $where; //where����
	private $limit; //limit����
	
	//private��ǵĹ��췽��
	private function __construct($table_name, $prefix){
		global $config;
		if(empty($prefix)){
			$prefix = $config['mysql']['prefix'];
		}
		$this->table_name = $table_name;
		$this->prefix = $prefix;
		$this->field = "*";
		$this->where = " 1=1";
		$this->limit = "";
	}
	 
	//����__clone������ֹ���󱻸��ƿ�¡
	public function __clone(){
		trigger_error('Clone is not allow!',E_USER_ERROR);
	}
	 
	//��������,���ڷ���ʵ���Ĺ����ľ�̬����
	public static function setTable($table_name, $prefix){
		if(!(self::$_instance instanceof self)){
			self::$_instance = new self($table_name, $prefix);
		}
		return self::$_instance;
	}
	
	//field����
	public function field($field){
		$this->field = $field;
		return self::$_instance;
	}
	
	//where����
	public function where($condition){
		$this->where .= " and (".$condition.")";
		return self::$_instance;
	}
	
	//limit����
	public function limit($limit){
		$this->limit = " limit ".$limit;
		return self::$_instance;
	}
	
	//find����
	public function find(){
		$this->limit = " limit 1";
		$result = $this->select();
		return $result[0];
	}
	
	//select����
	public function select(){
		global $config;
		$sql = "";
		if($config['mysql']['enable']){
			$sql = "select ".$this->field." from ".$this->table_name." where".$this->where.$this->limit;
			$result = mysql_execute($sql);
		}
		return $result;
	}
	
	//add����
	public function add($data){
		$fields = "";
		$values = "";
		foreach($data as $key=> $value){
			$fields .= "`".$key."`,";
			$values .= "'".$value."',";
		}
		$fields = substr($fields,0,strlen($fields)-1);
		$values = substr($values,0,strlen($values)-1);
		global $config;
		$sql = "";
		if($config['mysql']['enable']){
			$sql = "insert into ".$this->table_name." (".$fields.") values(".$values.")";
			$result = mysql_execute($sql);
		}
		return $result;
	}
}