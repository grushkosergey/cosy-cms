<div id="sidebar">
        <?php
        /**
        * Состояние пользователя
        */
		if ($user) {
		echo View::factory('/auth/user');
		} else {
		echo View::factory('/auth/main'); 
		}
		?>
		</ul>	
</div>