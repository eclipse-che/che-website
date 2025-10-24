<script lang="ts">
  import Fa from 'svelte-fa/src/fa.svelte';
  import { faStar } from '@fortawesome/free-solid-svg-icons';
  let stars: number | undefined;

  async function getStars(): Promise<void> {
    try {
      const res = await fetch('https://api.github.com/repos/eclipse/che');
      if (res.ok) {
        const data = await res.json();
        stars = data.stargazers_count;
      }
    } catch (error) {
      console.error('Error fetching GitHub stars:', error);
    }
  }

  getStars();
</script>

{#if stars !== undefined}
  <a
    href="https://github.com/eclipse/che"
    target="_blank"
    rel="noopener noreferrer"
    class="flex items-center space-x-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
  >
    <Fa icon={faStar} />
    <span>{stars}</span>
  </a>
{/if}