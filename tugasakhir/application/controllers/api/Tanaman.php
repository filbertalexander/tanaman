<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Tanaman extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('tanaman_model');
  }
  public function tanamandetail_get()
  {
    $where = '';
    if (null !== $this->get('ID')) {
      $tanaman = $this->get('ID');
      $where ="ID LIKE '" . $tanaman ."'";
    }
    $data = $this->tanaman_model->tanamandetail($where);
    $this->response( ['tanamanDetail'=> $data], 200);
  }
}

?>
