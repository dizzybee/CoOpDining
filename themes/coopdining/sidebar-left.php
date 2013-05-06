<?php

		if (getNumPages(true)) {
			?>
			<div class="menu">
				<!-- <h3><?php echo gettext("Pages"); ?></h3> -->
				<?php
				printPageMenu("list","page_menu","menu-active","submenu","menu-active"); ?>
			</div>
			<?php
		}
?>
