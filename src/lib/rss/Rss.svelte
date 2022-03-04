<script lang="ts">
  import { onMount } from "svelte";
  import RssTile from "./RssTile.svelte";

  let articles = [];

  onMount(async () => {
    const res = await fetch(`https://che.eclipseprojects.io/feed.xml`);
    const text = await res.text();
    const document = new window.DOMParser().parseFromString(text, "text/xml");

    let entries = document.querySelectorAll("entry");
    const newArticles = [];
    entries.forEach((entry) => {
      const article = {
        title: entry.getElementsByTagName("title")[0].textContent,
        link: entry.getElementsByTagName("link")[0].getAttribute("href"),
        author: entry.getElementsByTagName("author")[0].getElementsByTagName("name")[0].textContent,
        summary: entry.getElementsByTagName("summary")[0].textContent,
        published: entry.getElementsByTagName('published')[0].textContent,
      };
      newArticles.push(article);
    });
    articles = newArticles;
  });
</script>


<section class="text-gray-600 dark:text-gray-400 dark:bg-gray-900  body-font">

  <div class="container px-5 py-24 mx-auto flex flex-wrap">
	  <div class="flex flex-col text-center w-full mb-20">
		<div>
			<p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full dark:bg-teal-400 bg-teal-400">
				Discover
			   </p>
	 
		  </div>
		  <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 dark:text-white sm:text-4xl md:mx-auto">
        Read more about Eclipse Che with Blog Posts
		  </h2>
		  <p class="text-base text-gray-700 dark:text-gray-500 md:text-lg">
			
		  </p>
	  </div>

     <div class="container px-5 pb-10 mx-auto">
        <div class="flex flex-wrap -mx-4 -my-8">

          {#if articles.length >= 3}
          {#each {length: 3} as _, i}
            <RssTile title="{articles[i].title}" link="{articles[i].link}" author="{articles[i].author}" summary="{articles[i].summary}" published="{articles[i].published}" />
          {/each}
          {/if}

         
        </div>
      </div>
      </div>
    </section>
