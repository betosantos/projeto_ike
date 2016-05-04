<?php

class Upload extends CI_Controller {

    public function __construct() {
   
        parent::__construct();
        // Load the helpers
        $this->load->helper(array('form', 'url'));        
        $this->load->library('session');
    }

    public function index() {               
        // Load the form
        //$this->load->view('templates/header');        
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('upload/upload_form', array('error' => ' ' ));
        //$this->load->view('templates/footer');       
    }
   

    /**
     * Multiple upload functionality will fallback to CodeIgniters default do_upload()
     * method so configuration is backwards compatible between do_upload() and the new do_multi_upload()
     * method provided by Multi File Upload extension.
     *
     */
    public function do_upload(){
   
        // Detect form submission.
        if($this->input->post('submit')){
       
            $path = './uploads/';
            $this->load->library('upload');
                      
             
            // Define file rules
            $this->upload->initialize(array(
                "upload_path"       =>  $path,
                "allowed_types"     =>  "gif|jpg|png",
                "max_size"          =>  '5500',
                "max_width"         =>  '1024',
                "max_height"        =>  '768'
            ));
           
            if($this->upload->do_multi_upload("uploadfile")){            
            
            $data['upload_data'] = $this->upload->get_multi_upload_data();               
//            echo '<p class = "bg-success">' . count($data['upload_data']) . 'Arquivo Enviado com Sucesso!</p>';            
            redirect('upload');
            
               
            } else {   
                // Output the errors
                $errors = array('error' => $this->upload->display_errors('<p class = "bg-danger">', '</p>'));              
           
                foreach($errors as $k => $error){
                    echo $error;
                }
               
            }
           
        } else {
            echo '<p class = "bg-danger">Ocorreu um Erro ao enviar o arquivo.</p>';
           
        }
        // Exit to avoid further execution
        exit();
    }
}


