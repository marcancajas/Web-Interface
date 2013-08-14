<?php
/* 
    Document   : index.php (JAMplatform v1.0)
    Created on : 19/05/2013, 12:22:53 AM
    Author     : Marc Ancajas
    Layout     : platform.php
    stylesheet : user.css
*/
?>

        <?php $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
    'title' => 'Characters',
    'headerIcon' => 'icon-book',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>

 




<?php
$this->widget('bootstrap.widgets.TbButtonGroup', array(
'type' => 'primary',
'toggle' => 'radio',
'size' => 'small',
'buttons' => array(
array('label'=>'New Character','url' => "#"),
array('label'=>'View Characters','url' => '#'),
array('label'=>'Something','url' => '#'),
),
));
?>

<!-- IFRAME? -->
<?php
$connection = Yii::app()->db; // if not try $connection= new CDbConnection($dsn,$username,$password);

$sql="SELECT  * FROM user";
$users=$connection->createCommand($sql)->queryAll();

/*if ($users) {
    
    echo $users[0]['username'];
} */




?>
    <table class="table">
    <thead>
    <tr>
    <th>#</th>
    <th>Name</th>
    <th>Class</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr class="odd">
    <td><?php echo $users[0]['id']; ?></td><td><?php echo $users[0]['username']; ?></td><td><?php echo $users[0]['email']; ?></td><td><a href="http://192.168.42.254/site/frontend/views/user/myhelloworld.html">PLAY</a> | DELETE | EDIT</td>
    </tr>
    <tr class="even">
    <td><?php echo $users[1]['id']; ?></td><td><?php echo $users[1]['username']; ?></td><td><?php echo $users[1]['email']; ?></td><td><a href="http://192.168.42.254/site/frontend/views/user/myhelloworld.html">PLAY</a> | DELETE | EDIT</td>
    </tr>
    </tbody>
    </table>

    <?php $this->endWidget();?>