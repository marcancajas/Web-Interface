<?php
/* 
    Document   : index.php (JAMplatform v1.0)
    Created on : 19/05/2013, 12:22:53 AM
    Author     : Marc Ancajas
    Layout     : platform.php
    stylesheet : user.css
*/
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<script type="text/javascript">
 
$( init );
 
function init() {
  $('#box').draggable( {
      containment: '#user_contentbox',
      cursor: 'move',
  });
}

$(function() {
$( "#box" ).resizable( {
    containment: 'parent',
    minWidth: '350'  
});
});
</script>

<div id ="box" class="ui-widget-content">
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

 
</div>
    

     

     