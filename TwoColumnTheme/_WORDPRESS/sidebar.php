<aside id="sidebar">
	<div class="wrapper">
		<a href="<?php bloginfo('home'); ?>" class="logo"></a>
		<div class="box">
			<h3>Sayfalar</h3>
			<ul>
				<?php wp_list_pages('title_li=');?>
			</ul>
		</div>
		<div class="box">
			<h3>Sosyal Medya</h3>
			<ul>
				<li><a href="http://www.facebook.com/bilgisayaci" class="facebook" target="_blank">Facebook</a></li>
				<li><a href="https://twitter.com/BilgiSayaci" class="twitter" target="_blank">Twitter</a></li>
			</ul>
		</div>
		<div class="box">
			<h3>Kategoriler</h3>
			<ul>
				<?php wp_list_cats(); ?>
			</ul>
		</div>
		<div class="box">
			<h3>Son Eklenen Yazılar</h3>
			<ul>
				<?php
					global $post;
					$myposts = get_posts('numberposts=5');
					foreach($myposts as $post) :
					setup_postdata($post);
				?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="box">
			<h3>En Çok Okunan Yazılar</h3>
			<ul>
				<?php $bilgisayaci = new WP_Query("showposts=5&orderby=comment_count"); while($bilgisayaci->have_posts()) : $bilgisayaci->the_post();?>
					<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</aside><!-- /sidebar -->