<?php

/**
 *
 */
class Tanaman_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();

  }
  public function tanamandetail($where='')
  {
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('tanaman');
    return $query->result();
  }
}

 ?>
