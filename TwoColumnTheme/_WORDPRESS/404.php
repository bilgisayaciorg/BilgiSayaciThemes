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
					<li><a href="https://github.com/bilgisayaciorg/BilgiSayaciThemes" class="github"></a></li>
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
				<span class="close"></span>
				<nav>
					<ul>
						<li><a href="javascript:;" title="Arama Formunu Aç" class="trigger-search-form"></a></li>
						<li><a href="https://github.com/bilgisayaciorg/BilgiSayaciThemes" title="Temayı İndir"></a></li>
					</ul>
				</nav>
				<span class="close trigger-search-form"></span>
			</div>
			<?php get_sidebar(); ?>
			<section id="content">
				<article class="panel">
					<div class="title">
						<h1>Aradığınız Sonuç Bulunamadı :(</h1>
					</div>
				</article>
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
	<?php get_footer(); ?>
</body>
</html />