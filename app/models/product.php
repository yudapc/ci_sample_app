<?php

class Product extends MY_Model {

  public function __construct() {
    parent::__construct();
  }

  var $table = 'products';

  public function all() {
    $this->db->select('products.*, types_of_products.type');
    $this->db->from($this->table);
    $this->db->join('types_of_products', 'types_of_products.id = products.types_of_product_id', 'join');
    return $this->db->get()->result();
  }

  public function find($id) {
    $this->db->select('products.*, types_of_products.type');
    $this->db->from($this->table);
    $this->db->join('types_of_products', 'types_of_products.id = products.types_of_product_id', 'join');
    $this->db->where('products.id', $id);
    return $this->db->get()->row();
  }
  public function types_of_products() {
    return $this->db->get('types_of_products')->result();
  }

}
