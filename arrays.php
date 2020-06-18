

<?php 
$products = [
		["name" => " fish ", "quantity" => 20 , "cost" => 35 ],
		["name" => " apple ", "quantity" => 100 , "cost" => 3 ],
		["name" => " rice ", "quantity" => 50 , "cost" => 20 ],
		["name" => " onioin ", "quantity" => 40 , "cost" => 15.5]
	];
	foreach ($products as $product) {
		format($product);
	}


 ?>