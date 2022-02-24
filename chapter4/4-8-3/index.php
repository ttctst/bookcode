<?php
		if ( have_posts() ) {

			
			while ( have_posts() ) {
				the_post();
        // 有文章時會使用到的預設檔案
				get_template_part( 'template-parts/content/content' ); 
			}


		} else {

			// 沒有文章時會使用到的預設檔案
			get_template_part( 'template-parts/content/content', 'none' );  

		}
		?>
