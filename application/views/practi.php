<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>traer datos</title>
</head>
<body>
<!-- <h1><?=$hola;?></h1> -->

	<?php foreach ($datitos as $q): ?>

		<tr>
		<td><?=$q->password?></td>
 		</tr>
		
	<?php endforeach ?>

</body>
</html>