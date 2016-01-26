<?php
$measurements = [
	'awake',
		'happy',
		'hungry',
		'motivated',
		'frustrated',
	]
	?>
<html>
	<head>
		<title>Update</title>
		<link rel="stylesheet" href="/css/style.css" >
		<meta name="viewport" content="width=device-width">
	</head>
<body>
<form action="/update" method="post">
	<?php foreach ( $measurements as $measurement ): ?>
		<div class="measurement-block">
			<div class="icon"></div>


		<label for="<?php echo $measurement; ?>"><?php echo ucfirst( $measurement ); ?></label>
			<input type="range" name="updates[<?php echo $measurement; ?>]" min="0" max="10" />
		</div>
	<?php endforeach; ?>
	<input type="submit">
</form>
</body>
</html>