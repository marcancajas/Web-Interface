<?php
/**
 * index.php
 *
 * @author: Marc Ancajas <janmarc.ancajas@student.curtin.edu.au>
 * Date: 7/22/12
 * Time: 8:30 PM
 */
?>
<!-- @layout: main -> page_wrapper -->

 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://placehold.it/1170x400&text=First+thumbnail" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome to Jam</h1>
              <p class="lead">Connect, play and interact with friends and the world around you on Jam. Its free! </p>
              <a class="btn btn-large btn-danger" href="<?php echo Yii::app()->request->baseUrl; ?>/site/register">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/1170x400&text=Second+thumbnail" alt="">
          <div class="container">
            <div class="carousel-caption">
               <h1>Jam Engine</h1>
              <p class="lead">We believe that there should be a place to have fun, compete and spend time with the people in your life easily anywhere anytime. So we created just that, a place where you can seamlessly connect and play together without having to worry about anything.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/1170x400&text=Third+thumbnail" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Try our demo game now</h1>
              <p class="lead">We believe that there should be a place to have fun, compete and spend time with the people in your life easily anywhere anytime. So we created just that, a place where you can seamlessly connect and play together without having to worry about anything.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Latest News</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Rankings</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4" style="margin-top:-50px;">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2 style="color:#004099;"><b>Sign up here</b></h2>
          <h4>Under Construction</h4>
         <?php
//Form
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'type'=>'inline',
        'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>true,
));
?>

        <br>
	<?php    
	echo $form->errorSummary($model);
	//Username Textfield
	echo $form->textFieldRow($model,'username',array('class'=>'span3','maxlength'=>45));
	//Email Textfield
	echo $form->textFieldRow($model,'email',array('class'=>'span3','maxlength'=>255));
	//Password Textfield
	echo $form->passwordFieldRow($model,'newPassword',array('class'=>'span3','maxlength'=>50));
	?>
	<div class="form-actions">
		<?php
		//Submit Button
		$this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'success',
			'label'=>'Register',
		));
		?>
	</div>

<?php $this->endWidget(); ?>
          
        </div><!-- /.span4 -->
      </div><!-- /.row -->

  <!-- FOOTER -->
      <footer>
        <p> Jam &copy; 2013 &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
      

    </div><!-- /.container -->