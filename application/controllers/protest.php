<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Protest extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
		$this->load->library('ion_auth');
        $this->load->helper('url');
        $this->load->model('Protest_model');
        $this->load->model('Protestant_model');
    }

	public function index()
	{
        $data['protests'] = $this->Protest_model->all();
        $this->template->load('template', 'protest/index',$data);
	}
	public function create()
	{
        if($this->ion_auth->logged_in()){

                if(!$this->input->post()){
                    $this->template->load('template', 'protest/create');
                }else{
                    $user = $this->ion_auth->user()->row();
                    $this->Protest_model->creator = $user->id;
                    $this->Protest_model->name = $this->input->post('name');
                    $this->Protest_model->description = $this->input->post('desc');
                    $this->Protest_model->local = $this->input->post('local');
                    $this->Protest_model->image = $this->input->post('image');
                    $this->Protest_model->insert();
                    redirect('/protest');
                }
        }else{
                redirect('/protest');
        }
    }

	public function show()
	{
        $this->Protest_model->id = $this->input->get('id');
        $this->Protestant_model->protestId = $this->Protest_model->id;

        $data['total'] = $this->Protestant_model->allProtestants();
        $data['protest'] = $this->Protest_model->show();
        $data['user'] =  $this->ion_auth->user()->row();
        $this->template->load('template', 'protest/show',$data);
	}

	public function edit()
	{
        if(!$this->input->post()){
            $this->Protest_model->id = $this->input->get('id');
            $data['protest'] = $this->Protest_model->show();
            $this->template->load('template', 'protest/edit',$data);
        }else{
            $this->Protest_model->id = $this->input->get('id');
            $this->Protest_model->name = $this->input->post('name');
            $this->Protest_model->description = $this->input->post('desc');
            $this->Protest_model->local = $this->input->post('local');
            $this->Protest_model->image = $this->input->post('image');
            $this->Protest_model->update();
            redirect('/protest');
        }
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
