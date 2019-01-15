    <div class="content">
			<?php if( is_singular() ) : ?>
				<?php the_content() ?>
			<?php else : ?>
				<?php the_excerpt() ?>
			<?php endif ?>
	</div>
