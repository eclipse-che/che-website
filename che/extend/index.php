<?php
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Extend';
  // Define body class
  $bodyClass = 'technology';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>Extend </h1>
    <h3>Get inspired, then extend Che with your own innovations.</h3>
    <img alt="" class="img-responsive" src="../images/hero-technology@2x.png" />
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->

<div class="tech">
  <div class="container-fluid content">
    <h2>An Extensible, Customizable Platform</h2>
    <p><b></b></p>
    <p><b>Plug-ins</b>, to add capabilities to the IDE. Rely on APIs compatible with Visual Studio Code. Plug-ins are isolated and provide their own dependencies packaged in containers.</p>
    <p><b>Workbenches</b>, to create pre-configured Che workspaces with dedicated set of tools.</p> 
    <p><b>Alternate IDEs</b>, to provide specialized tooling within Eclipse Che®. Build your own, based on Eclipse Theia, or pick existing ones like Jupyter.</p>
    <p><b>Marketplace</b> (soon), to easily distribute tools and custom IDEs to users and communities which can be tried online. </p>
    <img alt="" class="img-responsive" src="../images/hero-home-technology.png" />

    <div class="row">
    
      <div class="col-md-4 col-sm-4">
        <h4>Programming Languages</h4>
        <p>Expend the supported languages by relying on the Language Server Protocol.</p>
        <ul>
          <li>Languages</li>
          <li>Completion Statements</li>
          <li>Quick Info Tooltips</li>
        </ul>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>Debuggers</h4>
        <p>Extend debug capabilities with the Debug Adapter Protocol.</p>
        <ul>
          <li>Debug Any Languages</li>
          <li>Custom Debuggers</li>
          <li>Custom Debug Configurations</li>
        </ul>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>Tools Integration</h4>
        <p>Integrate your favorite tools and build tailored developer experiences.</p>
        <ul>
          <li>Linters</li>
          <li>Testing Tools</li>
          <li>Performance Tools</li>
        </ul>
      </div>
      

      <div class="clearfix"></div>

    </div> <!-- .row -->

    <div class="row">
      <div class="col-md-4 col-sm-4">
        <h4>Menus and Commands</h4>
        <p>Add your own items to the IDE components.</p>
        <ul>
          <li>Menus</li>
          <li>Command Palette</li>
          <li>Views and Panels</li>
        </ul>
        </div>

      <div class="col-md-4 col-sm-4">
        <h4>Themes</h4>
        <p>Build custom themes, extend the UI and make it your own.</p>
        <ul>
          <li>Themes</li>
          <li>Layout and UI</li>
          <li>Icon Themes</li>
        </ul>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>Editor</h4>
        <p>Make the default Monaco based editor your home.</p>
        <ul>
          <li>Syntax Colorization</li>
          <li>Snippets</li>
          <li>Formatters</li>
        </ul>
      </div>

      <div class="clearfix"></div>
    </div> <!-- .row -->

    <div class="row">
      <div class="col-md-4 col-sm-4">
        <h4>Keybindings</h4>
        <p>Add new keymaps and popular keybindings to make the environment feels natural.</p>
        <ul>
          <li>Keybindings</li>
        </ul> 
      </div>
      
      <div class="col-md-4 col-sm-4">
        <h4>Assemblies</h4>
        <p>A re-packaging of Eclipse Che distributable as a set of containers for public and private Cloud.</p>
        <ul>
          <li>White Labelled Cloud IDE</li>
        </ul>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>REST APIs</h4>
        <p>The Che server and each workspace has all services programmable through REST APIs.</p>
        <ul>
          <li><a href="https://workspaces.openshift.com/swagger/" target="blank">Che REST APIs</a></li>
        </ul>
      </div>

      

      <div class="clearfix"></div>
    </div> <!-- .row -->


  </div> <!-- .container-fluid -->
</div> <!-- .tech -->

<hr class="gray">
<div class="container-fluid content">
    <h2>Who is Extending Che?</h2>

    <div class="row">
      <div class="col-md-4">
        <a href="<?php echo $rootPath; ?>/extend/more/" target="_blank" style="text-decoration: none"><img src="../images/img-start-plugin.png" style="height: 111px" class="img-responsive" alt="extend-eclipse-che"></a>
        <h3><a href="<?php echo $rootPath; ?>/extend/more/" target="_blank">Interested to Contribute?</a></h3>
        <p>Discover how to build Eclipse Che plug-ins and create your custom Cloud IDEs.</p>
      </div>

      <div class="col-md-4">
        <a href="<?php echo $rootPath; ?>/extend/silexica/" target="_blank"><img src="<?php echo $rootPath; ?>/images/logo-silexica@2x.png" style="height: 111px" class="img-responsive"></a>
        <h3><a href="<?php echo $rootPath; ?>/extend/silexica/" target="_blank">Silexica</a></h3>
        <p>Developer tooling for simplifying multicore platform development based on Che.</p>
      </div>

      <div class="col-md-4">
        <a href="<?php echo $rootPath; ?>/extend/sap/" target="_blank"><img src="../images/logo-extend-sap@2x.jpg" style="height: 111px" alt="Samsung"></a>
        <h3><a href="<?php echo $rootPath; ?>/extend/sap/" target="_blank">SAP IDE for HANA</a></h3>
        <p>A tailored development environment for SAP HANA based on Che.</p>
      </div>
    </div> <!-- .row -->

    <div class="row">
      <p>&nbsp;</p>
      <br>
      <h3 class="col-sm-12">More Case Studies</h3>

      <ul class="col-md-12">
        <li><a href="<?php echo $rootPath; ?>/extend/bitnami/">Bitnami integrates developer containers</a> with frameworks for Express, Laravel, Rails, and others.</li>
      </ul>

    </div> <!-- .row -->
  </div>
</div>

<?php include '../includes/footer.php'; ?>
