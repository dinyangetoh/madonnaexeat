<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="span8">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span3">


		<div id="sidebar">

			
		<ul id="quicklinks" class="nav nav-list">
			<li class="nav-header">User Menu</li>
				<?php

                $menuitem=Menuitems::model()->findAll(array('order'=>'name ASC'));
                foreach ($menuitem as $menu) {
                        ?>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?><?php echo $menu->url; ?>"><?php echo $menu->name; ?></a></li>
		<?php } ?>	
		
		<li class="nav-header">Quick Links</li>
		</ul>             
		
		<?php
			$this->widget('bootstrap.widgets.TbNav', array(
			'type'=>'list',
			'items' =>$this->menu,
                        ));
			?>
             
		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>