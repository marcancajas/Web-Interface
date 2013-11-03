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
          <img src="images/carouselthumb-1.png" alt="">
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
             <h1>Try our demo game now</h1>
              <p class="lead">Our first trial demo game with features like no installation or plugin needed. Just login, connect and play.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/computingdep.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:blue;">Curtin computing expo 2013</h1>
              <p class="lead">Welcome to the exciting tech software expo annually held at Curtin University, Hope you guys are enjoying the demonstrations!</p>
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
          <h2>the story</h2>
          <h5>why we built jam engine.</h5>
          <p>We wanted something, a place.</p>
          <p>Something that enhances life in an engaging experience.</p>
          <p>To have fun, compete and spend time with the people in your life.</p>
          <p>Easily, anywhere, anytime.</p>
          <p>So we created just that, a place where you can seamlessly connect and play together without having to worry about anything.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
         
          <h2>latest technologies</h2>
          <h5>our backbone.</h5>
          <p> - Responsive Web Design. Mobile | Tablet | Desktop</p>
          <p> - Extendable and distributed system architecture which is easily manage through a GUI in the system monitor.</p>
          <p> - Requires no plugin or installation to run games or applications.</p>
          <p> - Cross-platform and cross-browser compatibility, just have the latest popular browsers and your set.</p>
          <p> - HTML5, CSS3, PHP, MYSQL, JAVASCRIPT, WEBGL, C++, SOCKET.IO, NODEJS , APACHE, UBUNTU, YII FRAMEWORK, EASELJS
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
        
   
          <img src="images/jamenginelogo.png" style="margin-top:90px;" height="230" width="230"> 
      
       
          
        </div><!-- /.span4 -->
      </div><!-- /.row -->

    </div><!-- /.container -->