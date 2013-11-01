<!--Button View-->
<!--This view is responsible for generating the View Statistics and Play Game buttons positioned in the Hero Table-->
<?php
	//Check whether the label is View Statistics
	if($label == 'View Statistics')
	{
		//If so, generate the View Statistics button
		$this->widget('bootstrap.widgets.TbButton',array(
					'label'=>$label,
					'type'=>'primary',
					'size'=>'large',
					'url'=>$this->createUrl('/ModifiedHero/View',array('id'=>$id)),
				));
	}
	//Check whether the label is Play Game
	else if($label == 'Play Game')
	{
		//Else so, generate the Play Game button
		$this->widget('bootstrap.widgets.TbButton',array(
					'label'=>$label,
					'type'=>'primary',
					'size'=>'large',
					'url'=>$this->createUrl('/ModifiedHero/ConnectToGame',array('id'=>$id)),

				));
	}
	else
	{
		//Else, generate the Remove button
		$this->widget('bootstrap.widgets.TbButton',array(
					'label'=>$label,
					'type'=>'danger',
					'size'=>'large',
					'url'=>$this->createUrl('/ModifiedHero/Delete',array('id'=>$id)),

				));
	}
?>