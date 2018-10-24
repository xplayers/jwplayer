<?php 
function decode($string)
{
$output = false;
$encrypt_method = "AES-256-CBC";
$secret_key = 'Tu KEY secreta';
$secret_iv = 'Tu IV secreta';
$key = hash('sha256', $secret_key);
$iv = substr(hash('sha256', $secret_iv), 0, 16);
$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
return $output;
}
$url = decode($_GET['v']);
include("encode.php");

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
		<style>body{height:100%;margin:0;overflow:hidden;position:absolute;width:100%} video{min-height:100%;min-width:100%;position:absolute}
				.dow-erlay{
		    position: absolute;
		    z-index: 10;
		    margin: 10px;
		    right: 0;
		}
		.dow-erlaay{
		    position: relative;
		    z-index: 10;
		    margin: 10px;
		    right: 0;
		}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<div class="dow-erlay">
<div class="btn-group">
<ul class="dropdown-menu dropdown-menu-right" style="min-width: 89px; width:89px;">
</ul>
</div>
</div>
<body style="margin: 0px; background-color:#000;">
<div id="player" class="position: absolute;width: 100%;height: 100%;"></div>
<script type="text/javascript" src="https://ssl.p.jwpcdn.com/player/v/8.6.0/jwplayer.js"></script>
<script type="text/javascript">
	jwplayer.key = "XsK+VuloUK5YB+O7Z6I3aD4DP42TKEoQd2MLvA==";
	var playerInstance = jwplayer("player");
		playerInstance.setup({	
			id:'player',
			flashplayer: '//ssl.p.jwpcdn.com/player/v/8.6.0/jwplayer.flash.swf',
			primary: "html5",
sources: [<?php echo "{file:'https://tugastream.club/encrypt/stream.php?video=".openssl($url)."',type:'video/mp4'}";?>],
			tracks: [{ 
				file: '<?php echo "".$_GET['sub']."" ; ?>', 
				label: "Portugues",
				"default": true, 
				kind: "captions"
		}],
		cast: {},
		skin: {
               controlbar: {
                            iconsActive: '#15769F',
                            text: '#15769F'
                           },
               timeslider: {
                              progress: '#15769F'
                             }
             },
		logo: {
			file: 'https://dl.dropboxusercontent.com/s/45jnqec5n5a3vns/logo_player.png',
			position: 'bottom-right'
		},		
		captions: {
			color: '#fff',
			fontSize: 16,
			backgroundOpacity: 0,
			edgeStyle: 'uniform'
		},
		title:' ',
		autostart: false,
		image: 'https://dl.dropboxusercontent.com/s/ti65t16twqtzf0m/player.jpg',
		width: "100%",
		height: "100%"
	});
</script>
</body>
</html>
<script >

