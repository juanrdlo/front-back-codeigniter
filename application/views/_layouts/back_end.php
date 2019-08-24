<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
</head>
<body>

	<?= $this->load->view('_components/front_end/header'); ?>

	<?= $this->load->view('back-end/'.$section); ?>

	<?= $this->load->view('_components/front_end/footer'); ?>

	<?= $this->load->view('_components/front_end/styles'); ?>

	<?= $this->load->view('_components/front_end/scripts'); ?>
	
</body>
</html>