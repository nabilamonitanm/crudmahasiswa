<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Profile
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Profile extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $title="Title";
    $this->load->view("layout/header2");
    $this->load->view("layout/header3",$title);
    $this->load->view("user/profile");
    $this->load->view("layout/footer2");
  }

}


/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */