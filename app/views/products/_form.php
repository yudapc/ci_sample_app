<?php echo form_open($form_action)?>

  <?php echo form_input(
    array(
      'name' => 'name',
      'value' => isset($product->name) ? $product->name : set_value('name'),
      'placeholder' => 'Product',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('name')?>
  <br />

  <?php
    $options = array();
    foreach($this->product->types_of_products() as $types_of_product) {
      $options[$types_of_product->id]= $types_of_product->type;
    }
    echo form_dropdown('types_of_product', $options, $product->types_of_product_id);
  ?>
  <?php echo form_error('types_of_product')?>
  <br />

  <?php echo form_input(
    array(
      'name' => 'unit',
      'value' => isset($product->unit) ? $product->unit : set_value('unit'),
      'placeholder' => 'Unit',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('unit')?>
  <br />

  <?php echo form_input(
    array(
      'name' => 'purchase_price',
      'value' => isset($product->purchase_price) ? $product->purchase_price : set_value('purchase_price'),
      'placeholder' => 'Purchase Price',
      'class' => 'input',
      'onkeypress' => "return restrictInput(this, event, digitsOnly);"
    )
  )?>
  <?php echo form_error('purchase_price')?>
  <br />

  <?php echo form_input(
    array(
      'name' => 'selling_price',
      'value' => isset($product->selling_price) ? $product->selling_price : set_value('selling_price'),
      'placeholder' => 'Selling Price',
      'class' => 'input',
      'onkeypress' => "return restrictInput(this, event, digitsOnly);"
    )
  )?>
  <?php echo form_error('selling_price')?>
  <br />


  <?php echo form_submit('submit', 'Create New Data')?>
<?php echo form_close()?>
