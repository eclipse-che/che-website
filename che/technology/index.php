<?php
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Next-Generation Eclipse IDE, Cloud IDE, and Workspace Server';
  // Define body class
  $bodyClass = 'technology';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="features">
  <div class="container-fluid content">
    <h2>How Eclipse Che Works</h2>

    <div class="row">
      <div class="col-sm-5">
        <a href="../images/features/img-features-a-new-kind-of-workspace.png" target="_blank"><img alt="" height="300" src="../images/features/img-features-a-new-kind-of-workspace.png" class="img-responsive" /></a>
      </div>
      <div class="col-sm-7">
        <h3>The entire development workflow in Kubernetes</h3>
        <p>Eclipse Che makes kubernetes development easier, faster and safer for developer teams, providing one-click developer workspaces and eliminating local installation and configuration of Docker or Kubernetes for your entire team. Che brings your Kubernetes application into your development environment and provides an optional in-browser IDE, allowing you to code, build, test and run applications... <a href="../features/">Read More</a>.</p></p>
      </div>
    </div> <!-- .row -->
    <div class="row">
      <div class="col-sm-7">
        <h3>Centrally hosted Kubernetes workspaces for teams</h3>
        <p>Eclipse Che runs in containers. All of the developer tools, the IDE and its plugins are running as containerized services. You don’t have to worry about how to configure them, install their dependencies or keeping them alive - everything is packaged together in the container. Che allows you to establish a centralized configuration for your team’s development environment and technology stacks... <a href="../features/">Read More</a>.</p>
      </div>
      <div class="col-sm-5">
        <a href="../images/features/img-features-docker-powered.png" target="_blank"><img alt="" height="333" width="500" src="../images/features/img-features-docker-powered.png" class="img-responsive" /></a>
      </div>
    </div> <!-- .row -->

    <div class="row">
      <div class="col-sm-5">
        <a href="../images/features/img-features-cloud-ide.png" target="_blank"><img alt="" height="333" width="500" src="../images/features/img-features-cloud-ide.png" class="img-responsive" /></a>
      </div>

      <div class="col-sm-7">
        <h3>In-browser extensible IDE</h3>
        <p>Eclipse Che comes with a  web-based IDE, based on Eclipse Theia which provides an in-browser VSCode experience complete with the latest tooling protocols: language server, debug adapter and <b>compatibility with VSCode extensions.</b> If you prefer desktop IDE’s, Che supports that too and you get the advantages of Che’s workspaces. Eclipse Che also gives you access to interact with your containers, instruct commands and terminals.</p>
      </div>
    </div> <!-- .row -->
    <div class="row text-center">
      <div class="col-lg-12">
        <a href="../features/" class="btn-yellow">More Features</a>
      </div>
    </div>

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




<?php include '../includes/footer.php'; ?>