<!--Written by Josh Giblett-->
<!--User Detail View-->

<!--Page Title-->
<h1><?php echo $model->username?></h1>
<?php
	//Detail View Widget
	$this->widget('bootstrap.widgets.TbDetailView', array(
		'data'=>$model,
        'attributes' => array(
            //firstname field
            array(
            	'name' => 'firstname',
            	'label' => 'First Name'
            ),
            //lastname field
            array(
            	'name' => 'lastname',
            	'label' => 'Last Name'
            ),
            //username field
            array(
            	'name' => 'username',
            	'label' => 'Username'
            ),
            //email field
            array(
            	'name' => 'email',
            	'label' => 'Email'
            ),
            //gender field
            array(
            	'name' => 'gender',
            	'label' => 'Gender'
            ),
			//country field
            array(
            	'name' => 'country',
            	'label' => 'Country',
            ),
            //birthdate field
            array(
            	'name' => 'birthdate',
            	'label' => 'Birth Date',
            	'value' => date('d-m-Y', $model->birthdate),
            ),
            //creationdate field
            array(
            	'name' => 'creationDate',
            	'label' => 'Creation Date',
            	'value' => date('d-m-Y', $model->creationDate),
            ),
            //superuser field
            array(
            	'name' => 'superuser',
            	'label' => 'Administrator',
            	'value' => $model->itemAlias("AdminStatus",$model->superuser)
            ),
            //status field
            array(
            	'name' => 'status',
            	'label' => 'Status',
            	'value' => $model->itemAlias("UserStatus",$model->status)
            ),
        ),
    ));
?>
