<?php
class Products extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('product');
  }

  public function index() {
    $data['products'] = $this->product->all();
    $this->render($data);
  }

  public function show($id) {
    $data['product'] = $this->product->find($id);
    $this->render($data);
  }

  public function create() {
    $data['form_action'] = 'products/store';
    $this->render($data);
  }

  public function store() {
    $data['form_action'] = 'products/store';
    if($this->input->post('submit')) {
      $this->validate();
      if($this->form_validation->run() == TRUE) {
        $this->product->create($this->inputs());
        redirect('products');
      } else {
        $this->render($data);
      }
    } else {
      redirect('products/create');
    }
  }

  public function edit($id) {
    $this->session->set_userdata(array('product_id_edit' => $id));
    $data['product'] = $this->product->find($id);
    $data['form_action'] = 'products/update';
    $this->render($data);
  }

  public function update() {
    $id = $this->session->userdata('product_id_edit');
    $data['product'] = $this->product->find($id);
    $data['form_action'] = 'products/update';

    if($this->input->post('submit')) {
      $this->validate();
      if($this->form_validation->run() == TRUE) {
        $this->product->update($id, $this->inputs());
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

  private function validate() {
    if(in_array(action_name(), array('create', 'store'))) {
      $this->form_validation->set_rules('name', 'Company Name', 'required|is_unique[products.name]');
    } else {
      $this->form_validation->set_rules('name', 'Company Name', 'required');
    }
    $this->form_validation->set_rules('types_of_product', 'Types of Product', 'required');
    $this->form_validation->set_rules('unit', 'Unit', 'required');
    $this->form_validation->set_rules('purchase_price', 'Purchase Price', 'required');
    $this->form_validation->set_rules('selling_price', 'Selling Price', 'required');
  }

  private function inputs() {
    $data = array(
             'name' => $this->input->post('name'),
             'types_of_product_id' => $this->input->post('types_of_product'),
             'unit' => $this->input->post('unit'),
             'purchase_price' => $this->input->post('purchase_price'),
             'selling_price' => $this->input->post('selling_price'),
          );
    return $data;
  }
}
