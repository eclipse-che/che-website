<?php 
  include '../../includes/variables.php';

  // Define page title
  $pageTitle = 'Codenvy: Cloud Workspaces for Development Teams Powered by Eclipse Che';
  // Define body class
  $bodyClass = 'extend-child extend-sap';

  include '../../includes/head.php';
  include '../../includes/header.php';
?>

<div class="jumbotron">
  <div class="container-fluid">
    <h1>Codenvy: Workspaces for Dev Teams</h1>
    <h3> <a target="_blank" href="https://codenvy.com/">Codenvy builds upon Eclipse Che</a> to provide one-click developer environments, team onboarding and collaboration, and a workspace platform for DevOps.</h3>
    <img alt="" class="img-responsive" src="<?php echo $rootPath; ?>/images/codenvy/img-extend-codenvy@2x.png" />  
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->

<hr class="gray">
<div class="container-fluid content whats-new">
  <div class="row">
    <div class="col-md-4">
      <img src="<?php echo $rootPath; ?>/images/codenvy/icon-click@2x.png" alt="" class="img-icon">
      <h3>One click developer environments</h3>
      <p>Create workspaces with production runtimes containing your source code and dev tools. Choose any architecture - from microservices topology to monolith.</p>
      <a href="https://codenvy.com/solutions/bootstrapping/" class="btn-yellow">Learn More</a>
    </div>
    <div class="col-md-4">
      <img src="<?php echo $rootPath; ?>/images/codenvy/icon-platform@2x.png" alt="" class="img-icon">
      <h3>Team onboarding and collaboration</h3>
      <p>Onboard teams with powerful collaboration, workspace automation, and permissions. Devs can use their local IDE or the gorgeous Eclipse Che cloud IDE.</p>
      <a href="https://codenvy.com/product/next-generation" class="btn-yellow">Learn More</a>
    </div>
    <div class="col-md-4">
      <img src="<?php echo $rootPath; ?>/images/codenvy/icon-team-collaboration@2x.png" alt="" class="img-icon">
      <h3>Workspace platform for DevOps</h3>
      <p>Manage workspaces at scale with programmable and customizable infrastructure that lets you control system performance, availability and functionality.</p>
      <a href="https://codenvy.com/product/technology" class="btn-yellow">Learn More</a>
    </div>
  </div>
</div>

<?php include '../../includes/footer.php'; ?>
