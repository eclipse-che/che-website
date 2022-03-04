<script lang="ts">
  import { onMount } from "svelte";
	import { darkModeThemeEnabled } from '$lib/theme/colorTheme';

  let darkMode = false;
  let toggleText = "Switch to Dark Theme";
  let icon = "🌓";

  function changeMode() {
    if (darkMode) {
      setLight();
    } else {
      setDark();
    }
  }

  function setDark() {
    document.documentElement.classList.add("dark");
    darkMode = true;
    darkModeThemeEnabled.set(true);
    toggleText = "Switch to Light Theme";
    icon = "☀️";
  }

  function setLight() {
    document.documentElement.classList.remove("dark");
    darkMode = false;
    darkModeThemeEnabled.set(false);
    toggleText = "Switch to Dark Theme";
    icon = "🌓";
  }

  onMount(() => {
    if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
      setDark();
    } else {
      setLight();
    }

    // subscribe to listeners as well
    var watchingMedia = window.matchMedia("(prefers-color-scheme: dark)");
    watchingMedia.addEventListener("change", (event) => {
      if (event.matches) {
        setDark();
      } else {
        setLight();
      }
    });
  });
</script>

<div title={toggleText}>
  <label for="toggleB" class="flex items-center cursor-pointer">
    <!-- toggle -->
    <div class="relative">
      <!-- input -->
      <input
        type="checkbox"
        id="toggleB"
        class="sr-only"
        on:click={changeMode}
      />
      <!-- line -->
      <div class="block bg-gray-600 dark:bg-gray-800  w-8 h-5 rounded-full" />
      <!-- dot -->
      <div
        class="dot absolute left-1 top-1 dark:bg-gray-500 bg-white w-3 h-3 rounded-full transition"
      />
    </div>
    <!-- label -->
    <div class="ml-3 text-gray-700 dark:text-gray-700 font-medium text-xs">
      {icon}
    </div>
  </label>
</div>

<style>
  input:checked ~ .dot {
    transform: translateX(100%);
    background-color: che-yellow;
  }
</style>
