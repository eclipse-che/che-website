<script lang="ts">
	import { darkModeThemeEnabled } from '$lib/theme/colorTheme';
        import Try from '$lib/try/Try.svelte';
	import { onMount } from 'svelte';
	import { pageTitle, pageDescription, pageUrl } from "$lib/stores";

	$pageTitle = "Install";
  	$pageDescription = "Install it on your Kubernetes cluster.";
  	$pageUrl = "/getting-started/download/";
	
	onMount(() => {
	darkModeThemeEnabled.subscribe(isEnabled => {
		if (isEnabled) {
		} else {
		}
	});

	});
</script>

<section class="text-gray-600 dark:text-gray-400 body-font">
	<Try />
  </section>