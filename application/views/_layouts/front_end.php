<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
</head>
<body>

	<?= $this->load->view('_components/front_end/header', '' ,TRUE); ?>

	<?= $this->load->view('front-end/'.$section , '' ,TRUE); ?>

	<?= $this->load->view('_components/front_end/footer', '' ,TRUE); ?>

	<?= $this->load->view('_components/front_end/styles', '' ,TRUE); ?>

	<?= $this->load->view('_components/front_end/scripts', '' ,TRUE); ?>
	
</body>
</html>