<article>
    <?php foreach($data['products'] as $products): ?>
			<div class="col">
				<div class="product">
					<a href="#">
						<img src="<?=$products->image?>">
						<h3><?=$products->name?></h3>
						<div class="price"><?=$products->price?></div>
						<div class="desc">
							<p><?=$products->detail?></p>
						</div>
					</a>
				</div>				
			</div>
	<?php endforeach; ?>
</article>