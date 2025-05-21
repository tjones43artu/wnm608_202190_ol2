<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product display-flex flex-column">
		<div>
			<img src="/img/$o->thumnail" alt="">
		</div>
		
		<figucaption class="flex-none">
			<div>&dollar;$o->price</div>
			<div>$o->title</div>
		</figcaption>
	</figure>
</div>
HTML;
}

function cartListTemplate($r,$o){
	return $r.<<<HTML 
	<div class="display-flex">
		<div class="flex-none images-thumbs">
			<img src="/img/$o->thumbnail">
		</div>
		<div class="flex-stretch">
			<strong>$->title</strong>
			<div>Delete</div>
		</div>
		<div class="flex-none">
			&dollar;$o->price
		</div>
	</div>
}