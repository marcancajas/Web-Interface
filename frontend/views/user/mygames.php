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
    'title' => 'My Games',
    'headerIcon' => 'icon-book',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <table class="table">
    <thead>
    <tr>
    <th>#</th>
    <th>Title</th>
    <th>Developer</th>
    <th>Publisher</th>
    <th>No. of Characters</th>
    </tr>
    </thead>
    <tbody>
    <tr class="odd">
    <td>1</td><td>Mark</td><td>Otto</td><td>CSS</td><td>10</td>
    </tr>
    <tr class="even">
    <td>2</td><td>Jacob</td><td>Thornton</td><td>JavaScript</td><td>20</td>
    </tr>
    <tr class="odd">
    <td>3</td><td>Stu</td><td>Dent</td><td>HTML</td><td>15</td>
    </tr>
    </tbody>
    </table>
    <?php $this->endWidget();?>