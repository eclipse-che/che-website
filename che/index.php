<?php

  include 'includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | The Kubernetes-Native IDE for Developer Teams';
  // Define body class
  $bodyClass = 'index';

  include 'includes/head.php';
  include 'includes/header.php';
?>

<div class="jumbotron">
  <div class="container-fluid">
    <h1>The Kubernetes-Native IDE for Developer Teams</h1>
    <img alt="" class="img-responsive" src="<?php echo $rootPath; ?>/images/hero-home@2x.jpg" />
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->

<div class="bg-dark-space">
  <div class="container-fluid content">
    <div class="row">
      <div class="col-md-11">
        <h2>Eclipse Che®</h2>
        <h1 class="h3">The Kubernetes-Native IDE for Developer Teams</h1>
        <p>Eclipse Che makes Kubernetes development accessible for developer teams, providing one-click developer workspaces and eliminating local environment configuration for your entire team. Che brings your Kubernetes application into your development environment and provides an in-browser IDE, allowing you to code, build, test and run applications exactly as they run on production from any machine.</p>
      </div>
    </div>
  </div>
</div>

<hr class="gray">
<div class="container-fluid content start-working">
  <h3>Start working with Che</h3>
  <div class="row">
    <div class="col-sm-4 col-md-3">
        <div class="border media">
         <a href="https://che.openshift.io/" class="media-body">
           <p>Launch</p>
           <h4>Custom</h4>
         </a>
         <p class="media-content">Create workspaces for any language/framework.</p>
        </div>
    </div>
    <div class="col-sm-4 col-md-3">
        <div class="border media">
         <a href="https://che.openshift.io/f?url=https://raw.githubusercontent.com/redhat-developer/devfile/master/getting-started/vertx/devfile.yaml" class="media-body">
           <p>Launch</p>
           <h4>Vert.x Verticle</h4>
         </a>
         <p class="media-content">Example web app for reactive applications on the JVM.</p>
        </div>
    </div>
    <div class="col-sm-4 col-md-3">
        <div class="border media">
         <a href="https://che.openshift.io/f?url=https://raw.githubusercontent.com/redhat-developer/devfile/master/getting-started/angular/devfile.yaml" class="media-body">
           <p>Launch</p>
           <h4>Angular 2</h4>
         </a>
         <p class="media-content">Official Angular 2 quick start tutorial.</p>
        </div>
    </div>
    <div class="col-sm-12 col-md-3">
        <a href="<?php echo $rootPath; ?>/getting-started/cloud/" class="btn-gray80">All SaaS Workspace Templates</a>
        <a href="<?php echo $rootPath; ?>/docs/che-7/che-quick-starts/" class="btn-yellow">Download</a>
    </div>
  </div>
</div>

<div class="bg-dark-space">
  <div class="container-fluid content">
    <div class="row">
        <div class="col-md-12">
            <h3>How Eclipse Che Works</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <ul>
                <li>One-click centrally hosted workspaces</li>
                <li>Kubernetes-native containerized development</li>
                <li>In-browser extensible IDE</li>
            </ul>
            <p></p>
        </div>
        <div class="col-md-6">
            <a href="<?php echo $rootPath; ?>/technology" class="btn-yellow">See how it works</a>
        </div>
    </div>
  </div>
</div>

<div class="bg-purple whats-new">
  <div class="container-fluid content">
    <h2>What's New</h2>
    <div class="row">
        <div class="col-md-6">
          <img src="images/img-home-che6@2x.png" alt="image by doug walters" class="img-responsive">
          <h3>Eclipse Che 7.0</h3>
          <p>Che 7 takes the best of Kubernetes to code your Kubernetes applications the easy way.</p>
          <a href="https://che.eclipse.org/eclipse-che-7-is-now-available-40ae07120b38" target="_blank" class="btn-yellow">Learn about Che 7.0</a>
        </div>
        <div class="col-md-6">
          <img src="images/img-home-che5@2x.png" alt="Che 7.0" class="img-responsive">
          <h3>Eclipse Che</h3>
          <p>Centralized developer environments running on Kubernetes. Devfile: Developer Workspaces as Code. Kubernetes-native tools for Kubernetes developer teams</p>
          <a href="<?php echo $rootPath; ?>/technology" class="btn-yellow">Learn More</a>
        </div>
    </div>
 </div>
</div>

<hr class="gray">
<div class="container-fluid content contributors">
  <div class="row">
    <div class="col-md-12">
        <h2>Contributors</h2>
    </div>
    <div class="col-md-12">
        <ul>
        <li><img src="images/logo-bitnami@2x.png" alt="Bitnami" style="width: 190px" class="img-responsive"></li>
        <li><img src="images/logo-broadcom@2x.png" alt="Broadcom" style="width: 190px" class="img-responsive"></li>
        <li><img src="images/logo-codenvy-black.png" alt="Codenvy" class="img-responsive"></li>
        <li><img src="images/logo-docker@2x.png" alt="Docker" style="width: 190px" class="img-responsive"></li>
        <li><img src="images/logo-eclipsesource@2x.png" alt="Eclipse Source" class="img-responsive"></li>
        </ul>
    </div>
    <div class="col-md-12">
        <ul>
        <li><img src="images/logo-exo@2x.png" alt="eXo Platform" class="img-responsive"></li>
        <li><img src="images/logo-gsoc@2x.png" alt="Google Summer of Code" style="width: 190px" class="img-responsive"></li>
        <li><img src="images/logo-ibm@2x.png" alt="IBM" class="img-responsive"></li>
        <li><img src="images/logo-kichwa@2x.png" alt="Kichwa Coders" class="img-responsive"></li>
        <li><img src="images/logo-nuxeo@2x.png" alt="Nuxeo" style="width: 190px" class="img-responsive"></li>
        </ul>
    </div>
    <div class="col-md-12">
        <ul>
        <li><img src="images/logo-platformio@2x.png" alt="Platform.io" style="width: 190px" class="img-responsive"></li>
        <li><img src="images/logo-redhat@2x.png" alt="RedHat" class="img-responsive"></li>
        <li><img src="images/logo-restlet@2x.png" alt="Restlet" class="img-responsive"></li>
        <li><img src="images/logo-samsung@2x.png" alt="Samsung" class="img-responsive"></li>
        <li><img src="images/logo-sap@2x.png" alt="SAP" class="img-responsive"></li>
        </ul>
    </div>
    <div class="col-md-12">
        <ul>
        <li><img src="images/logo-serli@2x.png" alt="Serli" class="img-responsive"></li>
        <li><img src="images/logo-silexica@2x.png" alt="Silexica" class="img-responsive"></li>
        <li><img src="images/logo-smartbear@2x.png" alt="SmartBear" class="img-responsive"></li>
        <li><img src="images/logo-software-ag@2x.png" alt="Software AG" class="img-responsive"></li>
        <li><img src="images/logo-tomitribe@2x.png" alt="Tomibrite" class="img-responsive"></li>
        </ul>
    </div>
    <div class="col-md-12">
        <ul>
        <li><img src="images/logo-typefox@2x.png" alt="Type Fox" class="img-responsive"></li>
        <li><img src="images/logo-wso2@2x.png" alt="WSO2" class="img-responsive"></li>
        <li><img src="images/logo-yatta@2x.png" alt="Yatta" class="img-responsive"></li>
        <li><img src="images/logo-zend@2x.png" style="width: 190px" alt="Zend" class="img-responsive"/></li>
        </ul>
    </div>
    <div class="col-md-12">
        <a href="https://github.com/eclipse/che/blob/master/CONTRIBUTING.md" class="btn-yellow" target="_blank">Become a Contributor</a>
    </div>
  </div>
</div>

<div class="bg-dark-space get-started">
  <div class="container-fluid content">
    <div class="row">
      <div class="col-md-6">
        <h3>SaaS</h3>
        <p>Self-service Che workspaces hosted at che.openshift.io</p>
        <a href="<?php echo $rootPath; ?>/getting-started/cloud/" class="btn-yellow">Create Free Account</a></li>
      </div>
      <div class="col-md-6">
        <h3>Local Install</h3>
        <p>Install Eclipse Che on localhost or shared K8S cluster.</p>
        <a href="<?php echo $rootPath; ?>/docs/che-7/che-quick-starts/" class="btn-yellow">Download</a>

      </div>

    </div>
  </div>
</div>

<div class="bg-purple chefile">
  <div class="container-fluid content">
    <h2>Core Capabilities</h2>
    <div class="row">
    <div class="col-md-4">
        <h4>Developer Environments for Teams</h4>
        <p>Host on your Kubernetes cluster and centralize developer environments. Onboard teams with powerful collaboration, workspace automation, and permissions. Developers in a team can use their local IDE or the Che browser IDE.</p>
        <ul>
          <li>Share workspaces with anyone</li>
          <li>Control workspace permissions</li>
          <li>Use a browser or desktop IDE</li>
          <li>Define resource limits for teams</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>One-Click Workspaces</h4>
        <p>Create workspaces from production runtimes containing your projects and tools. Get developer environments that are highly consistent, repeatable and reproducible.</p>
        <ul>
          <li>"Dev mode" production environments</li>
          <li>Code in Kubernetes pods</li>
          <li>Enjoy built-in browser IDE</li>
          <li>Codify developer workspaces config</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Enterprise readiness and built-in security</h4>
        <p>Manage workspaces for your developer teams with programmable and customizable infrastructure that lets you control system performance, availability, and functionality.</p>
        <ul>
          <li>Authenticate with Keycloak</li>
          <li>Connect to LDAP or AD</li>
          <li>In-House plug-ins and stacks registries</li>
          <li>Built-in system monitoring</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<hr class="gray">
<div class="chefile">
  <div class="container-fluid content">
    <h2>Feature Highlight</h2>
    <table>
      <tr>
        <td><img src="<?php echo $rootPath; ?>/images/img-chefile@2x.png" alt=""></td>
        <td>
          <h4>Devfile - Clonable, Reproducible, Lightweight Workspaces in Eclipse Che</h4>
          <p>Devfile provide an easy to configure, reproducible and portable developer workspaces needed to work on a project and integrates into any workflows to maximize the productivity of your team. "Dev mode" your production environment by replicating it in your developer workspaces.</p>
          <a href="https://redhat-developer.github.io/devfile/" class="btn-yellow" target="_blank">Learn More</a>
        </td>
      </tr>
    </table>
  </div>
</div>


<div class="bg-deep-purple feedback">
  <div class="container-fluid content">
    <h2>Feedback <a href="https://twitter.com/eclipse_che" target="_blank">@eclipse_che</a></h2>

    <ul>
      <li><span><i class="fa fa-twitter"></i> @monkchips</span> @eclipse_che developer workspace server - what kind of witchcraft is this?</li>
      <li><span><i class="fa fa-twitter"></i> @nicosommi</span> "I just tried "eclipse che"... it's just brilliant @eclipse_che</li>
      <li><span><i class="fa fa-twitter"></i> @ciberado</span> @eclipse_che is potentially the greatest innovation in tools since Maven.</li>
      <li><span><i class="fa fa-twitter"></i> @oyku</span> I'm an @intellijidea user and have suffered from @EclipseFdn IDE a lot but everyone should keep an eye on Eclipse Che</li>
      <li><span><i class="fa fa-twitter"></i> @puffybsd</span> The stuff eclipse che is doing, particularly workspace server and language server protocol, is seriously cool.</li>
      <li><span><i class="fa fa-twitter"></i> @smithkenny</span> There is some seriously disruptive #Devops technology coming with #Eclipse Che. Solves probs with dev workstations &amp; workspaces.</li>
      <!--
      <li><span><i class="fa fa-twitter"></i> @DaveZaffrey</span> #eclipse che - been waiting for this for many years! Dev workspace that is standardized, clonable, Web UI and highly response.</li>
      <li><span><i class="fa fa-twitter"></i> @mogreau</span> Contribute to an open source project in less than 10 minutes with @eclipse_che!</li>
      <li><span><i class="fa fa-twitter"></i> @thomasehardt</span> Not many dev tools blow my mind, but @eclipse_che certain does - it is the future of IDEs!</li>
    -->
    </ul>

    <a href="https://twitter.com/eclipse_che" class="btn-yellow" target="_blank">Follow Us on Twitter</a>
  </div>
</div>


<?php include 'includes/footer.php'; ?>
