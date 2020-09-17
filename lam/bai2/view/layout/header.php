
<header>
	<img src="<?=ROOT?>images/xbanner-trang-lien-he-moi.jpg.pagespeed.ic.FQvWHe7Pcx.jpg">
</header>
		<nav>
			<ul>
                <?php foreach($data['categories'] as $cate):?>
				<li><a href="<?=ROOT ?>danhmuc/<?=$cate->id?>"><?=$cate->cate_name ?></a></li>
                    
                <?php  endforeach ?>
			</ul>
		</nav>