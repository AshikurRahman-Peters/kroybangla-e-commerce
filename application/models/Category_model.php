<?php
/**
 * Created by PhpStorm.
 * User: OSHIT SUTRA DAR
 * Date: 25-Apr-19
 * Time: 11:13 AM
 */

class Category_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /*==============
    /*GET ALL CATEGORY DATA FROM DATABASE
    ================================================*/
    public function get_all_category()
    {
        $query = $this->db->order_by('cat_id', 'desc')->where('cat_status', 1)->get('tbl_category');
        $res = $query->result();
        return $res;
    }


    /*==============
    /*SAVE DATA IN DATABASE FROM CATEGORY CONTROLLER'S SAVE_CONTROLLER METHOD
    =====================================================================*/
    public function save_category()
    {
        $data['cat_name'] = $this->input->post('cat_name');
        $data['cat_created_by'] = $this->session->userdata('user_name');
        $data['cat_created_date'] = date('d-m-Y H:i:s');
        $data['cat_status'] = 1;
        // if($file_name != null){
        //     $data['cat_logo'] = $file_name;
        // }

       
        $result = $this->db->insert('tbl_category', $data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }


    /*==============
    /*GET CATEGORY DATA FROM DATABASE BY ID FOR EDIT FORM
    ================================================*/
    public function get_category_by_id($id)
    {
        $query = $this->db->where('cat_id', $id)->get('tbl_category');
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }



    /*============================
    /*UPDATE DATA IN DATABASE FROM CATEGORY CONTROLLER'S UPDATE_CATEGORY METHOD
    ======================================================================*/
    public function update_category($id)
    {
        $data['cat_name'] = $this->input->post('cat_name');

        $data['cat_update_by'] = $this->session->userdata('user_username');
        $data['cat_update_date'] = date('d-m-Y H:i:s');
        $data['cat_status'] = 1;

        $this->db->where('cat_id', $id)->update('tbl_category', $data);
        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }


    /*===========================
    /*SOFT DELETE CATEGORY DATA WITHOUT DATABASE
    ==============================================*/
    public function soft_delete_admin($id)
    {
        $this->db
            ->set('cat_update_by', 'liton')
            ->set('cat_update_date', date('Y-m-d H:i:s'))
            ->set('cat_status', 2)
            ->where('cat_id', $id)
            ->update('tbl_category');
        if($this->db->affected_rows() == 1){
            return true;
        }
        else{
            return false;
        }

    }


}