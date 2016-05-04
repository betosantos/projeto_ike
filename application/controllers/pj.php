<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pj extends CI_Controller {

    public function index() {
        $dados['pj'] = $this->db->get('tbl_cliente_pj')->result();
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('pj/index', $dados);
        $this->load->view('includes/footer');
    }

    public function formulario() {
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('pj/formulario');
        $this->load->view('includes/footer');
    }

    public function cadastrar() {
        $data['nome'] = $this->input->post('nome');
        $data['cnpj'] = $this->input->post('cnpj');


        if ($this->db->insert('tbl_cliente_pj', $data)) {
            redirect('pj');
//            }else{
//                redirect('usuario/2');
//            }           
        }
    }
    
    public function atualizar($id=null)
        {
            $this->db->where('id',$id);
            $data['pj'] = $this->db->get('tbl_cliente_pj')->result();
            
            $this->load->view('includes/header');   
            $this->load->view('includes/menu');                
            $this->load->view('pj/editar_pj',$data);  
            $this->load->view('includes/footer');              
        }
    
        public function salvar_atualizacao()
        {   
            $id = $this->input->post('id');
            
            $dados['nome'] = $this->input->post('nome');
            $dados['cnpj'] = $this->input->post('cnpj');
                        
            
            $this->db->where('id',$id);
            if($this->db->update('tbl_cliente_pj',$dados)){
                redirect('pj');
//            }else{
//                redirect('usuario/6');
//            }           
             }

        }
    

}
