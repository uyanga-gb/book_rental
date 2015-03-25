<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class queries extends CI_Model {
    
    public function checkuser()
    {
    	$users = $this->input->post();
    	$query = 'Select count(*) as validID from users where email = ? and password = ?';
    	return $this->db->query($query, $users)->row_array();
    }
    public function getdata()
    {
    	$query = "SELECT *, (select imageid from product_image where product_list.id = product_image.prod_id and (upper(main) = 'Y' or line = 1)) as imagefile FROM `product_list`";
    	return $this->db->query($query)->result_array();
    }
    public function searchdata($search)
    {
    	$searchItems = array('%'.$search.'%', '%'.$search.'%', $search);
    	$query = "SELECT *, (select imageid from product_image where product_list.id = product_image.prod_id and (upper(main) = 'Y' or line = 1)) as imagefile FROM `product_list` where ( (name like ?) or (description like ?) or (id = ?) )";
    	return $this->db->query($query, $searchItems)->result_array();
    }
    public function delete($id)
    {
    	$query = 'delete from product_list where id=?';
    	$this->db->query($query,$id);
    	$query = 'delete from product_image where prod_id=?';
    	$this->db->query($query,$id);
    	return;
    }


}
?>