<?php

session_start();
echo session_id();

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Submitted Information</title>
		<style type="text/css">
			#wrapper{
				padding: 20px;
				display:inline-block;
				border: 2px solid black;
			}
			h3 {
				text-decoration: underline;
			}
			button{
				margin-left: 250px;
				background: dodgerblue;
				color: white;
			}
		</style>
	</head>
	<body>
		<div id='wrapper'>
			<h3>Submitted Information</h3>
			<table>
				<tr>
					<td>Your Name:</td>
					<td><?= $_POST['name'];?></td>
				</tr>
				<tr>
					<td>Dojo Location:</td>
					<td><?= $_POST['location'];?></td>
				</tr>
				<tr>
					<td>Favorite Language:</td>
					<td><?= $_POST['language'];?></td>
				</tr>
				<tr>
					<td>Comment (optional):</td>
					<td><?= $_POST['comment'];?></td>
				</tr>
			</table>
			<a href='http://localhost/To%20Do/Advanced/Survey%20Form/'><button>Go back</button></a>
		</div>
	</body>
</html>