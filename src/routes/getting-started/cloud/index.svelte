<script lang="ts">
	import { darkModeThemeEnabled } from '$lib/theme/colorTheme';
    import TryOnline from '$lib/try/TryOnline.svelte';
	import { onMount } from 'svelte';
	import { pageTitle, pageDescription, pageUrl } from "$lib/stores";

	$pageTitle = "Cloud";
  	$pageDescription = "Try Eclipse Che online.";
  	$pageUrl = "/getting-started/cloud/";
	
	onMount(() => {
	darkModeThemeEnabled.subscribe(isEnabled => {
		if (isEnabled) {
		} else {
		}
	});

	});
</script>

<section class="text-gray-600 dark:text-gray-400 body-font">
	<TryOnline />
  </section>
