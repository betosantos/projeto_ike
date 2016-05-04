<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reembolso extends CI_Controller {
      
	
	public function index()
	{            
            $this->db->select('*');
            $dados['reembolso'] = $this->db->get('tbl_cad_reembolso')->result();
            $this->db->select('*');
            $dados1['servico'] = $this->db->get('tbl_servico')->result();
//            print_r($dados);
//            exit;
            
            $this->load->view('includes/header');  
            $this->load->view('includes/menu');
            $this->load->view('reembolso/index',$dados,$dados1);
            $this->load->view('includes/footer');
	}
        
        public function formulario()
	{   
            $this->db->select('*');
            $dados['reembolso'] = $this->db->get('tbl_cad_reembolso')->result();            
            $dados['servico'] = $this->db->get('tbl_servico')->result();            
            $dados['estado'] = $this->db->query('select * from tbl_estado order by sigla')->result();
            $dados['departamento'] = $this->db->get('tbl_departamento')->result();
            $dados['corporativo'] = $this->db->get('tbl_corporativo')->result();
            //var_dump($dados1);            
            
            $this->load->view('includes/header');   
            $this->load->view('includes/menu');
            $this->load->view('reembolso/formulario',$dados);
            $this->load->view('includes/footer');
	}
        
                
        
        public function cadastrar()
        {
            //$data['mes'] = $this->input->post('d/m/Y',strtotime('mes'));
            $data['mes'] = $this->input->post('mes');
            $data['cliente_id'] = $this->input->post('cliente_id');
            $data['titular'] = $this->input->post('titular');
            $data['sise'] = $this->input->post('sise');
            $data['doc_chegada'] = $this->input->post('doc_chegada');
            $data['servico_id'] = $this->input->post('servico_id');
            $data['sub_servico_id'] = $this->input->post('sub_servico_id');
            $data['atendido'] = $this->input->post('atendido');
            $data['estado_id'] = $this->input->post('estado_id');
            $data['cidade'] = $this->input->post('cidade');
            $data['detalhes'] = $this->input->post('detalhes');
            $data['autorizado_id'] = $this->input->post('autorizado_id');
            $data['falha'] = $this->input->post('falha');
            $data['departamento_id'] = $this->input->post('departamento_id');
            $data['motivo_liberacao'] = $this->input->post('motivo_liberacao');
            $data['analisado_em'] = $this->input->post('analisado_em');
            $data['procede'] = $this->input->post('procede');
            $data['motivo_pend'] = $this->input->post('motivo_pend');
            $data['enviado_financ'] = $this->input->post('enviado_financ');
            $data['reembolso_em'] = $this->input->post('reembolso_em');
            $data['valor'] = $this->input->post('valor');           
            
            
            if($this->db->insert('tbl_cad_reembolso',$data)){
                var_dump($data);
                redirect('reembolso');
//            }else{
//                redirect('usuario/2');
//            }           
            }
        
            }
            
        public function excluir($id=null)
        {
            $this->db->where('id',$id);
            if($this->db->delete('tbl_cad_reembolso')){
                    redirect('reembolso');
    //            } else{
    //                redirect('usuario/4');
    //            }
            }
        }
        
        
        
        public function atualizar($id=null)
        {
            $this->db->where('id',$id);
            $data['reembolso'] = $this->db->get('tbl_cad_reembolso')->result();
            
            $this->load->view('includes/header');   
            $this->load->view('includes/menu');                
            $this->load->view('reembolso/editar_reembolso',$data);  
            $this->load->view('includes/footer');              
        }
    
        
        
        public function salvar_atualizacao()
        {   
            $id = $this->input->post('id');
            
            $dados['mes'] = $this->input->post('mes');
            $dados['cliente_id'] = $this->input->post('cliente_id');
            $dados['titular'] = $this->input->post('titular');
            $dados['sise'] = $this->input->post('sise');
            $dados['doc_chegada'] = $this->input->post('doc_chegada');
            $dados['servico_id'] = $this->input->post('servico_id');
            $dados['sub_servico_id'] = $this->input->post('sub_servico_id');
            $dados['atendido'] = $this->input->post('atendido');
            $dados['estado_id'] = $this->input->post('estado_id');
            $dados['cidade'] = $this->input->post('cidade');
            $dados['detalhes'] = $this->input->post('detalhes');
            $dados['autorizado_id'] = $this->input->post('autorizado_id');
            $dados['falha'] = $this->input->post('falha');
            $dados['departamento_id'] = $this->input->post('departamento_id');
            $dados['motivo_liberacao'] = $this->input->post('motivo_liberacao');
            $dados['analisado_em'] = $this->input->post('analisado_em');
            $dados['procede'] = $this->input->post('procede');
            $dados['motivo_pend'] = $this->input->post('motivo_pend');
            $dados['enviado_financ'] = $this->input->post('enviado_financ');
            $dados['reembolso_em'] = $this->input->post('reembolso_em');            
            $dados['valor'] = $this->input->post('valor');           
                        
            
            $this->db->where('id',$id);
            if($this->db->update('tbl_cad_reembolso',$dados)){
                redirect('reembolso');
//            }else{
//                redirect('usuario/6');
//            }           
             }

        }


}