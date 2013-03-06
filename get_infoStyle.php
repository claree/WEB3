 <?php
 
//API==system for giving information that you request

   //pull content from another page ALLLLLL content that the page has which was written out by the browser!!
 	//$content= file_get_contents('http://jsonlint.com/');
 //	$content= file_get_contents('give_info.php');
 

	//pull content from another page
	//$content = file_get_contents('http://localhost/wk5/give_infoElizResume.php?request=animals');
	$content= file_get_contents('give_infoElizResume.php');
	//echo $content;	

	$formatted_content = json_decode($content,true);
	//echo $formatted_content;
	//print_r($formatted_content);
?>

<!doctype>

<html>
	<head>
	<title>Elizabeth Clare Resume </title>
	<style>
		body{
			font-family: serif;
			font-size: 15px;
			margin: 10px;
			zoom: reset;
		}
		h1, h2, h3, p{
			margin:0px;
		}
	
	</style>	
	</head>
	<body>
<header class="header">
	<h1>Elizabeth Clare</h1>
	<h2>Brooklyn, NY</h2>
	<h2>elizabethc.clare@gmail.com</h2>
</header>




<?php 


		// foreach($formatted_content as $t=>$c){
		 foreach($formatted_content as $Resume=>$typeOfExperience){?>
		 if(is_array($typeOfExperience)==true) {?>
		  <article class="<?php echo $typeOfExperience; ?>">
			<h2><?php echo $typeOfExperience;?></h2>
			<?php foreach($typeOfExperience as $place=> $thingIdid){ ?>			
			<p><?php echo $thingIdid; ?></p>
		<?php } 
		} 
?></article><?php
}

?>
		
	</body>
</html>
