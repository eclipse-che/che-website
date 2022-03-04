<script lang="ts">
    export let hrefLink;
</script>

<div class="flex flex-col py-5 text-center transition duration-300 dark:bg-gray-800 transform rounded-full border-r-4 dark:border-gray-700 shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl items-center justify-center align-middle">
    <a href='{hrefLink}' target="_blank">
        <slot />
    </a>
</div>
