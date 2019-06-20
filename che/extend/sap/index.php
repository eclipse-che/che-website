<?php 
  include '../../includes/variables.php';

  // Define page title
  $pageTitle = 'SAP Web IDE powered by Eclipse Che';
  // Define body class
  $bodyClass = 'extend-child extend-sap';

  include '../../includes/head.php';
  include '../../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>SAP Web IDE</h1>
    <h3>Powered by Eclipse Che and SAP HANA, it provides a full development environment with zero installation. <a target="_blank" href="https://hcp.sap.com/try.html">Get Started with SAP Web IDE.</a></h3>
    <img alt="" class="img-responsive" src="<?php echo $rootPath; ?>/images/sap/hero-sap.jpg" />  
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->


<hr class="gray">
<div class="container-fluid content features">
  <div class="row">
    <div class="col-sm-6">
      <a href="../images/sap/simplify-dev-feature.png"><img alt="" class="img-responsive" src="../../images/sap/simplify-dev-feature.png" /></a>
      <h3>Simplify Development</h3>
      <p>SAP Web IDE increases your developer productivity providing wizards, visual drag &amp; drop tools and code editors with code completion. SAP’s best practices are built in.</p>
    </div>

    <div class="col-sm-6">
      <a href="../images/sap/extend-apps-feature.png"><img alt="" class="img-responsive" src="../../images/sap/extend-apps-feature.png" /></a>
      <h3>Extend Apps</h3>
      <p>SAP extensions give you custom features. Wizards and a visual extensibility pane let you add or hide UI elements / controllers, replace data services and customize application texts.</p>
    </div>
  </div> <!-- .row -->

  <div class="row">
    <div class="col-sm-6">
      <a href="../images/sap/integrate-with-hana-feature.png"><img alt="" class="img-responsive" src="../../images/sap/integrate-with-hana-feature.png" /></a>
      <h3>Integrate with SAP HANA</h3>
      <p>Connect with services like SAP Fiori launchpad, Git code repository, Fiori cloud edition, HANA Cloud Integration and HANA Cloud Platform mobile services to further power your app.</p>
    </div>

    <div class="col-sm-6">
      <a href="../images/sap/hybrid-apps-feature.png"><img alt="" class="img-responsive" src="../../images/sap/hybrid-apps-feature.png" /></a>
      <h3>Hybrid Application Toolkit</h3>
      <p>Develop an Apache Cordova hybrid app with support of templates, thus enabling a live preview of your app within SAP Web IDE, on a device emulator, or on a mobile device.</p>
    </div>
  </div> <!-- .row -->
  
  <p class="h3"><a target="_blank" href="https://hcp.sap.com/try.html">Get Started with the SAP Web IDE powered by Eclipse Che</a>.</p>
  <p class="h3"><a target="_blank" href="https://www.youtube.com/playlist?list=PLkzo92owKnVwnV5o1psI7XSA-AquO9_9g">Visit the SAP HANA Academy on YouTube</a>.</p>
</div> <!-- .container-fluid -->


<div class="tech">
  <div class="container-fluid content">
    <h2>Powered by Eclipse Che</h2>
    <p>The SAP Web IDE uses Eclipse Che's workspace server to provision and manage all developer workspaces. SAP created a custom IDE UI that is tailored to their technical stack, extensions, business logic and integrations. The UI communicates over RESTful interfaces with Che to create a seamless experience for the user. <a href="https://eaexplorer.hana.ondemand.com/_item.html?id=10667#!/overview" target="_blank">Learn more</a> about the SAP Web IDE, or <a href="https://hcp.sap.com/try.html" target="_blank">try it out</a> on the SAP HANA Cloud.</p>
    <p>Interested in building your own stacks?  We have <a href="<?php echo $rootPath; ?>/docs/plugins/introduction/" target="_blank">documentation to help you get started with stacks</a> - it's easy! If you have any questions, reach out to <a href="<?php echo $rootPath; ?>/community/">our community</a>.</p>

    <div class="row">
      <div class="col-md-3 col-sm-6">
        <h5>Languages</h5>
        <p>Syntax highlighting, stacks, templates, and code assistants.</p>
        <ul>
          <li>Java</li>
          <li>C++</li>
          <li>JavaSript</li>
          <li>Python</li>
          <li>PHP</li>
          <li>Ruby</li>
          <li>SQL</li>
        </ul>
      </div>

      <div class="col-md-3 col-sm-6">
        <h5>Frameworks</h5>
        <p>Project types, scaffold tool integration, and syntax analysis.</p>
        <ul>
          <li><a href="<?php echo $rootPath; ?>/extend/artik/">Samsung ARTIK</a></li>
          <li><a href="<?php echo $rootPath; ?>/extend/codenvy/">Codenvy</a></li>
          <li><a href="<?php echo $rootPath; ?>/docs/openshift/config/" target="_blank">Red Hat OpenShift</a></li>
          <li>Angular JS</li>
          <li>Docker</li>
          <li>Yeoman</li>
        </ul>
      </div>

      <div class="clearfix"></div>

      <div class="col-md-3 col-sm-6">
        <h5>Builders</h5>
        <p>Builders to manage unit tests, compilation, linking, and dependencies.</p>
        <ul>
          <li>Ant</li>
          <li>Bower</li>
          <li>Grunt</li>
          <li>Gulp</li>
          <li>Maven</li>
          <li>Npm</li>
        </ul>
      </div>

      <div class="col-md-3 col-sm-6">
        <h5>Tools</h5>
        <p>Extensions that integrate the IDE with other parts of the developer tool chain.</p>
        <ul>
          <li>Git</li>
          <li>Orion</li>
          <li>SSH</li>
          <li>Subversion</li>
        </ul>
      </div>
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</div> <!-- .tech -->



<div class="bg-gray5 get-help">
  <div class="container-fluid content">
  <p class="h3"><a target="_blank" href="https://hcp.sap.com/try.html">Get Started with the SAP Web IDE, powered by Eclipse Che</a>.</p>
  <p class="h3"><a target="_blank" href="https://help.hana.ondemand.com/webide/frameset.htm?0221845d73ad403ab2852142f3179177.html">View SAP Web IDE documentation</a>.</p>
  <p class="h3"><a  target="_blank" href="https://github.com/eclipse/che/blob/master/CONTRIBUTING.md">Contribute to the Eclipse Che project</a>.</p>
  </div> <!-- .container-fluid -->
</div> <!-- .get-help -->



<?php include '../../includes/footer.php'; ?>
