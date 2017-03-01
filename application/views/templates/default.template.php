<?php
echo link_tag(css_url()."bootstrap.css");
?>
<html>
	<head>
		<script src="<?=js_url().'jquery-3.1.1.min.js'?>"></script>
		<script src="<?=js_url().'bootstrap.js'?>"></script>
	</head>
	<body>	
		HEADER FARMER
		<?=$content;?>
		FOOTER FARMER
	</body>
</html>
