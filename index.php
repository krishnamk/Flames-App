<?php
$flames = array(
	"F" => "Friend",
	"L" => "Lover",
	"A" => "Affection",
	"M" => "Marriage",
	"E" => "Enemy",
	"S" => "Sister"
);
if(isset($_POST["names"]))
	if(count($_POST["names"])==2){
		$name1 = strtoupper(str_replace(" ", "", $_POST["names"][0]));
		$name2 = strtoupper(str_replace(" ", "", $_POST["names"][1]));
		if($name1 == $name2)
			$final_result="Names are same!";
		else{
			for($i = 0; $i < strlen($name1); $i++){
				if(isset($name1[$i]))
					for($j = 0; $j < strlen($name1); $j++)
						if(isset($name2[$j]))
							if($name1[$i] == $name2[$j]){
								$name1[$i] = $name2[$j] = "/";
								break;
							}
						}
						$name1 = str_replace("/", "", $name1);
						$name2 = str_replace("/", "", $name2);
						$count = strlen($name1) + strlen($name2);
						$flame = "FLAMES";
						while(strlen($flame)!=1){
							$flame[$count%strlen($flame)] = "/";
							$flame = str_replace("/", "", $flame);
						}
						$final_result=$flames[$flame];
					}
				}?>
				<!DOCTYPE html>
				<html lang="en">
				<head>
					<title>Flames</title>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					<style type="text/css">
					/* Smartphones (portrait and landscape) ----------- */
					@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
						/* Styles */
					}

					/* Smartphones (landscape) ----------- */
					@media only screen and (min-width : 321px) {
						/* Styles */
					}

					/* Smartphones (portrait) ----------- */
					@media only screen and (max-width : 320px) {
						/* Styles */
					}

					/* iPads (portrait and landscape) ----------- */
					@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
						/* Styles */
					}

					/* iPads (landscape) ----------- */
					@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
						/* Styles */
					}

					/* iPads (portrait) ----------- */
					@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
						/* Styles */
					}
/**********
iPad 3
**********/
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio : 2) {
	/* Styles */
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio : 2) {
	/* Styles */
}
/* Desktops and laptops ----------- */
@media only screen  and (min-width : 1224px) {
	/* Styles */
}

/* Large screens ----------- */
@media only screen  and (min-width : 1824px) {
	/* Styles */
}

/* iPhone 4 ----------- */
@media only screen and (min-device-width : 320px) and (max-device-width : 480px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio : 2) {
	/* Styles */
}

@media only screen and (min-device-width : 320px) and (max-device-width : 480px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio : 2) {
	/* Styles */
}

/* iPhone 5 ----------- */
@media only screen and (min-device-width: 320px) and (max-device-height: 568px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){
	/* Styles */
}

@media only screen and (min-device-width: 320px) and (max-device-height: 568px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){
	/* Styles */
}

/* iPhone 6, 7, 8 ----------- */
@media only screen and (min-device-width: 375px) and (max-device-height: 667px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){
	/* Styles */
}

@media only screen and (min-device-width: 375px) and (max-device-height: 667px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){
	/* Styles */
}

/* iPhone 6+, 7+, 8+ ----------- */
@media only screen and (min-device-width: 414px) and (max-device-height: 736px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){
	/* Styles */
}

@media only screen and (min-device-width: 414px) and (max-device-height: 736px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){
	/* Styles */
}

/* iPhone X ----------- */
@media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
	/* Styles */
}

@media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){
	/* Styles */
}

/* iPhone XS Max, XR ----------- */
@media only screen and (min-device-width: 414px) and (max-device-height: 896px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
	/* Styles */
}

@media only screen and (min-device-width: 414px) and (max-device-height: 896px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){
	/* Styles */
}

/* Samsung Galaxy S3 ----------- */
@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){
	/* Styles */
}

@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){
	/* Styles */
}

/* Samsung Galaxy S4 ----------- */
@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
	/* Styles */
}

@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){
	/* Styles */
}

/* Samsung Galaxy S5 ----------- */
@media only screen and (min-device-width: 360px) and (max-device-height: 640px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
	/* Styles */
}

@media only screen and (min-device-width: 360px) and (max-device-height: 640px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){
	/* Styles */
}

</style>
</head>
<body>
	<div class="container">
		<div class="col-md-12 " style="margin-top:30px;">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 style="font-family: monospace;font-size: 40px;font-weight: bold;text-align: center;">Flames</h2>
					<div class="col-md-6" style="margin-top: 10px;">
						<form method="post" action="">
							<div class="form-group">
								<label for="email">Your Name :</label>
								<input type="text" name="names[]" class="form-control" id="name1" placeholder="Enter Your Name" value="<?php if($_REQUEST){ echo $_REQUEST['names'][0]; } ?>" />
							</div>
							<div class="form-group">
								<label for="pwd">Partner Name :</label>
								<input type="text" name="names[]" class="form-control" id="name2" placeholder="Enter Partner Name" value="<?php if($_REQUEST){ echo $_REQUEST['names'][1]; } ?>" />
							</div>
							<button type="submit" class="btn btn-success">Submit</button>
						</form>
					</div>
					<div class="col-md-6" style="margin-top: 10px;">
						<div class="panel panel-default">
							<div class="panel-body">
								<?php if(!$_REQUEST){ ?>
									<img src="images/result.gif" width="100%" >
								<?php }elseif($final_result=="Friend"){?>
									<img src="images/friends.jpg" width="100%" >
								<?php }elseif ($final_result=="Lover") { ?>
									<img src="images/love.svg" width="100%" >
								<?php }elseif ($final_result=="Affection") { ?>
									<img src="images/affection.jpg" width="100%" >
								<?php }elseif ($final_result=="Marriage") { ?>
									<img src="images/marriage.jpg" width="100%" >
								<?php }elseif ($final_result=="Enemy") { ?>
									<img src="images/enemy.jpg" width="100%" >
								<?php }elseif ($final_result=="Sister") { ?>
									<img src="images/sister.jpg" width="100%" >
								<?php }elseif ($final_result=="Names are same!") { ?>
									<img src="images/same.png" width="100%" >
								<?php }?>
								<p style="font-family: monospace;font-size: 25px;font-weight: bolder;text-align: center;"><?php if($_REQUEST){ echo $final_result; }?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>