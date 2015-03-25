<?php
class models extends CI_Model {
         // function get_all()
     // {
     //     return $this->db->query("SELECT * FROM products")->result_array();
     //  }
     // function get_product($id)
     // {
     //     $query=$this->db->query("SELECT * FROM products WHERE id = ?", array($id));
     //      return $query->row(); 
     // }
    public	function category()
    {
		 $query=$this->db->query("SELECT count(*) as cat_count, category.category_id, category.category_name
        FROM product_list 
        left join category on product_list.category_id=category.category_id 
        group by category_id
        order by category_id")->result_array();
		return $query;
   	}	
    public function all_images()
    {
        return ($this->db->query("SELECT *  FROM product_list
        left join product_image on product_list.id=product_image.prod_id where product_image.main='y' or product_image.line=1")->result_array());
    }
    		
    public function get_images($category_id)
    {
        $query="SELECT *
        FROM product_list
        left join product_image on product_list.id=product_image.prod_id
        where product_list.category_id=? and (product_image.main='y' or product_image.line=1)";
      	return $this->db->query($query,$category_id)->result_array(); 	
    }

}
?>