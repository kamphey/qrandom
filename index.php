<?php
$url = "urls.xml" ;
$xml = simplexml_load_file($url);
$link = $xml->url[mt_rand(0,count($xml->url)-1)]->loc ; // Pick a Random Website From Your XML file
$counter = count($xml->url);
?>

<html>
<head>
	<title>Random QYOU Video</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=0.8">

</head>
<body>

	<div id="content">



		<!--Logo-->
		<img id="logo" src="yourlogo.png">
		<!--End Logo-->

		<!--Random Website Button-->
		<a id="mainButton" class="animated infinite jello" ><b>Click</b> Me</a>
		<script type="text/javascript">
		$('#mainButton').click(function(event) {
		window.open("<?php echo $link; ?>", "_self");
		});</script>
		<!--End Button-->

		<!--One sentence pitch-->
		<h2>to discover a 
		<br />random <div class="rw-words rw-words-1"> 
	<span>Amazing</span>
	<span>Inspiring</span>
	<span>Mind-Blowing</span>
	<span>Funny</span> </div>
	<br /> video</h2>
		<!--End One sentence pitch-->

		<!--Counter, automatically shows how many websites you have in your urls.xml file-->
		<p id="counter">
			<?php
				echo $counter
			?>
			Videos in our database
		</p>
		<!--End Counter-->

		<!--Footer-->
		<div id="footer">
			<a href="mailto:submissions@qyoutv.com" id="submit">+ Submit A Video</a>
		</div>
		<!--End Footer-->


	</div>


	<!--Refresh the page, when user hits the back button-->
	<input type="hidden" id="refresh" value="no">
	<script type="text/javascript">
	$(document).ready(function(e) {
    var $input = $('#refresh');
    $input.val() == 'yes' ? location.reload(true) : $input.val('yes');
	});
	</script>
	<!--End Refresh-->


</body>
</html>