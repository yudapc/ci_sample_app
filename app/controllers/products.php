<?php
class Products extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('product');
  }

  public function index() {
    $data['products'] = $this->product->all();
    $data['main_view'] = 'products/index';
    $this->render($data);
  }

  public function show($id) {
    $data['product'] = $this->product->find($id);
    $data['main_view'] = 'products/show';
    $this->render($data);
  }

  public function create() {
    $data['form_action'] = 'products/store';
    $data['types_of_products'] = $this->product->types_of_products();
    $data['main_view'] = 'products/create';
    $this->render($data);
  }

  public function store() {
    $data['types_of_products'] = $this->product->types_of_products();
    $data['form_action'] = 'products/store';
    if($this->input->post('submit')) {
      $this->form_validation->set_rules('name', 'Company Name', 'required|is_unique[products.name]');
      $this->form_validation->set_rules('types_of_product', 'Types of Product', 'required');
      $this->form_validation->set_rules('unit', 'Unit', 'required');
      $this->form_validation->set_rules('purchase_price', 'Purchase Price', 'required');
      $this->form_validation->set_rules('selling_price', 'Selling_ rice', 'required');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'name' => $this->input->post('name'),
                 'types_of_product_id' => $this->input->post('types_of_product'),
                 'unit' => $this->input->post('unit'),
                 'purchase_price' => $this->input->post('purchase_price'),
                 'selling_price' => $this->input->post('selling_price'),
              );
        $this->product->create($data);
        redirect('products');
      } else {
        $data['main_view'] = 'products/create';
        $this->render($data);
      }
    } else {
      redirect('products/create');
    }
  }

  public function edit($id) {
    $this->session->set_userdata(array('product_id_edit' => $id));
    $data['product'] = $this->product->find($id);
    $data['types_of_products'] = $this->product->types_of_products();
    $data['form_action'] = 'products/update';
    $data['main_view'] = 'products/edit';
    $this->render($data);
  }

  public function update() {
    $id = $this->session->userdata('product_id_edit');
    $data['product'] = $this->product->find($id);
    $data['types_of_products'] = $this->product->types_of_products();
    $data['form_action'] = 'products/update';
    $data['main_view'] = 'products/edit';

    if($this->input->post('submit')) {
      $this->form_validation->set_rules('name', 'Company Name', 'required');
      $this->form_validation->set_rules('types_of_product', 'Types of Product', 'required');
      $this->form_validation->set_rules('unit', 'Unit', 'required');
      $this->form_validation->set_rules('purchase_price', 'Purchase Price', 'required');
      $this->form_validation->set_rules('selling_price', 'Selling_ rice', 'required');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'name' => $this->input->post('name'),
                 'types_of_product_id' => $this->input->post('types_of_product'),
                 'unit' => $this->input->post('unit'),
                 'purchase_price' => $this->input->post('purchase_price'),
                 'selling_price' => $this->input->post('selling_price'),
              );

        $this->product->update($id, $data);
        redirect('products');
      } else {
        $this->render($data);
      }
    } else {
        $this->render($data);
    }
  }

  public function destroy($id) {
    $this->product->delete($id);
    redirect('products');
  }

}
