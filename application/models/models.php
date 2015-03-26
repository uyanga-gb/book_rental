<?php
class models extends CI_Model {

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
        $query = "SELECT *,
                (SELECT imageid 
                    FROM product_image
                    WHERE product_list.id=product_image.prod_id
                    AND (product_image.main='y' OR product_image.line=1)
                ) AS imageid
                FROM product_list";
        return $this->db->query($query)->result_array();
    }
    		
    public function get_images($category_id)
    {
        $query = "SELECT *,
                (SELECT imageid 
                    FROM product_image
                    WHERE product_list.id=product_image.prod_id
                    AND (product_image.main='y' OR product_image.line=1)
                ) AS imageid
                FROM product_list
                Where product_list.category_id=?";
      	return $this->db->query($query,$category_id)->result_array(); 	
    }
    public function getProductID($productID)
    {
        $query = "SELECT *,
                (SELECT imageid 
                    FROM product_image
                    WHERE product_list.id=product_image.prod_id
                    AND (product_image.main='y' OR product_image.line=1)
                ) AS imageid
                FROM product_list
                WHERE id = ?";
        return $this->db->query($query,$productID)->row_array();
    }
}
?>