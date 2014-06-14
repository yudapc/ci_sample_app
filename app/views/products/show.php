<strong>Show Data:</strong>
<hr />
<div class="name">
  Product : <?php echo $product->name ?>
</div>
<div class="types_of_product">
  Type : <?php echo $product->type ?>
</div>
<div class="unit">
  Unit : <?php echo $product->unit ?>
</div>
<div class="purchase_price">
  Purcase Price : <?php echo $product->purchase_price ?>
</div>
<div class="selling_price">
  Selling Price : <?php echo $product->selling_price ?>
</div>

<hr />
<div class="back">
  <?php echo anchor('products', 'Back', array('class' => 'btn btn-info'))?>
</div>
