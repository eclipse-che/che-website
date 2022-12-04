<script>
  import ThemeSelector from "./ThemeSelector.svelte";
  import { page } from "$app/stores";
  import { variables } from "$lib/variables";
  import EclipseCheLogo from "../logo/EclipseCheLogo.svelte";
  import { MetaTags } from "svelte-meta-tags";
  import { pageTitle, pageDescription, pageUrl } from "$lib/stores";
</script>

<MetaTags
  title={$pageTitle}
  titleTemplate="%s | Eclipse Che"
  description={$pageUrl}
  canonical={$pageUrl}
  openGraph={{
    url: `${$pageUrl}`,
    title: `${$pageTitle} | Eclipse Che`,
    description: `${$pageDescription}`,
    images: [
      {
        url: "https://www.eclipse.org/che/images-website/ide-code-light.png",
      },
    ],
    site_name: "Eclipse Che",
  }}
  twitter={{
    handle: "@eclipse_che",
    site: "@eclipse_che",
    cardType: "summary_large_image",
    title: `${$pageTitle} | Eclipse Che`,
    description: `${$pageDescription}`,
    image: "https://www.eclipse.org/che/images-website/ide-code-light.png",
    imageAlt: "Eclipse Che",
  }}
/>

<header class="text-gray-600 dark:text-gray-400 dark:bg-gray-900 body-font">
  <div
    class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
  >
    <a
      href="{variables.basePath}/"
      class="flex title-font font-medium items-center text-gray-900 dark:text-white mb-4 md:mb-0 w-40"
    >
      <EclipseCheLogo />
    </a>
    <nav
      class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center"
    >
      <a
        href="{variables.basePath}/features"
        class="mr-5 hover:text-gray-900 dark:text-white">Features</a
      >
      <a
        href="{variables.basePath}/technology"
        class="mr-5 hover:text-gray-900 dark:text-white">How it Works</a
      >
      <a
        href="{variables.basePath}/extend"
        class="mr-5 hover:text-gray-900 dark:text-white">Extend</a
      >
      <div class="md:border-l md:border-gray-400 pr-2 flex flex-wrap">
        &nbsp;
      </div>
      <a
        href="https://www.eclipse.org/che/docs/"
        target="_blank"
        class="mr-5 hover:text-gray-900 dark:text-white">Docs</a
      >
      <a
        href="https://che.eclipseprojects.io/"
        target="_blank"
        class="mr-5 hover:text-gray-900 dark:text-white">Blog</a
      >
    </nav>
    <div class="pr-5 invisible md:visible">
      <ThemeSelector />
    </div>

    {#if $page.url.pathname !== `${variables.basePath}/` && !$page.url.pathname.includes("/getting-started/")}
      <a
        class="inline-flex items-center bg-che-yellow dark:text-white border-0 py-1 px-3 focus:outline-none hover:bg-che-yellow-dark rounded text-base mt-4 md:mt-0 invisible lg:visible"
        href="{variables.basePath}/#StartNow"
        >Start Now
        <svg
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          class="w-4 h-4 ml-1"
          viewBox="0 0 24 24"
        >
          <path d="M5 12h14M12 5l7 7-7 7" />
        </svg>
      </a>
    {/if}
  </div>
</header>
