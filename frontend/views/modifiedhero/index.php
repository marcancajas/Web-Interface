<!--Written by Josh Giblett-->
<!--Hero Index View-->
<!--Grid View Widget-->
<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'type'=>'striped bordered',
		'dataProvider'=>$dataProvider,
		'template'=>"{items}",
		'columns'=>array(
			//name field
			array(
				'name'=>'name',
				'header'=>'Name',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;', 'width'=>'5px'),
			),
			//type field
			array(
				'name'=>'type_id',
				'header'=>'Type',
				'value'=>'$data->type',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'text-align:center;vertical-align:middle;', 'width'=>'25px'),
			),
			//game field
			array(
				'name'=>'game_id',
				'header'=>'Game',
				'value'=>'$data->game',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'text-align:center;vertical-align:middle;', 'width'=>'40px'),
			),
			array(
				'value'=>'$this->grid->getOwner()->renderPartial("button",array("id"=>$data->id, "label"=>"View Statistics"))',
				'htmlOptions'=>array('style'=>'text-align:center;vertical-align:middle;', 'width'=>'40px'),
			),
			array(
				'value'=>'$this->grid->getOwner()->renderPartial("button",array("id"=>$data->id, "label"=>"Play Game"))',
				'htmlOptions'=>array('style'=>'text-align:center;vertical-align:middle;', 'width'=>'40px'),
			),
			array(
				'value'=>'$this->grid->getOwner()->renderPartial("button",array("id"=>$data->id, "label"=>"Remove"))',
				'htmlOptions'=>array('style'=>'text-align:center;vertical-align:middle;', 'width'=>'40px'),
			),
		),
    ));
    $this->widget('bootstrap.widgets.TbButton',array(
					'label'=>'Create Hero',
					'type'=>'primary',
					'size'=>'large',
					'url'=>$this->createUrl('/ModifiedHero/Create'),
				));
    ?>
