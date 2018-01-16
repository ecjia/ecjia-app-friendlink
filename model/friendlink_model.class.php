<?php
defined('IN_ECJIA') or exit('No permission resources.');

class friendlink_model extends Component_Model_Model {
	public $table_name = '';
	public function __construct() {
// 		$this->db_config = RC_Config::load_config('database');
// 		$this->db_setting = 'default';
		$this->table_name = 'friend_link';
		parent::__construct();
	}

	public function friendlink_count($where) {
		return $this->where($where)->count();
	}
	
	public function friendlink_manage($parameter) {
		if (!isset($parameter['link_id'])) {
			$id = $this->insert($parameter);
		} else {
			$where = array('link_id' => $parameter['link_id']);
			 
			$this->where($where)->update($parameter);
			$id = $parameter['link_id'];
		}
		return $id;
	}
	
	public function friendlink_find($where, $field='*') {
		return $this->where($where)->field($field)->find();
	}
	
	public function friendlink_batch($where, $type, $field='*') {
		if ($type == 'select') {
			return $this->in($where)->field($field)->select();
		} elseif ($type == 'delete') {
			return $this->in($where)->delete();
		}
	}
	
	public function friendlink_field($where, $field='*', $bool=false) {
		return $this->where($where)->get_field($field, $bool);
	}
	
	public function friendlink_remove($id) {
		return $this->where(array('link_id' => $id))->delete();
	}
	
	public function friendlink_select($option) {
		return $this->where($option['where'])->order($option['order'])->limit($option['limit'])->select();
	}
}

// end