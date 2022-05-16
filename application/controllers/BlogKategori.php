<?php

class BlogKategori extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("BlogKategoriModel");

    }
    

    public function index(){



        $items = $this->BlogKategoriModel->get_all();

        $viewData = array(
            "blogkategori" => $items,
        );

        $this->load->view("BlogKategoriView", $viewData);

    }

    public function insert(){

        $baslik_post = $this->input->post("baslik_post");

       $insert = $this->BlogKategoriModel->insert(
            array(
                "kategori_baslik"         => $baslik_post,
                "crate_time"     => date("Y-m-d H:i:s")
            )
        );
        $data_process = 'Ekleme işlemi Yapildi';
        $insert_process = $this->BlogKategoriModel->print_process(
            array(
                "yonetici_islem" => $baslik_post . '' .$data_process,
                "process_time" => date("Y-m-d H:i:s")
            )
        );

        if($insert){
            

            redirect(base_url());
            
        }

    }

    public function delete($id){


        $delete = $this->BlogKategoriModel->delete($id);

        $deleting_place = $this->db->where('id',$id)->select('kategori_baslik');

        $data_process = 'Silme işlemi Yapildi';
        $insert_process = $this->BlogKategoriModel->print_process(
            array(
                "yonetici_islem" => $deleting_place . '' .$data_process,
                "process_time" => date("Y-m-d H:i:s")
            )
        );


        redirect(base_url());

    }
    public function update($id){

        $baslik_post_edit = $this->input->post("baslik_edit_post_came");

        $data = array(
            "kategori_baslik"     => $baslik_post_edit,
            "crate_time"     => date("Y-m-d H:i:s")
        );

        $update = $this->BlogKategoriModel->update($id,$data);

        $data_process = 'Düzenleme işlemi Yapildi';
        $insert_process = $this->BlogKategoriModel->print_process(
            array(
                "yonetici_islem" => $baslik_post_edit . '' .$data_process,
                "process_time" => date("Y-m-d H:i:s")
            )
        );

         if($update){
 
             redirect(base_url());
 
         }
    }
    public function go_logScreen(){

        $logs = $this->BlogKategoriModel->get_log();

        $viewDataLog = array(
            "admin" => $logs,
        );
        $this->load->view("LogListeleme", $viewDataLog);
    }



}