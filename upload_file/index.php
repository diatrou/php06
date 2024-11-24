		<?php
			echo <<<_IATROU
				<!DOCTYPE html>

				<html lang="el-GR">
					<head>
					  <meta charset="utf-8">
					  <meta name="viewport" content="width=device-width, initial-scale=1">

					  <title>Μεταφορά (Uploading) Αρχείων</title>
					  <meta name="description" content="Αντιγραφή Αρχείων.">
					  <meta name="author" content="Εκδότης">

					  <meta property="og:title" content="Μεταφορά (Uploading) Αρχείων">
					  <meta property="og:type" content="Τύπος">
					  <meta property="og:url" content="https://www.">
					  <meta property="og:description" content="Μεταφορά (Uploading) Αρχείων.">
					  <meta property="og:image" content="image.png">

					  <link rel="icon" href="/favicon.ico">
					  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
					  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

					  <link rel="stylesheet" href="css/styles.css?v=1.0">

					</head>

					<body>
						<h1>Μεταφορά (Uploading) Αρχείων</h1>
						<form method='post' action='' enctype='multipart/form-data'>
							<label for="filename">Επιλέξτε και αποστείλατε το αρχείο, κάνοντας κλικ στα παρακάτω κουμπιά. </label><br><br>
							<input type="file" name='filename' size='10'>
							<input type='submit' value='Αποστολή Αρχείου'>
						</form>
			_IATROU;
			
			if ($_FILES)
			{
				$name = $_FILES['filename']['name'];
				move_uploaded_file($_FILES['filename']['tmp_name'], $name);
				echo "Αρχείο που μεταφέρθηκε: '$name'<br><img src='$name'>";
			}
			echo "<script src='js/scripts.js'></script></body></html>";			
		?>
