<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('type_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->type)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('game_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->game)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('body_colour_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bodyColour)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('hair_colour_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->hairColour)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('strength')); ?>:
	<?php echo GxHtml::encode($data->strength); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('height')); ?>:
	<?php echo GxHtml::encode($data->height); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('weight')); ?>:
	<?php echo GxHtml::encode($data->weight); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('speed')); ?>:
	<?php echo GxHtml::encode($data->speed); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('health')); ?>:
	<?php echo GxHtml::encode($data->health); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('armor_health')); ?>:
	<?php echo GxHtml::encode($data->armor_health); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('armor_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->armor)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('weapon_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->weapon)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('position_x')); ?>:
	<?php echo GxHtml::encode($data->position_x); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('position_y')); ?>:
	<?php echo GxHtml::encode($data->position_y); ?>
	<br />
	*/ ?>

</div>