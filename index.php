<?php
function base64($string)
{
$output = false;
$encrypt_method = "AES-256-CBC";
$secret_key = 'Tu KEY secreta';
$secret_iv = 'Tu IV secreta';
$key = hash('sha256', $secret_key);
$iv = substr(hash('sha256', $secret_iv), 0, 16);
$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
$output = base64_encode($output);
return $output;
}	
?>
<!doctype html>
<html lang="es">

<head>
	<title>JW Player Mp4 Generator</title>
	<meta charset="utf-8">
</head>

<body>
	<div id="wrapper">
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-body">
							<div class="row">

<center><h3 style="color: #191919;">Insert mp4 link</h3></center>
<center><font size="3"><form name="form" action="" method="post" enctype="multipart/form-data"></center>
	<center><label style="color: #191919;">Link MP4:</label><br><textarea class="form-control" name="url" cols="100" rows="4"></textarea><br><br></center>
<center><input type="submit" class="btn btn-primary" value="Generate" title="to post" /></center>
</form></font>		
			<?php
				if (!empty($_POST)) {
					extract($_POST);
					$urlEncode = base64($url);
				}
			?>
			<br>
			</br>
<center><h3 label style="color: #191919;">Copy generated link</label><br><textarea class="form-control" cols="100" rows="4"><?php echo "https://tugastream.club/encrypt/encriptar.php?v=".$urlEncode; ?></textarea><br><br>
</div></center></h3>

								</div>
							</div>
							<div class="row">
								<div class="col-md-9">
									<div id="headline-chart" class="ct-chart"></div>
								</div>
								<div class="col-md-3">

		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
			<center><h3 style="color: #191919;">SUBTITLES</h3></center>
			<center>for subtitles add "&sub=" to the end of generated link | generated_link&sub=link_to_subtitle</center>
			</div><center>
		</footer>
	</div>
</body>

</html>