<script lang="ts">
import { darkModeThemeEnabled } from '$lib/theme/colorTheme';
import AwsLogo from '$lib/logo/AWSLogo.svelte';
import AzureLogo from '$lib/logo/AzureLogo.svelte';
import GoogleCloudLogo from '$lib/logo/GoogleCloudLogo.svelte';
import KindLogo from '$lib/logo/KindLogo.svelte';
import OpenShiftLogo from '$lib/logo/OpenShiftLogo.svelte';
import MinikubeLogo from '$lib/logo/MinikubeLogo.svelte';
import { variables } from '$lib/variables';
import { onMount } from 'svelte';

let dockerImage;

onMount(() => {
	darkModeThemeEnabled.subscribe(isEnabled => {
		if (isEnabled) {
			dockerImage = `${variables.imagesPath}/docker-logo-dark.png`;
		} else {
			dockerImage = `${variables.imagesPath}/docker-logo-light.png`;
		}
	});});
	
</script>
        
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
		<div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
	<div>
	
  <div class="px-2 py-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
	<div class="max-w-xl md:mx-auto sm:text-center lg:max-w-2xl">
<div>
  <h2 id="install" class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 dark:text-white sm:text-4xl md:mx-auto">
	Or install it on your Kubernetes cluster
</h2>

<p class="text-base text-gray-700 md:text-lg dark:text-gray-300">
	Deploy Eclipse Che on your public or private Kubernetes clusters
</p>
</div>
</div>
</div>
</div>
</div>

  <div class="relative grid gap-5 grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 dark:text-gray-300">
	<a href='https://www.eclipse.org/che/docs/che-7/installation-guide/installing-che-on-minikube/' target='blank' >
		<div title="Minikube" class="w-100 h-40 p-5 flex flex-col text-center transition duration-300 bg-transparent dark:shadow-dark transform rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl items-center justify-center align-middle">
			<MinikubeLogo />
		</div>
	</a>
	<a href='https://www.eclipse.org/che/docs/che-7/installation-guide/installing-che-on-kind/' target='blank' >
		<div title="Kind" class="w-100 h-40 p-5 flex flex-col text-center transition duration-300 bg-transparent dark:shadow-dark transform rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl items-center justify-center align-middle">
			<KindLogo />
		</div>
	</a>
	<a href='https://www.eclipse.org/che/docs/che-7/installation-guide/installing-che-on-docker-desktop/' target='blank' >
		<div title="Docker Desktop" class="w-100 h-40 flex flex-col p-5 text-center transition duration-300 dark:shadow-dark transform rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl items-center justify-center align-middle">
			<!-- svelte-ignore a11y-missing-attribute -->
			<img class="h-fit w-fit" src='{dockerImage}' />
		</div>
	</a>
	<a href='https://www.eclipse.org/che/docs/che-7/installation-guide/installing-che-on-aws/' target='blank' >
		<div title="AWS" class="w-100 h-40 flex flex-col p-5 text-center transition duration-300 dark:shadow-dark transform rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl items-center justify-center align-middle">
			<AwsLogo />
		</div>
	</a>
	<a href='https://www.eclipse.org/che/docs/che-7/installation-guide/installing-che-on-google-cloud-platform/' target='blank' >
		<div title="Google Cloud" class="w-100 h-40 flex flex-col p-5 text-center transition duration-300 dark:shadow-dark transform rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl items-center justify-center align-middle">
			<GoogleCloudLogo />
		</div>
	</a>
	<a href='https://www.eclipse.org/che/docs/che-7/installation-guide/installing-che-on-microsoft-azure/' target='blank' >
		<div title="Azure" class="w-100 h-40 flex flex-col p-5 text-center transition duration-300 dark:shadow-dark transform rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl items-center justify-center align-middle">
			<AzureLogo />
		</div>
	</a>
	<a href='https://www.eclipse.org/che/docs/che-7/installation-guide/installing-che-on-openshift-4-using-operatorhub/' target='blank' >
		<div title="OpenShift" class="w-100 h-40 flex flex-col p-5 text-center transition duration-300 dark:shadow-dark transform rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl items-center justify-center align-middle">
			<OpenShiftLogo />
		</div>
	</a>
  </div>
</div>