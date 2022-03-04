<script lang="ts">
	import { darkModeThemeEnabled } from '$lib/theme/colorTheme';
    import TryInstall from '$lib/try/TryInstall.svelte';
	import { onMount } from 'svelte';
	
	onMount(() => {
	darkModeThemeEnabled.subscribe(isEnabled => {
		if (isEnabled) {
		} else {
		}
	});

	});
</script>

<section class="text-gray-600 dark:text-gray-400 body-font">
	<TryInstall />
  </section>
