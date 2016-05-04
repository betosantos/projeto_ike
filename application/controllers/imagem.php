<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imagem extends CI_Controller {

//    function Imagem() {
//        parent::Controller();   
//    }
   
    function index() {
        $this->load->view("form");
    }

    function upload() {
        //parametriza as preferências
        $config["upload_path"] = "/projeto_ike/uploads/";
        $config["allowed_types"] = "gif|jpg|png";
        $config["overwrite"] = TRUE;
        $this->load->library("upload", $config);
        //em caso de sucesso no upload
        if ($this->upload->do_upload()) {
            //renomeia a foto
            $nomeorig = $config["upload_path"] . "/" . $this->upload->file_name;
            $nomedestino = $config["upload_path"] . "/minhafoto" .  $this->upload->file_ext;
            rename($nomeorig, $nomedestino);
           
            //define opções de crop
            $config["image_library"] = "gd2";
            $config["source_image"] = $nomedestino;
            $config["width"] = 300;
            $config["height"] = 300;
            $this->load->library("image_lib", $config);
            $this->image_lib->crop();
           
        } else {
            echo $this->upload->display_errors();
        }

    }
} 