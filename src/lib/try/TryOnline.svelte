<script lang="ts">
	import { darkModeThemeEnabled } from '$lib/theme/colorTheme';
	import Java from '@icons-pack/svelte-simple-icons/src/components/Java.svelte';
	import Go from '@icons-pack/svelte-simple-icons/src/components/Go.svelte';
	import Python from '@icons-pack/svelte-simple-icons/src/components/Python.svelte';
	import ReactJs from '@icons-pack/svelte-simple-icons/src/components/ReactJs.svelte';
	import DotNet from '@icons-pack/svelte-simple-icons/src/components/DotNet.svelte';
	import Rust from '@icons-pack/svelte-simple-icons/src/components/Rust.svelte';
	import Quarkus from '@icons-pack/svelte-simple-icons/src/components/Quarkus.svelte';
	import Spring from '@icons-pack/svelte-simple-icons/src/components/Spring.svelte';
	import Angular from '@icons-pack/svelte-simple-icons/src/components/Angular.svelte';
	import PHP from '@icons-pack/svelte-simple-icons/src/components/Php.svelte';
	import Scala from '@icons-pack/svelte-simple-icons/src/components/Scala.svelte';
	import C from '@icons-pack/svelte-simple-icons/src/components/C.svelte';
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
      <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://codeready-codeready-workspaces-operator.apps.sandbox.x8i5.p1.openshiftapps.com/devfile-registry/devfiles/03_java11-maven-gradle/devfile.yaml&override.attributes.persistVolumes=false'>
        <Java size={70} color={$darkModeThemeEnabled ? 'currentColor' : '#007396'}  />
      </TryTechnology>

      <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://codeready-codeready-workspaces-operator.apps.sandbox.x8i5.p1.openshiftapps.com/devfile-registry/devfiles/05_go/devfile.yaml&override.attributes.persistVolumes=false'>
        <Go size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#00ADD8"}/>
      </TryTechnology>

      <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://codeready-codeready-workspaces-operator.apps.sandbox.x8i5.p1.openshiftapps.com/devfile-registry/devfiles/04_python/devfile.yaml&override.attributes.persistVolumes=false'>
        <Python size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#3776AB"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://eclipse-che.github.io/che-devfile-registry/main/devfiles/nodejs-react/devfile.yaml&override.attributes.persistVolumes=false'>
        <ReactJs size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#61DAFB"}/>
    </TryTechnology>


    <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://codeready-codeready-workspaces-operator.apps.sandbox.x8i5.p1.openshiftapps.com/devfile-registry/devfiles/05_dotnet/devfile.yaml&override.attributes.persistVolumes=false'>
        <DotNet size={70}  color={$darkModeThemeEnabled ? 'currentColor' : "#512BD4"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://eclipse-che.github.io/che-devfile-registry/main/devfiles/rust/devfile.yaml&override.attributes.persistVolumes=false'>
        <Rust size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#000000"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://codeready-codeready-workspaces-operator.apps.sandbox.x8i5.p1.openshiftapps.com/devfile-registry/devfiles/03_java11-maven-quarkus/devfile.yaml&override.attributes.persistVolumes=false'>
        <Quarkus size={70}  color={$darkModeThemeEnabled ? 'currentColor' : "#00ADD8"}/>
    </TryTechnology>


    <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://codeready-codeready-workspaces-operator.apps.sandbox.x8i5.p1.openshiftapps.com/devfile-registry/devfiles/03_java8-maven-spring-boot-http-booster/devfile.yaml&override.attributes.persistVolumes=false'>
        <Spring size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#6DB33F"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://eclipse-che.github.io/che-devfile-registry/main/devfiles/nodejs-angular/devfile.yaml&override.attributes.persistVolumes=false'>
        <Angular size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#DD0031"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://codeready-codeready-workspaces-operator.apps.sandbox.x8i5.p1.openshiftapps.com/devfile-registry/devfiles/05_php-cake/devfile.yaml&override.attributes.persistVolumes=false'>
        <PHP size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#777BB4"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://eclipse-che.github.io/che-devfile-registry/main/devfiles/scala-sbt/devfile.yaml&override.attributes.persistVolumes=false'>
        <Scala size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#DC322F"}/>
    </TryTechnology>

    <TryTechnology hrefLink='https://workspaces.openshift.com/f?url=https://codeready-codeready-workspaces-operator.apps.sandbox.x8i5.p1.openshiftapps.com/devfile-registry/devfiles/05_cpp/devfile.yaml&override.attributes.persistVolumes=false'>
        <C size={70} color={$darkModeThemeEnabled ? 'currentColor' : "#A8B9CC"}/>
    </TryTechnology>

</div>
</div>
</div>
</div>
