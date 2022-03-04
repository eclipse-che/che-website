import { dev } from '$app/env';

let basePath;
if (dev) {
    basePath = ''
} else {
    basePath = '/che'
}

const imagesPath = `${basePath}/images-website`;
export const variables = {
    isDevelopment: dev,
    basePath,
    imagesPath
};