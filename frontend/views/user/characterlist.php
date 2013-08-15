<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
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
