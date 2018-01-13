<div data-theme="a" data-role="footer" data-position="fixed">
	<h3>$copy; 2018 - Kitami,S.Kom	</h3>
		<a data-role="button" href="<?php echo site_url('store/checkout')?>" class="ui-btn-left" data-ajax="false">
			Cart(
			<?php if ($cart == array()): ?>
				0)
			<?php else:
			?>
			<?php 
			$numb=0;
			foreach ($cart as $item) {
				$numb += $item['qty'];

			}
			echo $numb;
			?>
		<?php endif;?>
		</a>

		 <?php if (!$logged_in): ?>
		 	<a data-role="button" data-theme="a" href="<?php echo site_url('user/logout')?>" class="ui-btn-right" data-icon="check" data-iconpos="left"> Keluar</a>
		 <?php else:?>
		 	<a data-role="button" href="<?php echo site_url('user/register')?>" data-icon="check" data-iconppos="left" class="ui-btn-right"> 
		 	Daftar</a>
		 <?php endif?>
</div>
</div></body>
</html>