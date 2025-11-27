<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud {
	protected $CI;
	function __construct()
	{
		// Assign the CodeIgniter super-object
		$this->CI =& get_instance();
	}
    function data_insert($tablename,$data){
		$this->CI->db->insert($tablename, $data);
		return $this->CI->db->insert_id();
	}
	function data_update($tablename,$data,$where){
		$this->CI->db->where($where);
		return $this->CI->db->update($tablename, $data);

	}
	function data_update_all($tablename,$data){
		$this->CI->db->update($tablename, $data);
	}
	function data_delete($tablename,$where){
		return $this->CI->db->delete($tablename, $where); 
	}
	function fetch_single_data($column,$table,$where){
		return $this->CI->db->select($column)->where($where)->get($table)->row();
	}
	function fetch_single_data_array($column,$table,$where){
		return $this->CI->db->select($column)->where($where)->get($table)->row_array();
	}
	function fetch_all_data($column,$table,$where,$order){
		return $this->CI->db->select($column)->where($where)->order_by($order)->get($table)->result();
	}
	function fetch_all_data_array($column,$table,$where,$order){
		return $this->CI->db->select($column)->where($where)->order_by($order)->get($table)->result_array();
	}
	function fetch_all_data_limit($column,$table,$where,$order,$limit){
		return $this->CI->db->select($column)->where($where)->order_by($order)->limit($limit)->get($table)->result();
	}
	function fetch_all_data_limit_start($column,$table,$where,$order,$start,$limit){
		return $this->CI->db->select($column)->where($where)->order_by($order)->limit($limit,$start)->get($table)->result();
	}
	function fetch_all_data_join_start($column,$table,$where,$table2,$join,$start,$limit,$order){
		return $this->CI->db->select($column)->where($where)->from($table)->join($table2, $join, 'left')->order_by($order)->limit($limit,$start)->get()->result();
	}
	function fetch_all_data_limit_row($column,$table,$where,$order,$limit){
		return $this->CI->db->select($column)->where($where)->order_by($order)->limit($limit)->get($table)->row();
	}
	function fetch_alls($column,$table,$order){
		return $this->CI->db->select($column)->order_by($order)->get($table)->result();
	}
	function all_numrows($table){
		return $this->CI->db->get($table)->num_rows();
	}
	function all_numrows_where($table,$where){
		return $this->CI->db->where($where)->get($table)->num_rows();
	}
	function all_numrows_where_join($table,$where,$table2,$join){
		return $this->CI->db->where($where)->from($table)->join($table2, $join, 'left')->get()->num_rows();
	}
	function fetch_single_data_column($column,$table,$where){
		return $this->CI->db->select($column)->where($where)->get($table)->row()->$column;
	}
	function fetch_single_value_column($column,$table){
		return $this->CI->db->select($column)->get($table)->row()->$column;
	}
	function all_sumvalue($clmn,$tbl){
		return $this->CI->db->select_sum($clmn)->get($tbl)->row()->$clmn;
	}
	function all_sumvalue_where($clmn,$tbl,$where){
		return $this->CI->db->select_sum($clmn)->where($where)->get($tbl)->row();
	}
	function all_sumvalue_where_join($clmn,$table,$where,$table2,$join){
		return $this->CI->db->select_sum($clmn)->where($where)->from($table)->join($table2, $join, 'left')->get()->row();
	}
	function fetch_single_data_join($column,$table,$where,$table2,$join){
		return $this->CI->db->select($column)->where($where)->from($table)->join($table2, $join, 'left')->get()->row();
	}
	function fetch_all_data_join($column,$table,$where,$table2,$join,$limit,$order){
		return $this->CI->db->select($column)->where($where)->from($table)->join($table2, $join, 'left')->order_by($order)->limit($limit)->get()->result();
	}
	function fetch_all_datas_where_join($column,$table,$where,$table2,$join,$order){
		return $this->CI->db->select($column)->where($where)->from($table)->join($table2, $join, 'left')->order_by($order)->get()->result();
	}
	function fetch_all_datas_join($column,$table,$table2,$join,$order){
		return $this->CI->db->select($column)->from($table)->join($table2, $join, 'left')->order_by($order)->get()->result();
	}
	function get_last_row($column,$table,$where){
		return $this->CI->db->select($column)->from($table)->where($where)->get()->last_row();
	}
	function get_last_row_column($column,$table,$where){
		return $this->CI->db->select($column)->from($table)->where($where)->get()->last_row()->$column;
	}
}