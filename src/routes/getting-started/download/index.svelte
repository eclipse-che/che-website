<script lang="ts">
	import { darkModeThemeEnabled } from '$lib/theme/colorTheme';
        import Try from '$lib/try/Try.svelte';
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
	<Try />
  </section>
