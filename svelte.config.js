import adapter from '@sveltejs/adapter-static';
import preprocess from 'svelte-preprocess';
const dev = process.env.NODE_ENV === 'development';

/** @type {import('@sveltejs/kit').Config} */
const config = {
	kit: {
		// hydrate the <div id="svelte"> element in src/app.html
		target: '#svelte',
		// hydrate: false,
		// router: false,
		adapter: adapter({
			// default options are shown
			pages: 'build',
			assets: 'build',
			fallback: null,
		}),
	},

	// Consult https://github.com/sveltejs/svelte-preprocess
	// for more information about preprocessors
	preprocess: preprocess({
		postcss: true,
	}),

	kit: {
		// hydrate: false,
		// router: false,
		paths: {
			base: dev ? '' : '/che',
		},
		adapter: adapter({
			// default options are shown
			pages: 'build/che',
			assets: 'build/che',
			fallback: null,
		}),
		trailingSlash: 'always'
	},
};

export default config;
