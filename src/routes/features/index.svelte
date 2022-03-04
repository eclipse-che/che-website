<script lang="ts">
	import { darkModeThemeEnabled } from '$lib/theme/colorTheme';
	import { onMount } from 'svelte';
	import GitHub from '@icons-pack/svelte-simple-icons/src/components/Github.svelte';
	import Gitlab from '@icons-pack/svelte-simple-icons/src/components/Gitlab.svelte';
	import Bitbucket from '@icons-pack/svelte-simple-icons/src/components/Bitbucket.svelte';
	import LinuxContainers from '@icons-pack/svelte-simple-icons/src/components/Linuxcontainers.svelte';
	import { variables } from '$lib/variables';

	let shareDevfileImage;
	let shareDevfileAltImage;
	let dexLoginImage;

	onMount(() => {
	darkModeThemeEnabled.subscribe(isEnabled => {
		if (isEnabled) {
			shareDevfileImage = `${variables.imagesPath}/developer-badge-readme-dark.png`;
			shareDevfileAltImage = `${variables.imagesPath}/developer-badge-readme-alt-dark.png`;
			dexLoginImage = `${variables.imagesPath}/feature-dex-login-dark.png`;
		} else {
			shareDevfileImage = `${variables.imagesPath}/developer-badge-readme-light.png`;
			shareDevfileAltImage = `${variables.imagesPath}/developer-badge-readme-alt-light.png`;
			dexLoginImage = `${variables.imagesPath}/feature-dex-login-light.png`;
		}
	});

	});
</script>

<section class="text-gray-600 dark:text-gray-400 body-font">
	<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
	  <div class="w-5/6 mb-10 md:mb-0">
		<img class="object-cover object-center rounded" alt="hero" src="{variables.imagesPath}/debug-with-code.gif">
	  </div>
	  <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
		<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Code, Build and Debug in your browser
		</h1>
		<p class="mb-8 leading-relaxed">Start coding in minutes, not days. Modern IDEs features are available in the browser and there is no need to locally install development tools.</p>
	  </div>
	</div>
  </section>

  <section class="text-gray-600 dark:text-gray-40 body-font">
	<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">		
	  <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
		<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Git Services Integration
		  <br class="hidden lg:inline-block">
		</h1>
		<p class="mb-8 leading-relaxed">Connect your GitHub, Gitlab or Bitbucket identity using OAuth.</p>
	  </div>
	  <div class="lg:max-w-lg lg:w-full md:w-1/4 w-1/6 flex flex:col gap-10">
		<GitHub size={90} />
		<Gitlab size={90} />
		<Bitbucket size={90} />
	  </div>
	</div>
  </section>

  <section class="text-gray-600 dark:text-gray-400 body-font">
	<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
	  <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
		<img alt="Eclipse Che badge in a README.md file" class="object-cover object-center rounded border-2" src="{shareDevfileImage}">
		<img alt="Different styles of Che badges" class="object-cover object-center rounded relative -mt-40 ml-auto border-2 border-che-yellow" src="{shareDevfileAltImage}">
	  </div>
	  <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
		<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Share development setups
		  <br class="hidden lg:inline-block">with a URL
		</h1>
		<p class="mb-8 leading-relaxed">Start coding with a click. Use a link to share your development environment with your team.</p>
	</div>
	</div>
  </section>

  <section class="text-gray-600 dark:text-gray-400 body-font">
	<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">		
	  <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
		<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">IDEs are packaged and distributed as
		  <br class="hidden lg:inline-block">Linux Containers
		</h1>
		<p class="mb-8 leading-relaxed">IDEs run remotely, in a Kubernetes Pod, and are accessible from a browser. Currently IDEs packaged and included with Eclipse Che are VS Code, JetBrains and Eclipse Theia.</p>
	  </div>
	  <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 flex flex-col flex-grow items-center justify-center align-middle gap-5 ">
		<LinuxContainers size={200} />
	  </div>
	</div>
  </section>


  <section class="text-gray-600 dark:text-gray-400 body-font">
	<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
	  <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-13 w-13" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
		</svg>
	  </div>
	  <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
		<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Enterprise Features
		  <br class="hidden lg:inline-block">
		</h1>
		<p class="mb-8 leading-relaxed">IDEs running in Che workspaces are configured to work in air-gapped networks, to trust an enterprise TLS certificate or to use a proxy to access external services. FIPS (U.S. Federal Information Processing Standards) are supported too.
		</p>
	  </div>
	</div>
  </section>


  <section class="text-gray-600 dark:text-gray-400 body-font">
	<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
		
	  <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
		<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Multi-tenant by default
		  <br class="hidden lg:inline-block">
		</h1>
		<p class="mb-8 leading-relaxed">Access to Eclipse Che workspaces requires authentication. The OIDC (OpenID Connect) protocol is used for authentication. Kubernetes RBAC is used to verify if a user is allowed to access a workspace.</p>
	  </div>
	  <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
		<img class="object-cover object-center rounded" alt="hero" src="{dexLoginImage}">
	  </div>
	</div>
  </section>

  