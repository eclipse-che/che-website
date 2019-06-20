  <body class="<?php echo $bodyClass; ?>">
    <header>
      <div class="container-fluid">
        <a class="logo" href="<?php echo $rootPath; ?>/"><img alt="Eclipse Che" src="<?php echo $rootPath; ?>/images/logo-eclipseche.svg" /></a>

        <nav class="menu-mobile">
          <a class="mobile-menu-toggle" data-toggle="collapse" aria-expanded="false" href="#mobileMenuItems"><i class="fa fa-bars"></i></a>

          <ul class="mobile-menu-items collapse" id="mobileMenuItems">
            <li><a href="<?php echo $rootPath; ?>/technology/">Technology</a></li>
            <li><a href="<?php echo $rootPath; ?>/extend/">Extend</a></li>
            <li><a target="_blank" href="<?php echo $rootPath; ?>/docs/">Docs</a></li>
            <li><a target="_blank"  href="https://medium.com/eclipse-che-blog">Blog</a></li>
            <li><a href="<?php echo $rootPath; ?>/getting-started/">Get Started</a></li>
          </ul>
        </nav>

        <nav class="menu-desktop">
          <ul>
            <li><a href="<?php echo $rootPath; ?>/technology/">Technology</a></li>
            <li><a href="<?php echo $rootPath; ?>/extend/">Extend</a></li>
            <li><a target="_blank" href="<?php echo $rootPath; ?>/docs/">Docs</a></li>
            <li><a target="_blank"  href="https://medium.com/eclipse-che-blog">Blog</a></li>
            <!--<li><a href="<?php echo $rootPath; ?>/media/">Articles</a></li>-->
            <li><a class="btn-yellow" href="<?php echo $rootPath; ?>/getting-started/">Get Started</a></li>
            <!--<li><a class="github-button" href="https://github.com/eclipse/che" data-icon="octicon-star" data-show-count="true" aria-label="Star eclipse/che on GitHub">Star</a></li> -->
            <li><iframe crossorigin="anonymous" src="https://ghbtns.com/github-btn.html?user=eclipse&repo=che&type=star&count=true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe></li>
          </ul>
        </nav>

      </div> <!-- /.container-fluid -->
    </header> <!-- /header -->