<script lang="ts">
import { onMount } from 'svelte';

  export let title;
	export let link;
  export let author;
  export let summary;
  export let published: string;
  let publishedDay;
  let publishedMonth;

  onMount(() => {
    const date = new Date(Date.parse(published));
    publishedDay = date.toLocaleString('default', { day: '2-digit' });
    publishedMonth = date.toLocaleString('default', { month: 'short' });
  });
    
</script>
<div class="py-8 px-4 lg:w-1/3">
    <a target="_blank" href={link}>
    <div class="h-full flex items-start">
      <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
        <span class="text-gray-500 dark:text-gray-400 pb-2 mb-2 border-b-2 border-gray-200 dark:border-gray-700 ">{publishedMonth}</span>
        <span class="font-medium text-lg text-gray-800 dark:text-gray-300 title-font leading-none">{publishedDay}</span>
      </div>
      <div class="flex-grow pl-6">
        <!--<h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 dark:text-indigo-400 mb-1">CATEGORY</h2>-->
        <h1 class="title-font text-xl font-medium text-gray-900 dark:text-white mb-3">{title}</h1>
        <p class="leading-relaxed ">{summary}</p>
        <a class="flex w-full items-end" href="{link}">
          <!-- <img alt="blog" src="https://dummyimage.com/102x102" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center"> -->
          <span class="flex-grow flex flex-col items-end">
            <span class="mr-10 title-font font-medium font-thin text-gray-900 dark:text-gray-300">{author}</span>
          </span>
        </a>
      </div>
    </div>
    </a>
  </div>
  