<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

  span.full-name {
    color: red;
  }

  ------------------------------------------------------------------------------------------------*/
  table{
    font-size:90%;
  }
  
  table tr.title{
    text-transform:uppercase;
    font-weight:bold;
    background:#ffcc33;
  }
  
  table td, table th {
    text-align:left;
    padding:4px 10px 4px 10px;
  }
  
  .zebra {
    background:#F9E9A9;
  }
  .cross {
    background:#d3d3d3;
  }
	</style>
</head>
<body>

<div id="container">
<h1>Welcome <span class="full-name"><?php echo $this->session->userdata('full_name')?></span> (<?=anchor('login/logout', 'Logout')?>)</h1>

	<div id="body">
    <?=anchor('users/create', 'Create')?>
    <table class="content">
      <tr class="title">
        <td> Username </td>
        <td> Full Name </td>
        <td> E-mail </td>
        <td> Status </td>
        <td> Edit </td>
        <td> Delete </td>
      </tr>

    <?php if ($users) : ?>
      <?php  foreach($users as $index=>$user): ?> 
      <tr class="<?php echo ($index%2 == 0) ? 'zebra' : 'cross'?>">
          <td> <?=$user->username?> </td>
          <td> <?=$user->full_name?> </td>
          <td> <?=$user->email?> </td>
          <td> <?=($user->status == 1) ? anchor('users/deactive/'.$user->id, 'Deactive') : anchor('users/active/'.$user->id, 'Active')?> </td>
          <td> <?=anchor('users/edit/'.$user->id, 'Edit', array('onclick' => "return confirm('Anda yakin akan edit data ini?')"))?> </td>
          <td> <?=anchor('users/delete/'.$user->id, 'Delete', array('onclick' => "return confirm('Anda yakin akan menghapus data ini?')"))?> </td>
        </tr>
      <?php endforeach;?>
    <?php endif;?>

    </table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
