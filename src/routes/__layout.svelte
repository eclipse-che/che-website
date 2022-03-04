<script>
	import '../style.css';

	import PageHeader from '$lib/header/PageHeader.svelte';
	import PageFooter from '$lib/footer/PageFooter.svelte';

</script>

<PageHeader />
<main>
	<slot />
</main>
<PageFooter />
