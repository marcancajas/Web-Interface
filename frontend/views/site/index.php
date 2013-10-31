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
              <p class="lead">Try our first trial demo game with features like no installation or plugin needed. Just login, connect and play.</p>
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
          <p>This is where community users keep track with the latest updates and events on Jam.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Rankings</h2>
          <p>A ranking of users depending on the games they play, areas and specialities.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <img src="images/repair.png" height="100" width="100"> 
          <p>This is a beta version, A quick sign up form will be provided here in the future.</p>
       
          
        </div><!-- /.span4 -->
      </div><!-- /.row -->

    </div><!-- /.container -->