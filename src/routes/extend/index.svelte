<script>
	import { darkModeThemeEnabled } from '$lib/theme/colorTheme';
	import { variables } from '$lib/variables';
import Eclipseide from '@icons-pack/svelte-simple-icons/src/components/Eclipseide.svelte';
import Jetbrains from '@icons-pack/svelte-simple-icons/src/components/Jetbrains.svelte';
import Visualstudiocode from '@icons-pack/svelte-simple-icons/src/components/Visualstudiocode.svelte';
	import { onMount } from 'svelte';
	import { pageTitle, pageDescription, pageUrl } from "$lib/stores";

	$pageTitle = "Extend";
  	$pageDescription = "Code, Build and Debug in your own browser by extending Eclipse Che.";
  	$pageUrl = "https://www.eclipse.org/che/extend/";

	let cheSampleImage;


	onMount(() => {
	darkModeThemeEnabled.subscribe(isEnabled => {
		if (isEnabled) {
			cheSampleImage = `${variables.imagesPath}/extend-che-samples-dark.png`;
		} else {
			cheSampleImage = `${variables.imagesPath}/extend-che-samples-light.png`;
		}
	});});

</script>



<section>
	<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
	  <div class="relative grid gap-5 md:grid-cols-1 lg:grid-cols-2">
		  <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
		  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
			  <img class="w-full items-center justify-center  rounded " src="{variables.imagesPath}/che-dashboard-whitelabel.png" alt="">
			  <h6 class="mb-2 leading-5 text-gray-500 dark:text-gray-400 py-3">
				  Example of the Che Dashboard customized for Red Hat CodeReady Workspaces
			  </h6>
		   </div>
		  </div>
		  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
			  <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
				<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Whitelabelling
				  <br class="hidden lg:inline-block">
				</h1>
				<p class="mb-8 leading-relaxed">
					Icons, labels and menu items can be customized. Eclipse Che components can be re-branded with the logos and labels of a company or a university for instance.
				</p>
			  </div>
		  </div>
	</div>
  </section>

  <section class="text-gray-600 dark:text-gray-400 body-font">
	  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
		<div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
			<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Containerize your favorite IDE and use it with Eclipse Che
				<br class="hidden lg:inline-block">
			</h1>
			<p class="mb-8 leading-relaxed">
				Eclipse Che provisions development environments, including IDEs. Any IDE that can run in a container and can be accessed through a Web UI will work with Eclipse Che. The IDEs that are pre-packaged with Che are Open Source VisualStudio Code, Eclipse Theia and JetBrains IDEs using JetBrains Projector.
			</p>
		</div>
		<div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 flex flex:col gap-10">
			<Visualstudiocode size=100/>
			<Jetbrains size=100/>
			<Eclipseide size=100/>
		</div>
	</div>
  </section>  

  <section>
	<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
	  <div class="relative grid gap-5 md:grid-cols-1 lg:grid-cols-2">
		  <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
		  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
			  <img class="w-full items-center justify-center  rounded " src="{cheSampleImage}" alt="">
			  <h6 class="mb-2 leading-5 text-gray-500 dark:text-gray-400 py-3">
				  Customize the set of samples
			</h6>
		   </div>
		  </div>
		  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
			  <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
				<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Update language stacks and code samples
				  <br class="hidden lg:inline-block">
				</h1>
				<p class="mb-8 leading-relaxed">
					The list of examples that are presented in Eclipse Che User Dashboard is customizable. Samples can be packaged as zip files or can live in a git repository.
				</p>
			  </div>
		  </div>
	</div>
  </section>
