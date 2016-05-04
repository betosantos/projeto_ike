<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto extends CI_Controller {

	
	public function index()
	{
            
            $this->db->select('*');
            $dados['produto'] = $this->db->get('tbl_produto')->result();
//            print_r($dados);
//            exit;
            
            $this->load->view('includes/header');  
            $this->load->view('includes/menu');
            $this->load->view('produto/index',$dados);
            $this->load->view('includes/footer');
	}
        
        public function formulario()
	{   
            $this->load->view('includes/header');  
            $this->load->view('includes/menu');
            $this->load->view('produto/formulario');
            $this->load->view('includes/footer');
	}
        
                
        
        public function cadastrar()
        {
            $data['nome'] = $this->input->post('nome');
                  
            
            
            if($this->db->insert('tbl_produto',$data)){
                redirect('produto');
//            }else{
//                redirect('usuario/2');
//            }           
            }
        
            }
            
        public function excluir($id=null)
        {
            $this->db->where('id',$id);
            if($this->db->delete('tbl_produto')){
                    redirect('produto');
    //            } else{
    //                redirect('usuario/4');
    //            }
            }
        }
        
        
        
        public function atualizar($id=null)
        {
            $this->db->where('id',$id);
            $data['produto'] = $this->db->get('tbl_produto')->result();
            
            $this->load->view('includes/header');   
            $this->load->view('includes/menu');                
            $this->load->view('produto/editar_produto',$data);  
            $this->load->view('includes/footer');              
        }
    
        
        
        public function salvar_atualizacao()
        {   
            $id = $this->input->post('id');
            
            $dados['nome'] = $this->input->post('nome');
                                    
            $this->db->where('id',$id);
            if($this->db->update('tbl_produto',$dados)){
                redirect('produto');
//            }else{
//                redirect('usuario/6');
//            }           
             }

        }


}