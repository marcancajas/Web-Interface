<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('class')); ?>:
	<?php echo GxHtml::encode($data->class); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('description')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('buy')); ?>:
	<?php echo GxHtml::encode($data->buy); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sell')); ?>:
	<?php echo GxHtml::encode($data->sell); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('weight')); ?>:
	<?php echo GxHtml::encode($data->weight); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('defence')); ?>:
	<?php echo GxHtml::encode($data->defence); ?>
	<br />
	*/ ?>

</div>