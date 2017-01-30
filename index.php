<?php include 'php/head.php'; ?>
</head>
<body>
	<div class="container">
		<?php 
		$pageid=1;
		include 'php/include_login.php';
		include 'php/navbar.php';
		?>
		<div class="content">
			<?php include 'php/hulpvragen/hulpvragen_algemeen.php'; ?>
			<div class='center'><ul><li><a class='loginbutton' href='hulpvragen.php'>Bekijk alle hulpvragen</a></li></ul></div>
		</div>
		<?php
		include 'php/footer.php';
		?>
	</div>
</body>
</html>