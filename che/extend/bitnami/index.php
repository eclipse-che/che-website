<?php 
  include '../../includes/variables.php';

  // Define page title
  $pageTitle = 'Bitnami Development Containers';
  // Define body class
  $bodyClass = 'extend-child extend-samsung';

  include '../../includes/head.php';
  include '../../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">

    <h1>Bitnami Development Containers</h1>
    <h3>Integrated with Eclipse Che to make development frameworks incredibly simple to access and use. Development Containers are currently available for many popular frameworks, including Express, Laravel, Rails, Symfony and Swift. <a target="_blank" href="<?php echo $rootPath; ?>/getting-started/">Get Started with Che and Bitnami Development Containers.</a></h3>
    <img alt="Bitnami in Che" class="img-responsive" src="bitnami-hero.png" width="1200" />  
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->


<hr class="gray">
<div class="container-fluid content features">
  <div class="row">
    <div class="col-sm-6">
      <a href="bitnami-box1.png"><img alt="Bitnami Benefits" class="img-responsive" src="bitnami-box1.png" /></a>
      <h3>Bitnami Container Benefits</h3>
      <p>Your framework of choice comes pre-installed, configured to work with the included infrastructure containers, & kept up-to-date so, you can start developing in minutes.</p>
    </div>

    <div class="col-sm-6">
      <a href="bitnami-box2.png"><img alt="" class="img-responsive" src="bitnami-box2.png" /></a>
      <h3>Embedded within Che</h3>
      <p>All Bitnami Development Containers are completely integrated with Eclipse Che in order to view and choose from our entire list when configuring your developer workspace.</p>
    </div>
  </div> <!-- .row -->

  <div class="row">
    <div class="col-sm-6">
      <a href="bitnami-box3.png"><img alt="" class="img-responsive" src="bitnami-box3.png" /></a>
      <h3>Easily Deploy from GitHub</h3>
      <p>Deploy your Eclipse Che developer workspace with any Bitnami Development Container straight from GitHub!</p>
    </div>

  </div> <!-- .row -->

<h3 class="text-light">Tutorial Guide: <a target="_blank" href="https://docs.bitnami.com/containers/how-to/use-codenvy-bitnami-containers/">Use Your Favorite Framework In The Cloud With Codenvy And Bitnami Development Containers.</h3>
</div> <!-- .container-fluid -->


<div class="video">
  <div class="container-fluid content">
    <h3>Your Favorite Framework with Che &amp; Bitnami Development Containers</h3>
    <div class="row">
        <a href="https://www.youtube.com/watch?v=pNcOXCV7G8s&t=1210s" target="_blank"><img src="../../images/video-workspaces@2x.png" alt="Bitnami Watch and Learn" class="img-responsive"></a>
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</div> <!-- .video -->


<div class="tech">
  <div class="container-fluid content">
    <h2>Powered by Eclipse Che</h2>
    <p>Bitnami containers extend Che's runtime stack support, providing environments for <a href="https://github.com/bitnami/bitnami-docker-express" target="_blank">Express</a>, <a href="https://github.com/bitnami/bitnami-docker-laravel" target="_blank">Laravel</a>, <a href="https://github.com/bitnami/bitnami-docker-rails" target="_blank">Rails</a>, <a href="https://github.com/bitnami/bitnami-docker-symfony" target="_blank">Symfony</a>, <a href="https://github.com/bitnami/bitnami-docker-swift" target="_blank">Swift</a> and others.</p>
    <p>Interested in building your own stacks?  We have <a href="<?php echo $rootPath; ?>/docs/plugins/introduction/" target="_blank">documentation to help you get started with stacks</a> - it's easy! If you have any questions, reach out to <a href="<?php echo $rootPath; ?>/community/">our community</a>.</p>
  </div> <!-- .container-fluid -->
</div> <!-- .tech -->



<div class="bg-gray5">
  <div class="container-fluid content">
    <p><img alt="" class="img-responsive" src="bitnami-logo.png"></p>
    <br>
    <h2><a target="_blank" href="<?php echo $rootPath; ?>/getting-started/">Get Started</a> with Che and Bitnami Development Containers.</h2>
    <h3><a  target="_blank" href="https://github.com/eclipse/che/blob/master/CONTRIBUTING.md">Contribute to Eclipse Che</a>
  </div> <!-- .container-fluid -->
</div> <!-- .get-help -->


<?php include '../../includes/footer.php'; ?>
