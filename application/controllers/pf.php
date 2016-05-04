<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pf extends CI_Controller {

    public function index() {
        $dados['pf'] = $this->db->get('tbl_cliente_pf')->result();
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('pf/index', $dados);
        $this->load->view('includes/footer');
    }

    public function formulario() {
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('pf/formulario');
        $this->load->view('includes/footer');
    }

    public function cadastrar() {
        $data['nome'] = $this->input->post('nome');
        $data['cpf'] = $this->input->post('cpf');
        $data['telefone'] = $this->input->post('telefone');
        $data['data'] = $this->input->post('data');


        if ($this->db->insert('tbl_cliente_pf', $data)) {
            $this->session->set_flashdata('sucesso','Seu produto foi cadastrado com sucesso.');
            redirect('pf/formulario');
//            }else{
//                redirect('usuario/2');
//            }           
        }
    }    
    
    public function atualizar($id=null)
        {
            $this->db->where('id',$id);
            $data['pf'] = $this->db->get('tbl_cliente_pf')->result();
            
            $this->load->view('includes/header');   
            $this->load->view('includes/menu');                
            $this->load->view('pf/editar_pf',$data);  
            $this->load->view('includes/footer');              
        }
              
    public function excluir($id=null)
        {
            $this->db->where('id',$id);
            if($this->db->delete('tbl_cliente_pf')){
                    redirect('pf');
    //            } else{
    //                redirect('usuario/4');
    //            }
            }
        }
        
        
    public function salvar_atualizacao()
        {   
            $id = $this->input->post('id');
            
            $dados['nome'] = $this->input->post('nome');
            $dados['cpf'] = $this->input->post('cpf');
                        
            
            $this->db->where('id',$id);
            if($this->db->update('tbl_cliente_pf',$dados)){
                redirect('pf');
//            }else{
//                redirect('usuario/6');
//            }           
             }

        }
        
        

}
