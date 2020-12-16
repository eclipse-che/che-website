<?php
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Features';
  // Define body class
  $bodyClass = 'features';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid" id="top">
    <h1>Features</h1>
    <ul class="col-sm-4">
      <li><a href="#prod-runtimes">Production Runtimes</a></li>
      <li><a href="#dev-mode">“Dev Mode” Your Workspace</a></li>
      <li><a href="#any-ide">Use any IDE</a></li>
      <li><a href="#team">Team-Based Development</a></li>
      <li><a href="#lsp">Language Server Protocol</a></li>
      <li><a href="#debuggers">Debuggers</a></li>
    </ul>
    <ul class="col-sm-4">
      <li><a href="#ssh">SSH / Terminal</a></li>
      <li><a href="#stacks">Stacks</a></li>
      <li><a href="#restful-workspaces">RESTful Workspaces</a></li>
      <li><a href="#cloud-ide">Cloud IDE</a></li>
      <li><a href="#multi-project">Multi-Project</a></li>
      <li><a href="#commands">Commands</a></li>
    </ul>
    <ul class="col-sm-4">
      <li><a href="#previews">Previews</a></li>
      <li><a href="#light-theme">Light Theme</a></li>
      <li><a href="#plug-in">Plug-Ins</a></li>
      <li><a href="#open-source">Open Source</a></li>
      <li><a href="#love">Dogfooded With Love</a></li>
    </ul>
  </div> <!-- /.quick-links -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div class="container-fluid content">
  <div class="row" id="prod-runtimes">
    <div class="col-sm-6">
      <h2>Production Runtimes</h2>
      <p>Eclipse Che works with any container, even multi-container runtimes. Run your workspace on Kubernetes and OpenShift. Use an image from DockerHub, Quay.io, your own private registry or one of the many that ship with Che. Add terminal and language services to dev-enable your production images.</p>
      <p>Under the hood:</p>
      <ul>
        <li>User Container Runtimes</li>
        <li>Sidecar Tooling Container Runtimes</li>
        <li>Terminal</li>
        <li>Pre-Built and Custom stacks</li>
      </ul>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-a-new-kind-of-workspace.png"><img alt="" class="img-responsive" src="../images/features/img-features-a-new-kind-of-workspace.png" /></a>
    </div>
  </div>


  <div class="row" id="dev-mode">
    <div class="col-sm-6">
      <h2>“Dev Mode” your Workspace</h2>
      <p>Inject developer services into a workspace with sidecars for syntax auto-complete, error checking and a debugger. Add intellisense for additional languages with language servers. Enable terminal access with the flick of a switch.</p>
      <p>Under the hood:</p>
      <ul>
        <li>Language Servers</li>
        <li>Intellisense and Refactoring</li>
        <li>Debuggers</li>
        <li>Sidecar containers for the tooling</li>
        <li>Intelligent Commands</li>
        <li>Access Terminal</li>
      </ul>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-dev-mode.png"><img alt="" class="img-responsive" src="../images/features/img-features-dev-mode.png" /></a>
    </div>
  </div>

  <div class="row" id="any-ide">
    <div class="col-sm-6">
      <h2>Use any IDE</h2>
      <p>Start working from any device without installing software by using the built-in Eclipse Che IDE. Or stick with the desktop IDE you love by mounting into the Che workspace. Your choice.</p>
      <p>Under the hood:</p>
      <ul>
        <li>Browser IDE</li>
        <li>Eclipse IDE</li>
        <li>Intellij</li>
      </ul>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-technology-eclipse-desktop.png"><img alt="" class="img-responsive" src="../images/features/img-technology-eclipse-desktop.png" /></a>
    </div>
  </div>

  <div class="row" id="team">
    <div class="col-sm-6">
      <h2>Team-Based Development</h2>
      <p>Create custom stacks - runtimes based on your production images, but with the tools your devs need. Anyone can quickly create a production-compliant app by building on a team stack, or duplicating a workspace. Sample code can even be added for training or to start people on the right foot.</p>
      <p>Under the hood:</p>
      <ul>
        <li>Runtime Stacks</li>
        <li>Project Samples</li>
      </ul>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-kube-powered.png"><img alt="" class="img-responsive" src="../images/features/img-features-kube-powered.png" /></a>
    </div>
  </div>

  <div class="row" id="lsp">
    <div class="col-sm-6">
      <h2>Language Server Protocol</h2>
      <p>The <a href="https://github.com/Microsoft/language-server-protocol" alt="LSP on GitHub">Language Server Protocol</a> was developed by Microsoft, Red Hat and IBM as a common protocol to provide language services including syntax analysis, outlining, and refactoring within the Eclipse Che, or the IDE or editor of their own choice. The protocol can be used between client tools and language servers to integrate features such as auto complete, goto definition, and find all references. Language server is a term being applied to the language intelligence programs that are providing the services.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-intellisense-javascript.png"><img alt="" class="img-responsive" src="../images/features/img-features-intellisense-javascript.png" /></a>
    </div>
  </div>


  <div class="row" id="debuggers">
    <div class="col-sm-6">
      <h2>Debuggers</h2>
      <p>Che can inject debugging agents into a developer workspace to allow variable watching and substitutions, breakpoints, step into / over and other common debug operations. Debuggers can be associated with stacks or individual workspaces.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-intellisense-java.png"><img alt="" class="img-responsive" src="../images/features/img-features-intellisense-java.png" /></a>
    </div>
  </div>


  <div class="row" id="ssh">
    <div class="col-sm-6">
      <h2>Terminal</h2>
      <p>Che enables terminal access to all containers of the workspace. Connect your existing IDE - Eclipse if you like - remotely by syncing /projects folder of your workspace.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-ssh-workspaces.png"><img alt="" class="img-responsive" src="../images/features/img-features-ssh-workspaces.png" /></a>
    </div>
  </div>


  <div class="row" id="stacks">
    <div class="col-sm-6">
      <h2>Stacks</h2>
      <p>A stack is a runtime configuration for a workspace represented by a devfile. It contains components (runtime), projects and commands.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-stacks.png"><img alt="" class="img-responsive" src="../images/features/img-features-stacks.png" /></a>
    </div>
  </div>


  <div class="row" id="restful-workspaces">
    <div class="col-sm-6">
      <h2>RESTful Workspaces</h2>
      <p>All Che services are reachable through RESTful APIs. Che exposes APIs for managing the workspace server. The Che server provides workspace orchestration and user management.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-RESTful.png"><img alt="" class="img-responsive" src="../images/features/img-features-RESTful.png" /></a>
    </div>
  </div>

  <div class="row" id="cloud-ide">
    <div class="col-sm-6">
      <h2>Cloud IDE</h2>
      <p>A no-installation browser IDE and IOE accessible from any local or remote device. Thin, fast, and beautiful - it's the IDE our own engineers wanted. The IDE is packaged as cross-browser JavaScript and CSS, hosted as resources cached by browsers. Work on multiple workspaces in different browser tabs with each tab consuming ~100MB of RAM. It's a smoother interactive experience that doesn't suffer blockages from thrashing when the workspace is remote.</p>
      <p>The tools you expect are there: Eclipse Theia editor, numerous key bindings, globalized keyboard support, and git tooling.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-cloud-ide-7.png"><img alt="" class="img-responsive" src="../images/features/img-features-cloud-ide-7.png" /></a>
    </div>
  </div>


  <div class="row" id="multi-project">
    <div class="col-sm-6">
      <h2>Multi-Project</h2>
      <p>Che is a true IDE platform. Projects can be independently built and run, even though all projects share a common workspace container. Che has support for numerous languages by using VS Code extensions and the language server protocol.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-multi-project-workspaces.png"><img alt="" class="img-responsive" src="../images/features/img-features-multi-project-workspaces.png" /></a>
    </div>
  </div>


  <div class="row" id="commands">
    <div class="col-sm-6">
      <h2>Commands</h2>
      <p>A command is a process that is executed into a container. Commands are provided by workspaces or plugins. When executed, a command is translated into a task and executed into a container, where it can operate against projects or other resources within the container itself. Commands are context sensitive, allowing a user to execute commands across projects and modules, getting context-specific outcomes.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>


    <div class="col-sm-6">
      <a href="../images/features/img-features-commands.png"><img alt="" class="img-responsive" src="../images/features/img-features-commands.png" /></a>
    </div>
  </div>


  <div class="row" id="previews">
    <div class="col-sm-6">
      <h2>Previews</h2>
      <p>Create custom previews that launch files and web pages with the context of your projects and workspaces. Embed preview intelligence inside of commands and workspaces so that logic on how to launch and debug your project travels wherever your workspace goes.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-previews.png"><img alt="" class="img-responsive" src="../images/features/img-features-previews.png" /></a>
    </div>
  </div>
</div>

<div class="tech">
  <div class="container-fluid content">
    <div class="row" id="light-theme">
      <div class="col-sm-6">
          <h2>Light Theme</h2>
          <p>Che, like Yoda, wants to bring balance to the force. Flip a switch and transform the IDE with a dark or light theme. </p>
          <p><a href="#top">Back to Top</a></p>
      </div>
      <div class="col-sm-6">
        <a href="../images/features/img-features-light-theme.png"><img alt="" class="img-responsive" src="../images/features/img-features-light-theme.png" /></a>
      </div>

    </div>
  </div>
</div> <!-- .tech -->

<div class="container-fluid content">

  <div class="row" id="plug-in">
    <div class="col-sm-6">
      <h2>Plugins</h2>
      <p>Che is extensible, by customizing built-in plugins or authoring your own extensions. Package plugins with Che core to create new assemblies installable by your user base. You can write IDE, Che server, or workspace agent plugins, with Che injecting the plug-in into the right location at the right time.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-plugin-framework.png"><img alt="" class="img-responsive" src="../images/features/img-features-plugin-framework.png" /></a>
    </div>
  </div>


  <div class="row" id="open-source">
    <div class="col-sm-6">
      <h2>Open Source to the Core</h2>
      <p>Eclipse Che has been developed over years with contributions from Codenvy, eXo Platform, Red Hat, Salesforce, IBM, SAP, Microsoft, Intuit, WSO2, Serli, and open source individuals from China, Brazil, France, Ukraine, Russia, Canada, India, Sri Lanka, and the United States. It is part of the Eclipse Cloud Development top-level project, and ecosystem contributions are open and encouraged. </p>
      <p>Please participate, even if only spiritually. There are many ways to get involved including starring the <a href="https://github.com/eclipse/che/stargazers">GitHub repo</a>, <a href="https://github.com/eclipse/che/issues">submitting issues</a>, <a href="https://github.com/eclipse/che-docs">writing docs</a>, or <a href="https://www.eclipse.org/che/docs/che-7/contributor-guide/developing-che-theia-plug-ins/">contributing plug-ins</a>.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-open-source-core.png"><img alt="" class="img-responsive" src="../images/features/img-features-open-source-core.png" /></a>
    </div>
  </div>


  <div class="row" id="love">
    <div class="col-sm-6">
      <h2>Dogfooded With Love</h2>
      <p>We built the product that we would love to use everyday. To do that you must build what you eat and eat what you built. Love -- and sometimes frustration -- has poured into Che as our engineers weaned off their favorite IDEs to build Che with Che.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-dogfooded.png"><img alt="" class="img-responsive" src="../images/features/img-features-dogfooded.png" /></a>
    </div>
  </div>
</div> <!-- .container-fluid -->


<div class="twitter-share">
  <h6><i class="fa fa-twitter"></i> Was this page helpful? <a href="https://twitter.com/share">Share it on Twitter</a></h6>
</div>



<?php include '../includes/footer.php'; ?>
