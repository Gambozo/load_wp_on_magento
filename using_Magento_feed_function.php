<?php /* called in cms {{block type="core/template" template="page/html/blog.phtml"}}*/?>
<?php function display_feed()
{try { $channel = new Zend_Feed_Rss('https://www.yoursite.com/blog/feed/');} catch (Zend_Feed_Exception $e) {echo ' The news feed is currently not available. ';return;}?>
<div class="Recent_posts">
	<ul>
	<?php foreach ($channel as $key => $item) {?>
		<li class="post format-">
			<a href="<?php echo $item->link(); ?>">
				<div class="photo"><?php echo $item->description(); ?></div>
				<div class="desc">
					<h4><?php echo $item->title(); ?></h4>
					<span class="date"><i class="icon-clock"></i><?php echo date('d/m/Y', strtotime($item->pubDate())); ?></span>
				</div>
			</a>
		</li>
		<?php }?>
	</ul>
</div>
<?php }display_feed();?>
