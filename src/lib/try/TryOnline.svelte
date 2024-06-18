<script lang="ts">
	import { darkModeThemeEnabled } from '$lib/theme/colorTheme';
	import Java from '@icons-pack/svelte-simple-icons/src/components/Java.svelte';
	import Go from '@icons-pack/svelte-simple-icons/src/components/Go.svelte';
	import Python from '@icons-pack/svelte-simple-icons/src/components/Python.svelte';
	import ReactJs from '@icons-pack/svelte-simple-icons/src/components/ReactJs.svelte';
	import DotNet from '@icons-pack/svelte-simple-icons/src/components/DotNet.svelte';
	import Django from '@icons-pack/svelte-simple-icons/src/components/Django.svelte';
	import Quarkus from '@icons-pack/svelte-simple-icons/src/components/Quarkus.svelte';
	import Spring from '@icons-pack/svelte-simple-icons/src/components/Spring.svelte';
	import Angular from '@icons-pack/svelte-simple-icons/src/components/Angular.svelte';
	import Svelte from '@icons-pack/svelte-simple-icons/src/components/Svelte.svelte';
	import Laravel from '@icons-pack/svelte-simple-icons/src/components/Laravel.svelte';
    import TryTechnology from '$lib/try/TryTechnology.svelte';

	
</script>
    
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
<div>
  <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full dark:bg-teal-400 bg-teal-400">
   Try
  </p>
</div>
<h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 dark:text-white sm:text-4xl md:mx-auto">
    Try Eclipse Che online
</h2>

<p class="text-base text-gray-700 dark:text-gray-500 md:text-lg">
    Using the online service hosted by Red Hat.
  </p>

</div>
<div class="dark:bg-gray-900">
<div class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10">
  <div class="absolute inset-x-0 top-0 items-center justify-center hidden overflow-hidden md:flex md:inset-y-0">
  </div>
  <div class="relative grid gap-7 grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 dark:text-gray-300 ">
    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/java-maven/1.3.1&storageType=ephemeral'>
        <Java size={70} color={$darkModeThemeEnabled ? 'currentColor' : '#007396'}  />
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/go/2.4.0&storageType=ephemeral'>
        <Go size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#00ADD8"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/python/3.1.0&storageType=ephemeral'>
        <Python size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#3776AB"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/nodejs-react/2.2.1&storageType=ephemeral'>
        <ReactJs size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#61DAFB"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/dotnet60/1.0.3&storageType=ephemeral'>
        <DotNet size={70}  color={$darkModeThemeEnabled ? 'currentColor' : "#512BD4"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/python-django&storageType=ephemeral'>
        <Django size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#000000"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://github.com/che-incubator/quarkus-api-example&storageType=ephemeral'>
        <Quarkus size={70}  color={$darkModeThemeEnabled ? 'currentColor' : "#00ADD8"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/java-springboot/2.2.0&storageType=ephemeral'>
        <Spring size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#6DB33F"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/ollama/1.0.0&storageType=ephemeral'>
        <img src="https://ollama.com/public/ollama.png" alt="Ollama" width="50" height="50  ">
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/nodejs-angular/2.2.1&storageType=ephemeral'>
        <Angular size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#777BB4"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/nodejs-svelte/1.2.1&storageType=ephemeral'>
        <Svelte size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#DC322F"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com#https://registry.devfile.io/devfiles/php-laravel/2.0.1&storageType=ephemeral'>
        <Laravel size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#A8B9CC"}/>
    </TryTechnology>

</div>
</div>
</div>
</div>
