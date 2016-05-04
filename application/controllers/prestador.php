<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prestador extends CI_Controller {

	
	public function index()
	{            
            $this->db->select('*');
            $dados['prestador'] = $this->db->get('tbl_prestador')->result();
//            print_r($dados);
//            exit;            
            $this->load->view('includes/header');  
            $this->load->view('includes/menu');
            $this->load->view('prestador/index',$dados);
            $this->load->view('includes/footer');
	}
        
        public function formulario()
	{   
            $this->load->view('includes/header');  
            $this->load->view('includes/menu');
            $this->load->view('prestador/formulario');
            $this->load->view('includes/footer');
	}
        
                
        
        public function cadastrar()
        {
            $data['nome'] = $this->input->post('nome');
            $data['telefone'] = $this->input->post('telefone');
                 
            
            if($this->db->insert('tbl_prestador',$data)){
                redirect('prestador');
//            }else{
//                redirect('usuario/2');
//            }           
            }
        
            }
            
        public function excluir($id=null)
        {
            $this->db->where('id',$id);
            if($this->db->delete('tbl_prestador')){
                    redirect('prestador');
    //            } else{
    //                redirect('usuario/4');
    //            }
            }
        }
        
        
        
        public function atualizar($id=null)
        {
            $this->db->where('id',$id);
            $data['prestador'] = $this->db->get('tbl_prestador')->result();
            
            $this->load->view('includes/header');   
            $this->load->view('includes/menu');                
            $this->load->view('prestador/editar_prestador',$data);  
            $this->load->view('includes/footer');              
        }
    
        
        
        public function salvar_atualizacao()
        {   
            $id = $this->input->post('id');
            
            $dados['nome'] = $this->input->post('nome');
                
            $this->db->where('id',$id);
            if($this->db->update('tbl_prestador',$dados)){
                redirect('prestador');
//            }else{
//                redirect('usuario/6');
//            }           
             }

        }


}