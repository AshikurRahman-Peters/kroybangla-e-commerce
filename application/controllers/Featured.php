<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Featured extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->Login_model->is_user_loged_in()){
            redirect('admin');
        }
    }


    /*========
    /*SHOW THE FEATURED ADD FORM
    ================================*/
    public function add_featured()
    {
        $data['Allfeatured'] = $this->Featured_model->get_all_featured();
        $data['content'] = "featured/addFeatured";
        $this->load->view('backend/master_dashboard', $data);
    }



    /*=========
    /*SAVE THE FEATURED DATA WITH Featured_model
    ====================================*/
    public function save_featured()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');

        $config = array(
            'upload_path' => './uploads/featured/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );

        $this->load->library('upload', $config);

        if($this->form_validation->run() == false){
            $data['content'] = "featured/addFeatured";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->upload->do_upload('image')){
                $file_name = $this->upload->data('file_name');
                if($this->Featured_model->save_featured($file_name)){
                    $data['success'] = 'Featured data save successfully';
                }
                else{
                    $data['error'] = 'Featured data save not successfully';
                }
            }
            else{
                if($this->Featured_model->save_featured()){
                    $data['success'] = 'Featured data save successfully';
                }
                else{
                    $data['error'] = 'Featured data save not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_featured');
        }

    }


    /*========================
    /*SHOW EDIT FEATURED FORM
    =================================*/
    public function edit_featured($id)
    {
        $data['editFeatured'] = $this->Featured_model->edit_featured($id);
        $data['content'] = "featured/editFeatured";
        $this->load->view('backend/master_dashboard', $data);
    }


    /*========================
    /*UPDATE THE FEATURED DATA WITH featured_model'S update_featured METHOD
    =================================*/
    public function update_featured($id)
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        //$this->form_validation->set_rules('description', 'Description', 'trim|required');

        $config = array(
            'upload_path' => './uploads/featured/',
            'allowed_types' => "jpg|jpeg|gif|png",
            'encrypt_name' => true
        );

        $this->load->library('upload', $config);

        if($this->form_validation->run() == false){
            $data['content'] = "featured/addFeatured";
            $this->load->view('backend/master_dashboard', $data);
        }
        else{
            if($this->upload->do_upload('image')){
                $file_name = $this->upload->data('file_name');
                if($this->Featured_model->update_featured($file_name, $id)){
                    $data['success'] = 'Featured data Update successfully';
                }
                else{
                    $data['error'] = 'Featured data Update not successfully';
                }
            }
            else{
                if($this->Featured_model->update_featured_without_image($id)){
                    $data['success'] = 'Featured data Update successfully';
                }
                else{
                    $data['error'] = 'Featured data Update not successfully';
                }
            }
            $this->session->set_flashdata($data);
            redirect('add_featured');
        }
    }


    /*========================
    /*SOFT DELETE FEATURED DATA WITHOUT DATABASE
    ==================================================*/
    public function delete_featured($id)
    {
        if($this->Featured_model->featured_soft_delete($id)){
            $data['success'] = "Featured deleted successfully";
        }
        else{
            $data['error'] = "Featured deleted not successfully";
        }
        $this->session->set_flashdata($data);
        redirect('add_featured');
    }

}