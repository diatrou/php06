<!DOCTYPE html>

<html lang="el-GR">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <title>Αντιγραφή Αρχείων</title>
	  <meta name="description" content="Αντιγραφή Αρχείων.">
	  <meta name="author" content="Εκδότης">

	  <meta property="og:title" content="Αντιγραφή Αρχείων">
	  <meta property="og:type" content="Τύπος">
	  <meta property="og:url" content="https://www.">
	  <meta property="og:description" content="Αντιγραφή Αρχείων.">
	  <meta property="og:image" content="image.png">

	  <link rel="icon" href="/favicon.ico">
	  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
	  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

	  <link rel="stylesheet" href="css/styles.css?v=1.0">

	</head>

	<body>
	  <!-- Περιεχόμενο... -->
		<?php
			copy('testfile.txt', 'testfile2.txt') or die("Δεν έγινε η αντιγραφή του αρχείου.");
			echo "Το αρχείο αντιγράφηκε με το όνομα 'textfile2.txt'.";
		?>
	  <script src="js/scripts.js"></script>
	</body>
</html>