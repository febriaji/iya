<?php
class TransaksiModel extends CI_model{
	public function getAllTransaksi()
	{
		// $sql = 'SELECT persediaan.nama, status, total from transaksi JOIN persediaan on transaksi.id_barang = persediaan.id';
		$this->db->select ( '*' ); 
		$this->db->from ( 'transaksi' );
		$this->db->join ( 'persediaan', 'transaksi.id_barang = persediaan.id');
		$query = $this->db->get ();
		return $query->result ();
	}
	public function get_id()
  {
    $this->db->select ( '*' ); 
		$this->db->from ( 'transaksi' );
		$this->db->join ( 'persediaan', 'transaksi.id_barang = persediaan.id');
		$query = $this->db->get ();
		return $query->result ();
  }
}