<script>
import FooterCategory from './FooterCategory.svelte'; 
import FooterCategoryLink from './FooterCategoryLink.svelte';
import Fa from 'svelte-fa/src/fa.svelte'
import { faXTwitter } from '@fortawesome/free-brands-svg-icons'
import { faGithub } from '@fortawesome/free-brands-svg-icons'
import { faBlog } from '@fortawesome/free-solid-svg-icons'
import EclipseCheLogo from '../logo/EclipseCheLogo.svelte';
import { variables } from '$lib/variables';

</script>
<footer class="text-gray-600 body-font dark:bg-gray-900 ">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
        <EclipseCheLogo />
      <p class="mt-2 text-sm text-gray-500">Run your favorite IDE on Kubernetes</p>
    </div>
    <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <FooterCategory name={"Get Started"} />
        <nav class="list-none mb-10">
          <FooterCategoryLink name={"Documentation"} url="https://www.eclipse.org/che/docs" />
          <FooterCategoryLink name={"Try"} url="{variables.basePath}/getting-started" />
          <FooterCategoryLink name={"Install"} url="{variables.basePath}/getting-started/#install" />
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <FooterCategory name={"Eclipse Che"} />
        <nav class="list-none mb-10">
          <FooterCategoryLink name={"Features"} url="{variables.basePath}/features" />
          <FooterCategoryLink name={"Blog"} url="https://che.eclipseprojects.io/" />
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <FooterCategory name={"Community"} />
        <nav class="list-none mb-10">
          <FooterCategoryLink name="Get involved" url="https://github.com/eclipse/che/blob/master/CONTRIBUTING.md" />
          <FooterCategoryLink name="Join Community Slack" url="https://communityinviter.com/apps/ecd-tools/join-the-community" />
          <FooterCategoryLink name="Chat" url="https://ecd-tools.slack.com/archives/C05SD64M85R" />
          <FooterCategoryLink name="Mailing List" url="https://accounts.eclipse.org/mailing-list/che-dev" />
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <FooterCategory name={"Eclipse Foundation"} />
        <nav class="list-none mb-10">
          <FooterCategoryLink name="About Eclipse Foundation" url="https://www.eclipse.org/"/>
          <FooterCategoryLink name="Privacy Policy" url="https://www.eclipse.org/legal/privacy.php"/>
          <FooterCategoryLink name="Terms of Use" url="https://www.eclipse.org/legal/termsofuse.php"/>
          <FooterCategoryLink name="Eclipse Public License" url="https://www.eclipse.org/legal/epl-2.0/"/>
          <FooterCategoryLink name="Legal Resources" url="https://www.eclipse.org/legal"/>
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-gray-100 dark:bg-gray-800 dark:text-gray-400">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 dark:text-gray-400 text-sm text-center sm:text-left">© 2023 Eclipse Che</p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a target="_blank" title="github" rel="noopener noreferrer" href="https://github.com/eclipse/che" class="w-8 h-5 text-gray-500 dark:text-gray-400"><Fa icon={faGithub} /></a>
        <a target="_blank" title="twitter" rel="noopener noreferrer" href="https://twitter.com/eclipse_che" class="w-8 h-5 text-gray-500 dark:text-gray-400"><Fa icon={faXTwitter} /></a>
        <a target="_blank" title="blog" rel="noopener noreferrer" href="https://che.eclipseprojects.io" class="w-8 h-5 text-gray-500 dark:text-gray-400"><Fa icon={faBlog} /></a>
      </span>
    </div>
  </div>
</footer>
