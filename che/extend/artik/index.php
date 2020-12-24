<?php 
  include '../../includes/variables.php';

  // Define page title
  $pageTitle = 'An IoT IDE powered by Eclipse Che';
  // Define body class
  $bodyClass = 'extend-child extend-samsung';

  include '../../includes/head.php';
  include '../../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>Samsung ARTIK&trade; IDE</h1>
    <h3>Powered by Eclipse Che, it's a toolset that makes it easy to build, deploy and manage IoT applications. Note that this project is no longer supported.</h3>
    <img alt="" class="img-responsive" src="../../images/artik/hero-home-artik.png" />  
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->


<hr class="gray">
<div class="container-fluid content features">
  <div class="row">
    <div class="col-sm-6">
      <a href="../../images/artik/connecting-device-web@2x.png"><img alt="" class="img-responsive" src="../../images/artik/connecting-device-web@2x.png" /></a>
      <h3>Device Discovery</h3>
      <p>Discovery for USB-attached or WiFi-enabled ARTIK devices. Push new code and artifacts to the device and run them. Jump quickly between devices when building more complex applications.</p>
    </div>

    <div class="col-sm-6">
      <a href="../../images/artik/intellisense-web@2x.png"><img alt="" class="img-responsive" src="../../images/artik/intellisense-web@2x.png" /></a>
      <h3>Language Features</h3>
      <p>Broad language support including C/C++, Python, Java and JavaScript. ARTIK SDKs pre-installed. Local or remote debugging with Java or GDB.</p>
    </div>
  </div> <!-- .row -->

  <div class="row">
    <div class="col-sm-6">
      <a href="../../images/artik/java-debug-web@2x.png"><img alt="" class="img-responsive" src="../../images/artik/java-debug-web@2x.png" /></a>
      <h3>Cloud IDE</h3>
      <p>Eclipse Che provides a developer workspace server and browser IDE tailored to ARTIK. Develop anywhere - on your desktop, in the cloud, or even embed the IDE on the device.</p>
    </div>

    <div class="col-sm-6">
      <a href="../../images/artik/stacks-web@2x.png"><img alt="" class="img-responsive" src="../../images/artik/stacks-web@2x.png" /></a>
      <h3>ARTIK &amp; Android Stacks</h3>
      <p>Git, SVN and deployment utilities pre-installed - everything an novice or seasoned ARTIK developer needs to edit, build, deploy and debug IoT applications.</p>
    </div>
  </div> <!-- .row -->

<h3 class="text-light">Visit the <a target="_blank" href="https://www.artik.io/">Samsung ARTIK site</a> for more information on the platform.</h3>
</div> <!-- .container-fluid -->


<div class="video">
  <div class="container-fluid content">
    <h2>Silent Screencasts</h2>

    <div class="row">
      <div class="col-md-4">
        <a href="https://www.youtube.com/watch?v=tgMD2jS9f_w" target="_blank"><img src="../../images/video-workspaces@2x.png" alt="Samsung ARTIK IDE" class="img-responsive"></a>
        <h3><a href="https://www.youtube.com/watch?v=tgMD2jS9f_w" target="_blank">ARTIK IDE Overview </a></h3>
        <p>2 Minutes 3 Second</p>
      </div>

      <div class="col-md-4">
        <a href="https://youtu.be/AVXYcMdKCGg" target="_blank"><img src="../../images/video-run@2x.png" alt="Run, Commands, &amp; Previews" class="img-responsive"></a>
        <h3><a href="https://youtu.be/AVXYcMdKCGg" target="_blank">Commands &amp; Previews</a></h3>
        <p>13 Minutes 38 Seconds</p>
      </div>

      <div class="col-md-4">
        <a href="https://youtu.be/D_BsLN9LcSA" target="_blank"><img src="../../images/video-debug@2x.png" alt="Debugger" class="img-responsive"></a>
        <h3><a href="https://youtu.be/D_BsLN9LcSA" target="_blank">Debugger</a></h3>
        <p>5 Minutes 2 Seconds</p>
      </div>
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</div> <!-- .video -->


<div class="tech">
  <div class="container-fluid content">
    <h2>Powered by Eclipse Che</h2>
    <p>Interested in building your own plug-in?  We have <a href="https://www.eclipse.org/che/docs/che-7/contributor-guide/developing-che-theia-plug-ins/" target="blank">documentation to help you get started</a>, or you can reach out to <a href="<?php echo $rootPath; ?>/community/">our community</a>.</p>
    <img alt="" class="img-responsive" src="../../images/hero-home-technology.png" />

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
          <li><a href="<?php echo $rootPath; ?>/extend/codenvy/">Codenvy</a></li>
          <li><a href="<?php echo $rootPath; ?>/extend/sap/">SAP HANA</a></li>
          <li><a href="https://www.eclipse.org/che/docs/che-7/end-user-guide/importing-kubernetes-applications-into-a-workspace//" target="_blank">Red Hat OpenShift</a></li>
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




<?php include '../../includes/footer.php'; ?>
