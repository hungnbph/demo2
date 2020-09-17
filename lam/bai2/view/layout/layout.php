<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>view/layout/css/common.css">
</head>
<body>
	<div class="container">
<?php include_once "header.php" ?>
<main>
<?php include_once $data['page'].".php" ?>
</main>
<?php include_once "footer.php" ?>
</div>
</body>
</html>