<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('description')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('map_size_x')); ?>:
	<?php echo GxHtml::encode($data->map_size_x); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('map_size_y')); ?>:
	<?php echo GxHtml::encode($data->map_size_y); ?>
	<br />

</div>