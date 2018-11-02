<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2><center>Input Data DATABASE</center></h2>
	<section id="input-form">
		<form action="input_aksi.php" method="post">
			<div class="form">
				<label>id</label>
				<input type="text" name="id">
			</div>
			<div class="form">
				<label>username</label>
				<input type="text" name="username">
			</div>
			<div class="form">
				<label>password</label>
				<input type="password" name="password">
			</div>
			<div class="form">
				<label>level</label>
				<input type="text" name="level">
			</div>
			<div class="form">
				<label>fullname</label>
				<input type="text" name="fullname">
			</div>
			<a href="index.php">Lihat Semua Data</a>
			<div class="form">
				<input type="submit" name="submit"
				value="SUBMIT" class="bg-blue">
			</div>
		</form>
	</section>

</body>
</html>