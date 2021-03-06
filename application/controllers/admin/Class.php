<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Class extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Class_model');
    } 

    /*
     * Listing of classes
     */
    function index()
    {
        $data['classes'] = $this->Class_model->get_all_classes();
        
        $data['_view'] = 'class/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new class
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','max_length[255]|required');
		$this->form_validation->set_rules('is_parent','Is Parent','integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'is_parent' => $this->input->post('is_parent'),
            );
            
            $class_id = $this->Class_model->add_class($params);
            redirect('class/index');
        }
        else
        {            
            $data['_view'] = 'class/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a class
     */
    function edit($id_class)
    {   
        // check if the class exists before trying to edit it
        $data['class'] = $this->Class_model->get_class($id_class);
        
        if(isset($data['class']['id_class']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','max_length[255]|required');
			$this->form_validation->set_rules('is_parent','Is Parent','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'is_parent' => $this->input->post('is_parent'),
                );

                $this->Class_model->update_class($id_class,$params);            
                redirect('class/index');
            }
            else
            {
                $data['_view'] = 'class/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The class you are trying to edit does not exist.');
    } 

    /*
     * Deleting class
     */
    function remove($id_class)
    {
        $class = $this->Class_model->get_class($id_class);

        // check if the class exists before trying to delete it
        if(isset($class['id_class']))
        {
            $this->Class_model->delete_class($id_class);
            redirect('class/index');
        }
        else
            show_error('The class you are trying to delete does not exist.');
    }
    
}
