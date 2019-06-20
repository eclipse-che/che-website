<?php 
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Next-Generation Eclipse IDE, Cloud IDE, and Workspace Server';
  // Define body class
  $bodyClass = 'technology';

  include '../includes/head.php';
  include '../includes/header.php';
?>

<div class="jumbotron">
  <div class="container-fluid">
    <h1>Eclipse Che: Development Witchcraft</h1>
    <h3>Eclipse Che is an IDE and developer workspace server that allows anyone to contribute to a project without having to install software. <a href="../getting-started/">Get Started</a></h3>

    <img alt="" class="img-responsive" src="../images/hero-technology@2x.png" />
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->

<div class="features">
  <div class="container-fluid content">
    <h2>A new kind of developer workspace.</h2>

    <div class="row">
      <div class="col-sm-6">
        <a href="../images/features/img-features-a-new-kind-of-workspace.png" target="_blank"><img alt="" height="300" src="../images/features/img-features-a-new-kind-of-workspace.png" class="img-responsive" /></a>
        <h3>Production Runtimes</h3>
        <p>Eclipse Che works with any single or multi-container runtime. Use an image from DockerHub, your own private registry or one of the included Che images... <a href="../features/">Read More</a></p>
      </div>

      <div class="col-sm-6">
        <a href="../images/features/img-features-docker-powered.png" target="_blank"><img alt="" height="333" width="500" src="../images/features/img-features-docker-powered.png" class="img-responsive" /></a>
        <h3>“Dev Mode” your Workspace</h3>
        <p>Workspace runtimes are container-powered, run them in Kubernetes, Docker or OpenShift. Use our all-in-one stacks or author your own. Persist state... <a href="../features/">Read More</a></p>
      </div>
    </div> <!-- .row -->

    <div class="row">
      <div class="col-sm-6">
        <a href="../images/features/img-features-cloud-ide.png" target="_blank"><img alt="" height="333" width="500" src="../images/features/img-features-cloud-ide.png" class="img-responsive" /></a>
        <h3>Cloud IDE</h3>
        <p>A no-installation browser IDE and IOE accessible from any local or remote device. Thin, fast, and beautiful - it's the IDE our own engineers wanted... <a href="../features/">Read More</a></p>
      </div>

      <div class="col-sm-6">
        <a href="../images/features/img-features-eclipse-ide.jpg" target="_blank"><img alt="" height="333" width="500" src="../images/features/img-features-eclipse-ide.jpg" class="img-responsive" /></a>
        <h3>Any Desktop IDE</h3>
        <p>Access the workspace file system from your desktop IDE. Using Che remotely? You can mount the Che workspace over SSH. <a href="../features/index.html">Read More</a></p>
      </div>
    </div> <!-- .row -->

    <a href="../features/" class="btn-yellow">See All Features</a>
  </div> <!-- .container-fluid -->
</div> <!-- .features -->


<hr class="gray">
<div class="container-fluid content">
  <div class="row">
    <div class="col-sm-4">
      <h3>Developers</h3>
      <p>Use Che as an IDE for any framework or programming language. Take your projects and runtimes anywhere with workspace portability and cloud export.</p>
      <p>
      <a href="../getting-started/">Get Started with Che</a><br>
    </div>

    <div class="col-sm-4">
      <h3>Product Owners</h3>
      <p>Embed Che in your own product and control it with APIs. Samsung, SAP and Red Hat use custom assemblies to create great developer experiences.</p>
      <p>
      <a href="../extend/silexica/">Silexica</a><BR>
      <a href="../extend/sap/">SAP Web IDE</a><br>
      <a href="../extend/codenvy/">Codenvy Enterprise Che</a>
    </div>

    <div class="col-sm-4">
      <h3>Extension Providers</h3>
      <p>Package stacks, templates, extensions, and plug-ins to create new developer tooling. Dozens of existing extensions and stacks to leverage.</p>
      <p>
      <a href="../docs/framework-overview.html">Customize Che</a><br>
    </div>
  </div> <!-- .row -->
</div><!-- .contributors -->


<div class="tech">
  <div class="container-fluid content">
    <h2>Technology</h2>
    <p>We are building a world where anyone can contribute to a project without installing software. Che defines a new type of workspace that is composed of projects and runtimes, making its state distributable, portable and versionable. We use VMs, containers, and Web services to bring repeatability, consistency, and performance to workspaces.</p>
    <img alt="" class="img-responsive" src="../images/hero-home-technology.png" />

    <h3>Cloud IDE</h3>
    <p>Che’s browser IDE is built on an extensible plug-in platform that enables panels, menus, wizards, popups and tools. With an Orion editor experience, server-side RESTful code intellisense, and distributable workspaces, the developer experience and non-blocking performance will surprise you. Want to extend the IDE? Check out our <a href="../docs/framework-overview.html" target="blank">extension builder's guide</a> for help.</p>

    <h3>Workspace Server</h3>
    <p>The Che server controls the lifecycle of workspaces and can be customized with plug-ins. Any client can communicate with the workspace server and any spawned workspaces. Read more in our <a href="../docs/what-are-workspaces.html" target="blank">documentation</a>, or see the <a href="../docs/rest-api.html">API</a>.</p>

    <h3>Workspaces</h3>
    <p>Workspaces are isolated and personal spaces for developer work. Whether developers use an API, browser, CLI, or SSH to access a workspace, their projects are synchronized and kept consistent. Plug-ins enable service injection into workspaces based upon project type, making every workspace tailored to the projects it manages. Read more in our <a href="../docs/what-are-workspaces.html" target="blank">documentation</a>.</p>

    <h3>Extensions</h3>
    <p>Che includes a growing set of extensions. You can <a href="../docs/framework-overview.html" target="blank">create and package</a> your own. You can also extend Che's <a href="../docs/recipes.html" target="blank">recipes</a>, <a href="../docs/stacks.html" target="blank">stacks</a>, <a href="../docs/commands-ide-macro.html" target="blank">commands</a>, and <a href="../docs/servers.html" target="blank">machines</a>.</p>
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
          <li>CSharp</li>
          <li>JSON</li>
        </ul>
      </div>

      <div class="col-md-3 col-sm-6">
        <h5>Frameworks</h5>
        <p>Project types, scaffold tool integration, and syntax analysis.</p>
        <ul>
          <li><a href="../extend/silexica/">Silexica</a></li>
          <li><a href="../extend/sap/">SAP HANA</a></li>
          <li>Angular JS</li>
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
        </ul>
      </div>
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</div> <!-- .tech -->


<div class="video">
  <div class="container-fluid content">
    <h2>Silent Screencasts</h2>

    <div class="row">
      <div class="col-md-4">
        <a href="https://youtu.be/zvofry3M27k" target="_blank"><img src="<?php echo $rootPath; ?>/images/video-workspaces@2x.png" alt="Java IntelliSense" class="img-responsive"></a>
        <h3><a href="https://youtu.be/zvofry3M27k " target="_blank">Java IntelliSense </a></h3>
        <p>15 Minutes 1 Second</p>
      </div>

      <div class="col-md-4">
        <a href="https://youtu.be/AVXYcMdKCGg" target="_blank"><img src="<?php echo $rootPath; ?>/images/video-run@2x.png" alt="Run, Commands, &amp; Previews" class="img-responsive"></a>
        <h3><a href="https://youtu.be/AVXYcMdKCGg" target="_blank">Commands &amp; Previews</a></h3>
        <p>13 Minutes 38 Seconds</p>
      </div>

      <div class="col-md-4">
        <a href="https://youtu.be/D_BsLN9LcSA" target="_blank"><img src="<?php echo $rootPath; ?>/images/video-debug@2x.png" alt="Debugger" class="img-responsive"></a>
        <h3><a href="https://youtu.be/D_BsLN9LcSA" target="_blank">Debugger</a></h3>
        <p>5 Minutes 2 Seconds</p>
      </div>
    </div> <!-- .row -->

    <div class="row">
      <h3 class="col-sm-12">More Videos</h3>

      <ul class="col-md-4">
        <li><a href="https://www.youtube.com/watch?v=86QmBy__azY">Terminal</a> 71 Secs</li>
        <li><a href="https://www.youtube.com/watch?v=4kCEimYLw3w">Renaming a Java Class</a> 49 Secs</li>
        <li><a href="https://www.youtube.com/watch?v=sKvwhv5bB3U">Renaming a Java Method</a> 58 Secs</li>
        <li><a href="https://youtu.be/7BtLGqEjfRc">Code Auto-Completion</a> 150 Secs</li>
        <li><a href="https://youtu.be/noKYHILl550">Open Declaration</a> 64 Secs</li>
        <li><a href="https://www.youtube.com/watch?v=3bRBa-2gF3k">Parallel Workspaces</a> 234 Secs</li>
        <li><a href="https://www.youtube.com/watch?v=AjgSp0dkxxU">Swing GUI with VNC</a> 182 Secs</li>
      </ul>

      <ul class="col-md-4">
        <li><a href="https://www.youtube.com/watch?v=X6izqIUlNEM">Portable Workspaces</a> 98 Secs</li>
        <li><a href="https://youtu.be/-GiZe8sksT8">Find Usage</a> 51 Secs</li>
        <li><a href="https://youtu.be/SDCWeoMgoxA">Navigating Classes</a> 55 Secs</li>
        <li><a href="https://youtu.be/5ItEe5BC4MM">Git Diff</a> 21 Secs</li>
        <li><a href="https://youtu.be/Clu6whdnNx4">Git History</a> 52 Secs</li>
        <li><a href="https://youtu.be/ZumoeSL4MGo">Quick Create Project</a> 48 Secs</li>
        <li><a href="https://youtu.be/ZumoeSL4MGo">RESTful Workspaces</a> 48 Secs</li>
      </ul>

      <ul class="col-md-4">
        <li><a href="https://www.youtube.com/watch?v=oWCPczMK-_8">Desktop IDE Over SSH</a> 73 Secs</li>
        <li><a href="https://www.youtube.com/watch?v=TO5Y3zwg6Jk">OpenShift Plug-In</a> 176 Secs</li>
        <li><a href="https://youtu.be/_UVrhcXbz8Q">Clone From GitHub</a> 58 Secs</li>
        <li><a href="https://youtu.be/Uj4lymKAXZg">Define Command</a> 39 Secs</li>
        <li><a href="https://youtu.be/Z15mEmx2-Qg">Build and Run Project</a> 41 Secs</li>
        <li><a href="https://www.youtube.com/watch?v=xKOgJMqPTyg">Run Terminal</a> 305 Secs</li>
        <li><a href="https://www.youtube.com/watch?v=RBU8OF2iMkU">Maven Dynamic Dependencies</a> 128 Secs</li>
      </ul>
    </div> <!-- .row -->
  </div>
</div>



<?php include '../includes/footer.php'; ?>