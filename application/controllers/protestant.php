<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Protestant extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct(){
        parent::__construct(); 
		$this->load->library('ion_auth');
        $this->load->helper('url');
        $this->load->model('Protestant_model');
    }

	public function index()
	{
        $data['protestants'] = $this->Protestant_model->all();
        $this->template->load('template', 'protestant/index',$data);
	}
	public function create()
	{
        if($this->input->post()){
            $user = $this->ion_auth->user()->row();
            $this->Protestant_model->userId = $user->id;
            $this->Protestant_model->protestId = $this->input->post('protestId');
            $this->Protestant_model->insert();
            redirect('/protest');
        }
	}

	public function show()
	{
        $this->Protest_model->id = $this->input->get('id');
        $data['protestant'] = $this->Protest_model->show();
        $this->template->load('template', 'protestant/show',$data);
	}

	public function edit()
	{
        if(!$this->input->post()){
            $this->Protest_model->id = $this->input->get('id');
            $data['protestant'] = $this->Protest_model->show();
            $this->template->load('template', 'protestant/edit',$data);
        }else{
            $this->Protest_model->id = $this->input->get('id');
            $this->Protest_model->name = $this->input->post('name');
            $this->Protest_model->description = $this->input->post('desc');
            $this->Protest_model->local = $this->input->post('local');
            $this->Protest_model->image = $this->input->post('image');
            $this->Protest_model->update();
            redirect('/protestant');
        }
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
