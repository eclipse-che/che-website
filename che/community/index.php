<?php 
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Community';
  // Define body class
  $bodyClass = 'community';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>Community</h1>
    <h3>A big thank you to the speakers, Eclipse Foundation, our contributors, and the open source community for making our first CheConf a huge success. <br><a href="../checonf18/sessions.html" target="_blank">Watch CheConf Sessions</a></h3>

    <a href="http://www.infoq.com/presentations/eclipse-che-eclipsecon-2016" target="_blank"><img src="../images/hero-eclipsecon@2x.jpg" alt="Watch the Keynote" class="img-responsive"></a>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->
<hr class="gray">


<div class="container-fluid content comm-highlights">
  <div class="row">
    <div class="col-sm-6">
      <img src="../images/img-comm-highlights-octocat@2x.png" alt="3000 Github Stars">
      <h2>4700+ GitHub Stars</h2>
      <p>Thank you for the love! The Che GitHub repo is now a featured showcase and frequently one of the fastest growing Java projects. We are getting 50 new GitHub issues / week. Let's keep collaborating together.</p>
      <a href="https://github.com/eclipse/che/" target="_blank" class="btn-yellow">GitHub Repo</a>
    </div>
    <div class="col-sm-6">
      <img src="https://www.eclipse.org/che/images/EclipseCon/Anyone.jpg" alt="EclipseCon 2016 Keynote" >
      <h2>A Next-Gen Eclipse IDE</h2>
      <p>At EclipseCon 2016, we announced the initial release. We hosted multiple talks on Che with the most popular being related to customizing Eclipse Che and using Flux to set up pairing sessions with the Eclipse IDE.</p>
      <a href="http://www.infoq.com/presentations/eclipse-che-eclipsecon-2016" target="_blank" class="btn-yellow">Watch the Keynote</a>
    </div>
  </div>
  <div class="separator"></div>

  <div class="row">
    <div class="col-sm-6">
      <img src="../images/img-comm-highlights-twitter@2x.png" alt="Track Our Progress">
      <h2>Track Our Progress</h2>
      <p>We have setup a new blog that tracks the conversations around the community. Follow us on Twitter as we post the latest updates. If you want to chat live, join our IRC channel and che-dev mailing list.</p>
      <a href="https://twitter.com/eclipse_che" target="_blank" class="btn-yellow">Follow Us</a>
    </div>
  </div>

</div> <!-- /.comm-highlights -->

<div class="bg-gray5 share-story">
  <div class="container-fluid content">
    <h2>Share Your Eclipse Che Story</h2>
    <p>Are you using Eclipse Che to build your project? Share your story with us and we will publish it on our blog.</p>
    <a href="<?php echo $rootPath; ?>/community/share/" class="btn-yellow">Share your Story</a>
  </div>
</div>

<div class="bg-deep-purple get involved">
  <div class="container-fluid content">
     <h2>Get Involved</h2>
    <p>Issues and feature requests are filed on Che's GitHub repository. Please check the issue backlog and documentation before opening an issue. Plug-in developers should join the <a href="mailto:che-dev@eclipse.org">che-dev@eclipse.org</a> mailing list.</p></p>
    <ul>
      <li>Read <a href="https://www.eclipse.org/che/docs/index.html">documentation</a></li>
      <li>File <a href="https://github.com/codenvy/che/issues">issues and features</a></li>
      <li>Join <a href="https://github.com/eclipse/che/wiki/Weekly-Meetings-and-Minutes">weekly planning meetings</a></li>
      <li>Watch <a href="https://github.com/codenvy/che">the repository</a></li>
      <li>Discuss <a href="https://dev.eclipse.org/mailman/listinfo/che-dev">che-dev@eclipse.org</a></li>
      <li>Chat <a href="https://mattermost.eclipse.org/eclipse/channels/eclipse-che" target="_blank">Mattermost</a></li>
    </ul>
  </div>
</div><!-- /.container-fluid -->



<div class="bg-gray5">
  <div class="container-fluid content">
    <h2>Commercial and Enterprise Support</h2>
    <p>To discuss commercial support options for Eclipse Che, please contact us at: <a href="https://chat.openshift.io/developers/channels/che-enterprise" target="_blank">.</a>
  </div>
</div>


<?php include '../includes/footer.php'; ?>
