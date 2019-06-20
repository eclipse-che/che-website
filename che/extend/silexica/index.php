<?php 
  include '../../includes/variables.php';

  // Define page title
  $pageTitle = 'Silexica Web IDE powered by Eclipse Che';
  // Define body class
  $bodyClass = 'extend-child extend-silexica';

  include '../../includes/head.php';
  include '../../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>SLX.cloud - Analyze. Optimize. Implement.</h1>
    <h3><a target="_blank" href="https://www.silexica.com">At Silexica</a>, we develop SLX for programming heterogeneous multicore platforms using state-of-the-art compiler technology. With Eclipse Che and SLX.cloud we added a new mode of delivery using a SaaS model with instantly deployed cloud workspaces. Instead of downloading a multiple GB binary, new users can now start immediately with a few clicks. <a target="_blank" href="https://slx.cloud">Try it yourself!</a></h3>
    <img alt="" class="img-responsive" src="<?php echo $rootPath; ?>/images/silexica/hero-silexica.png" />  
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->


<hr class="gray">
<div class="container-fluid content features">
  <div class="row">
    <div class="col-sm-6">
      <a href="../images/silexica/analyze-code.png"><img alt="" class="img-responsive" src="../../images/silexica/analyze-code.png" /></a>
      <h3>Analyze Your Code</h3>
      <p>SLX.cloud understands your code better than you do! Get warnings and hints about your code directly within the editor. Analyze the functional dependency with the Call Graph, trace variable accesses within the Code Analysis Graph or get a complete overview with the Code Analysis View.</p>
    </div>

    <div class="col-sm-6">
      <a href="../images/silexica/cache-bottlenecks.png"><img alt="" class="img-responsive" src="../../images/silexica/cache-bottlenecks.png" /></a>
      <h3>Identify Cache Bottlenecks</h3>
      <p>Not only do we analyze and understand your code, we can also simulate your target platform and its caching behavior. If your application is slower than you expected, take a look at our Cache Analysis.</p>
    </div>
  </div> <!-- .row -->

  <div class="row">
    <div class="col-sm-6">
      <a href="../images/silexica/find-parallelism.png"><img alt="" class="img-responsive" src="../../images/silexica/find-parallelism.png" /></a>
      <h3>Find Parallelism</h3>
      <p>If you have worked with parallel programming before, you will know how tedious it is to get parallelism right. SLX.cloud assists you with that and gives you a list of all parallelism opportunities within your code.</p>
    </div>

    <div class="col-sm-6">
      <a href="../images/silxecia/generated-openmp.png"><img alt="" class="img-responsive" src="../../images/silexica/generated-openmp.png" /></a>
      <h3>Generated OpenMP Code</h3>
      <p>You don’t want to implement the parallelism yourself? With the integrated OpenMP Code Generation, SLX.cloud will take care of that based on the identified parallelism. It will not only generate OpenMP Pragma annotations, but will decide intelligently, if a annotation actually generates a speedup for your application. This is only possible with our unique platform-dependent understanding of behaviour and timing.</p>
    </div>
  </div> <!-- .row -->
  
  <p class="h3"><a target="_blank" href="https://slx.cloud">Get started with SLX.cloud now...</a>.</p>
  <p class="h3"><a target="_blank" href="https://docs.slx.cloud/docs/">… or take a look at our in-depth documentation.</a>.</p>
</div> <!-- .container-fluid -->


<div class="tech">
  <div class="container-fluid content">
    <h2>How does SLX.cloud extends Eclipse Che?</h2>
    <p>SLX.cloud leverages Eclipse Che’s stacks to repackage our core technology into a workspace container. As a user, you will have full access to a terminal and all commands you typically use during C/C++ development. With our tools running in a lightweight container, performance and behavior match or even exceed typical desktop computers.</p>
    <p>The UI is build as a set of Eclipse Che extensions, leveraging web technology like D3.js to create impressive graphical representations of your code. By implementing a client for the clangd language server, SLX.cloud further supports C/C++ warnings and autocomplete within your browser.</p>
    <p>Interested in building your own stacks?  We have <a href="<?php echo $rootPath; ?>/docs/5/che/docs/plugins/introduction/" target="_blank">documentation to help you get started with stacks</a> - it's easy! If you have any questions, reach out to <a href="<?php echo $rootPath; ?>/community/">our community</a>.</p>

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
          <li><a href="<?php echo $rootPath; ?>/docs/5/che/docs/openshift/config/" target="_blank">Red Hat OpenShift</a></li>
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
