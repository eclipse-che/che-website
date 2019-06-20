<?php 
  include '../../includes/variables.php';

  // Define page title
  $pageTitle = 'Extend: Build Plug-Ins, Workbenches and Custom Cloud IDEs Powered by Eclipse Che';
  // Define body class
  $bodyClass = 'extend-child extend-more';

  include '../../includes/head.php';
  include '../../includes/header.php';
?>

<hr class="gray">
<div class="container-fluid content whats-new">
  <div class="row">
    
    <div class="col-md-4">
      <img src="<?php echo $rootPath; ?>/images/codenvy/icon-platform@2x.png" alt="" class="img-icon">
      <h3>Join the community building plug-ins</h3>
      <p>The Eclipse Che community is hanging on Eclipse Mattermost. Reach us, ask questions and get help to build your plug-ins.</p>
      <a href="https://mattermost.eclipse.org/eclipse/channels/eclipse-che-ide2-team" class="btn-yellow">Contact Us</a>
    </div>
    <div class="col-md-4">
      <img src="<?php echo $rootPath; ?>/images/codenvy/icon-click@2x.png" alt="" class="img-icon">
      <h3>Build Plug-Ins for Che with Che</h3>
      <p>You can use Eclipse Che to build plug-ins from Eclipse Che.</p>
      <a href="" class="btn-yellow">Learn More</a>
    </div>
    <div class="col-md-4">
      <img src="<?php echo $rootPath; ?>/images/codenvy/icon-team-collaboration@2x.png" alt="" class="img-icon">
      <h3>Publish Your Plug-Ins</h3>
      <p>Make your plug-ins available to all Eclipse Che users, by adding it to the official registry.</p>
      <a href="https://github.com/eclipse/che-plugin-registry" class="btn-yellow">Learn More</a>
    </div>
  </div>
</div>

<?php include '../../includes/footer.php'; ?>
