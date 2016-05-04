<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

//    public function verificar_sessao() {
//        if ($this->session->userdata('logado') == false) {
//            redirect('welcome/login');
//        } else{
//            redirect(welcome);
//        }
//    }

    public function index() {
        //$this->verificar_sessao();
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('home');
        $this->load->view('includes/footer');
    }

    public function login() {
        $this->load->view('includes/header');
        $this->load->view('login');
        $this->load->view('includes/footer');
    }

//    public function logar() 
//    {
//    $email = $this->input->post('email');
//    $senha = $this->input->post('senha');
//
//    $this->db->where('senha',$senha);
//    $this->db->where('email',$email);
//    $data['usuario'] = $this->db->get('tbl_usuario')->result();
//    
//    if(count($data['usuario'])==1){
//        $dados['nome'] = $data['usuario'][0]->nome;
//        $dados['id'] = $data['usuario'][0]->id;        
//        $this->session->set_userdata($dados);
//        redirect('pf');
//    } else{
//        redirect('welcome/login');
//    }
//    
//    }

}
