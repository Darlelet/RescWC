<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<?php session_start(); ?>
<?php include 'php/options.php'; ?>
<body>
<?php include 'view/header.php'; ?>
<?php include 'view/' . (($opt['require_connection'] &&
(!isset($_SESSION['auth']) || !$_SESSION['auth'])) ? 'login' : 'app') . '.php'; ?>
</body>
<?php include 'view/footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="semantic/dist/semantic.min.js"></script>
<script src="js/process.js"></script>
