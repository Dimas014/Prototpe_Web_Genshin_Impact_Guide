<?php
class Crud_model extends CI_Model 
{
	function display_records()
	{
		$query=$this->db->query("select * from crud");
		return $query->result();
	}
}