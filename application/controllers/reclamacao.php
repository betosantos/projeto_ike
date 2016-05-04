<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reclamacao extends CI_Controller {

	
	public function index()
	{           
            $this->db->select('*');
            $dados['reclamacao'] = $this->db->get('tbl_cad_reclamacao')->result();
//            print_r($dados);
//            exit;
            
            $this->load->view('includes/header');  
            $this->load->view('includes/menu');
            $this->load->view('reclamacao/index',$dados);
            $this->load->view('includes/footer');
	}
        
        public function formulario()
	{   
            $this->db->select('*');
            $dados['estado'] = $this->db->get('tbl_estado')->result();
            $dados['prestador'] = $this->db->query('select * from tbl_prestador order by nome')->result();
            $dados['reclamacao'] = $this->db->query('select * from tbl_reclamacao order by nome')->result();
            //$dados['reclamacao'] = $this->db->get('tbl_reclamacao')->result();
            $this->load->view('includes/header');  
            $this->load->view('includes/menu');
            $this->load->view('reclamacao/formulario',$dados);
            $this->load->view('includes/footer');
	}
        
                
        
        public function cadastrar()
        {
            $data['mes'] = $this->input->post('mes');
            $data['interna'] = $this->input->post('interna');
            $data['enviado'] = $this->input->post('enviado');
            $data['reclamante'] = $this->input->post('reclamante');
            $data['genero'] = $this->input->post('genero');
            $data['cpf'] = $this->input->post('cpf');
            $data['data_atend'] = $this->input->post('data_atend');
            $data['sise'] = $this->input->post('sise');
            $data['produto'] = $this->input->post('produto');
            $data['servico'] = $this->input->post('servico');
            $data['sub_servico'] = $this->input->post('sub_servico');
            $data['estado'] = $this->input->post('estado');
            $data['cidade'] = $this->input->post('cidade');
            $data['motivo'] = $this->input->post('motivo');
            $data['problema'] = $this->input->post('problema');
            $data['prestador'] = $this->input->post('prestador');
            $data['agente'] = $this->input->post('agente');
            $data['env_dpto'] = $this->input->post('env_dpto');
            $data['resp_dpto'] = $this->input->post('resp_dpto');
            $data['responsavel'] = $this->input->post('responsavel');
            $data['acao'] = $this->input->post('acao');
            $data['comentario'] = $this->input->post('comentario');
            $data['qualidade'] = $this->input->post('qualidade');
            $data['recebido'] = $this->input->post('recebido');
            $data['respondido'] = $this->input->post('respondido');
            $data['procedencia'] = $this->input->post('procedencia');
            
            if($this->db->insert('tbl_cad_reclamacao',$data)){
                redirect('reclamacao');
//            }else {
//                redirect('usuario/2');
//            }           
            }        
            }
            
        public function excluir($id=null)
        {
            $this->db->where('id',$id);
            if($this->db->delete('tbl_cad_reclamacao')){
                    redirect('reclamacao');
    //            } else{
    //                redirect('usuario/4');
    //            }
            }
        }
                
        
        public function atualizar($id=null)
        {
            $this->db->where('id',$id);
            $data['reclamacao'] = $this->db->get('tbl_cad_reclamacao')->result();
            
            $this->load->view('includes/header');   
            $this->load->view('includes/menu');                
            $this->load->view('reclamacao/editar_reclamacao',$data);  
            $this->load->view('includes/footer');              
        }
    
        
        
        public function salvar_atualizacao()
        {   
            $id = $this->input->post('id');
            
            $dados['mes'] = $this->input->post('mes');
            
                        
            
            $this->db->where('id',$id);
            if($this->db->update('tbl_cad_reclamacao',$dados)){
                redirect('reclamacao');
//            }else{
//                redirect('usuario/6');
//            }           
             }
        }


}