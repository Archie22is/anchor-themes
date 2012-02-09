<section class="content">

    <h1><?php echo article_title(); ?></h1>
	
	<article>
	    <?php echo article_html(); ?>
	</article>
</section>

<section class="footnote">
	<p>This article is my <?php echo numeral(article_id() + 1); ?> oldest. It is <?php echo count_words(article_html()); ?> words long. </p>
</section>

