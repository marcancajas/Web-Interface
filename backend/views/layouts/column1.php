<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class='row'>
		<div id='sidebar' class='span2'>
			<?php $this->widget('bootstrap.widgets.TbMenu', array(
					'type'=>'list',
					'items'=>array(
						array('label'=>'Users', 'url'=>Yii::app()->getBaseUrl().'/User'),
						array('label'=>'Game', 'url'=>Yii::app()->getBaseUrl().'/Game'),
						array('label'=>'Characters', 'url'=>Yii::app()->getBaseUrl().'/Character'),
						array('label'=>'Weapons', 'url'=>Yii::app()->getBaseUrl().'/Weapon'),
						array('label'=>'Armor', 'url'=>Yii::app()->getBaseUrl().'/Armor'),
						array('label'=>'Character Types', 'url'=>Yii::app()->getBaseUrl().'/Type'),


					),
				)); ?>
		</div>
		<div id="content" class='span10'>
			<?php
				$this->widget('bootstrap.widgets.TbBox', array(
					'title' => $this->sectionName,
					//'headerIcon' => $this->sectionIcon,
					'content' => $content,
					//'htmlOptions'=>array('style'=>"width:100%;"),
				));
			?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>
