<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('username')); ?>:
	<?php echo GxHtml::encode($data->username); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('salt')); ?>:
	<?php echo GxHtml::encode($data->salt); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password_strategy')); ?>:
	<?php echo GxHtml::encode($data->password_strategy); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('requires_new_password')); ?>:
	<?php echo GxHtml::encode($data->requires_new_password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('login_attempts')); ?>:
	<?php echo GxHtml::encode($data->login_attempts); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('login_time')); ?>:
	<?php echo GxHtml::encode($data->login_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('login_ip')); ?>:
	<?php echo GxHtml::encode($data->login_ip); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('validation_key')); ?>:
	<?php echo GxHtml::encode($data->validation_key); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('create_id')); ?>:
	<?php echo GxHtml::encode($data->create_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('create_time')); ?>:
	<?php echo GxHtml::encode($data->create_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_id')); ?>:
	<?php echo GxHtml::encode($data->update_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_time')); ?>:
	<?php echo GxHtml::encode($data->update_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('firstname')); ?>:
	<?php echo GxHtml::encode($data->firstname); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lastname')); ?>:
	<?php echo GxHtml::encode($data->lastname); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('registrationKey')); ?>:
	<?php echo GxHtml::encode($data->registrationKey); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('country0')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->country0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('gender')); ?>:
	<?php echo GxHtml::encode($data->gender); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('birthdate')); ?>:
	<?php echo GxHtml::encode($data->birthdate); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('superuser')); ?>:
	<?php echo GxHtml::encode($data->superuser); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('creationDate')); ?>:
	<?php echo GxHtml::encode($data->creationDate); ?>
	<br />
	*/ ?>

</div>