<?php
class Persediaan extends CI_Model 
{	
	function displayrecords()
	{
	$data=$this->db->get("persediaan");
	return $data;
	}
}