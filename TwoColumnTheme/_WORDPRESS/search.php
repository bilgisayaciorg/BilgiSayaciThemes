<?php get_header(); ?>
<body>
	<div class="band"></div>
	<div id="site-content">
		<header>
			<span class="menu trigger-menu"></span>
			<a href="/" class="logo"></a>
			<nav>
				<ul>
					<li><a href="javascript:;" class="trigger-search-form search"></a></li>
					<li><a href="javascript:;" class="github"></a></li>
				</ul>
			</nav>
		</header>
		<div id="inner-content">
			<div class="top-nav">
				<div class="search-form">
					<form action="<?php echo bloginfo('url'); ?>" method="get">
						<input type="text" name="s" />
						<input type="submit" value="ARA" />
					</form>
				</div>
				<nav>
					<ul>
						<li><a href="javascript:;" title="Arama Formunu Aç" class="trigger-search-form"></a></li>
						<li><a href="javascript:;" title="Temayı İndir"></a></li>
					</ul>
				</nav>
				<span class="close trigger-search-form"></span>
			</div>
			<?php get_sidebar(); ?>
			<section id="content">
				<h1 class="page-title">Arama Sonuçları</h1>
				<ul class="default-list">
				
					<?php while(have_posts()) : the_post(); ?>
					<li>
						<article class="panel">
							<div class="title">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="info">
								<ul>
									<li class="date"><?php the_time('d.m.Y'); ?></li>
									<li class="category"><?php the_category(', ') ?></li>
									<li class="comment"><?php comments_number('Yorum Yok', '1 Yorum ', '% Yorum' );?></li>
								</ul>
							</div>
							<div class="content">
								<?php the_excerpt(); ?>
							</div>
							<div class="footer">
								<a href="<?php the_permalink(); ?>" class="btn-2"><span>Devamını Oku</span></a>
							</div>
						</article>
					</li>
					<?php endwhile; ?> 

				</ul>
				<div class="pagination">
					<?php paginationFunc(); ?>
				</div>
				<div class="inner-box">
					<h2>Reklam</h2>
					<div class="box-wrapper">
		                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- BilgiSayaci.Org -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-9094668155391031"
						     data-ad-slot="4158196902"
						     data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				</div>
			</section>
		</div><!-- /inner-content -->
	</div>

</body>
</html />