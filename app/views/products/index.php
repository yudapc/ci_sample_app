<thead>
  <tr>
    <td> Product </td>
    <td> Type </td>
    <td> Unit </td>
    <td> Purchase Price </td>
    <td> Selling Price </td>
    <?php if(check_rule(class_name(), 'show')): ?>
      <td> Show </td>
    <?php endif?>

    <?php if(check_rule(class_name(), 'edit')): ?>
      <td> Edit </td>
    <?php endif?>

    <?php if(check_rule(class_name(), 'destroy')): ?>
      <td> Destroy </td>
    <?php endif?>

  </tr>
</thead>
<tbody>
  <?php if ($products) : ?>
    <?php  foreach($products as $index=>$product): ?>
    <tr class="<?php echo ($index%2 == 0) ? 'zebra' : 'cross'?>">
        <td> <?=anchor('products/show/'.$product->id, $product->name)?> </td>
        <td> <?php echo $product->type?> </td>
        <td> <?php echo $product->unit?> </td>
        <td> <?php echo $product->purchase_price?> </td>
        <td> <?php echo $product->selling_price?> </td>

        <?php if(check_rule(class_name(), 'show')): ?>
          <td> <?=anchor('products/show/'.$product->id, '<i class="icon-zoom-in"></i> Show')?> </td>
        <?php endif?>

        <?php if(check_rule(class_name(), 'edit')): ?>
          <td> <?=anchor('products/edit/'.$product->id, '<i class="icon-edit"></i> Edit', array('onclick' => "return confirm('Do you want to edit this data?')"))?> </td>
        <?php endif?>

        <?php if(check_rule(class_name(), 'destroy')): ?>
          <td> <?=anchor('products/destroy/'.$product->id, '<i class="icon-remove-sign"></i> Delete', array('onclick' => "return confirm('Do you want to delete this data?')"))?> </td>
        <?php endif?>
      </tr>
    <?php endforeach;?>
  <?php endif;?>
</tbody>
