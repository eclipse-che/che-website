<?php 
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Success';
  // Define body class
  $bodyClass = 'media_events';

  include '../includes/head.php';
  include '../includes/header.php';
?>

<div class="jumbotron">
  <div class="container-fluid">
    <h1 class="no-margin">Thank you, your request has been sent</h1>
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->


<hr class="gray">
<div class="container-fluid content">
  <h2>Next Steps</h2>
  <table class="wrapper">
    <tr class="item">
      <td><img src="../images/media/try.png" alt=""></td>
      <td>
        <h3>Try Eclipse Che</h3>
         <p class="desc">Eclipse Che is an IDE and developer workspace server that allows anyone to contribute to a project without having to install software.</p>
          <a href="<?php echo $rootPath; ?>/getting-started/" class="btn-yellow">Get Started</a>
      </td>
    </tr><!-- .item -->

     <tr class="item">
      <td><img src="../images/media/blogs.png" alt=""></td>
      <td>
        <h3>Hands-On with Eclipse Che</h3>
        <p class="desc">Learn how to configure commands, develop your own Eclipse Che plugins, and pair program with your peers.</p>
        <a href="http://che.eclipse.org/tag/hands-on/" class="btn-yellow" target="_blank">Technical Blogs</a>
      </td>
    </tr><!-- .item -->

    <tr class="item">
     <td><img src="../images/media/keynote.png" alt=""></td>
      <td>
        <h3>EclipseCon Keynote</h3>
        <p class="desc">Watch Tyler Jewell at EclipseCon 2016 talk about Eclipse Che, the next-generation Eclipse IDE, alongside SAP, Red Hat, IBM, and Microsoft. </p>
            <a href="<?php echo $rootPath; ?>/community/" class="btn-yellow">Watch the Keynote</a>
      </td>
    </tr><!-- .item -->

  </table><!-- .wrapper -->
</div> <!-- .container-fluid -->


<?php include '../includes/footer.php'; ?>