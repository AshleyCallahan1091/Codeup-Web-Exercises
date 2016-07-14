<?php

function pageController(){
	$data['favoriteThings'] = ['Captain America', 'Bucky Barnes', 'Sailor Moon', 'Stickers', 'My Laptop', 'Pens', 'Planners', 'Notebooks', 'Hats', 'Totoro', 'Stuffed Animals', 'My Phone', 'Writing', 'Converse', 'Water Bottles', 'Doorknobs'];

	return $data;
}


extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Stuff</title>
	<link href="css/my-favorite-things.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>

	<h1 class="text-center">My Favorite Stuff</h1>
	
		
		


<div class="container">
    <div class="row col-md-6" style="position: relative; margin-left: 25%;" custyle>
    <table class="table table-striped custab">
    	<?php foreach($favoriteThings as $favoriteThing): ?>
		<tr><td class="text-center"><?php echo $favoriteThing; ?></td></tr>
		<?php endforeach; ?>
	</table>
            
    
    </div>
</div>





</body>
</html>






