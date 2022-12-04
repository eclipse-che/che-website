<script lang="ts">
	import { darkModeThemeEnabled } from '$lib/theme/colorTheme';
	import { onMount } from 'svelte';
	import { variables } from '$lib/variables';
	import { pageTitle, pageDescription, pageUrl } from '$lib/stores';

	$pageTitle = 'How it Works';
	$pageDescription = 'A Closer Look at the High Level Architecture of Eclipse Che.';
	$pageUrl = '/technology/';

	let highLevelImage;
	let devfileToDevWorkspaceImage;
	let devWorkspaceToKubernetesImage;
	let devWorkspaceWorkspaceCreationFlowImage;

	onMount(() => {
	darkModeThemeEnabled.subscribe(isEnabled => {
		if (isEnabled) {
			highLevelImage = `${variables.imagesPath}/how-it-works-high-level-dark.png`;
			devfileToDevWorkspaceImage = `${variables.imagesPath}/how-it-works-devfile-todevworkspace-dark.png`;
			devWorkspaceToKubernetesImage = `${variables.imagesPath}/how-it-works-devworkspace-to-kubernetes-dark.png`;
			devWorkspaceWorkspaceCreationFlowImage = `${variables.imagesPath}/how-it-works-workspace-creation-flow-dark.png`;
		} else {
			highLevelImage = `${variables.imagesPath}/how-it-works-high-level-light.png`;
			devfileToDevWorkspaceImage = `${variables.imagesPath}/how-it-works-devfile-todevworkspace-light.png`;
			devWorkspaceToKubernetesImage = `${variables.imagesPath}/how-it-works-devworkspace-to-kubernetes-light.png`;
			devWorkspaceWorkspaceCreationFlowImage = `${variables.imagesPath}/how-it-works-workspace-creation-flow-light.png`;
		}
	});

	});
</script>


<section>
	<div class="px-4 py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10 mt-10">
		<div class="max-w-xl md:mx-auto sm:text-center lg:max-w-2xl">
  		<h2 class="max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
			  <span class="relative inline-block text-gray-500">
			    <span class="relative dark:text-white">
				    High Level Architecture
			    </span>
			  </span>
		  </h2>
		</div>
	</div>
  <div class="container mx-auto flex items-center justify-center flex-col">
	  <img class="w-full rounded" src="{highLevelImage}" alt="" />
	  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-base text-gray-700 dark:text-gray-300 md:text-lg py-5">
			<p>
			  Workspaces are defined with <b>Devfiles</b>, YAML files versioned in the git repository close to the application source code.
			</p>
			<p>
			  Eclipse Che <b>Dashboard</b> is a web application that transforms a Devfile provided by an authenticated user into a Kubernetes Custom Resource (the DevWorkspace).
			</p>
			<p>
			  The <b>DevWorkspace Operator</b> extends the Kubernetes API to support DevWorkspaces objects, a Custom Resource specialized for development environment provisioning.
			</p>
			<p>
			  A <b>Workspace</b> is composed of Pods, Services, Ingresses, Volumes and other Kubernetes objects. All together those objects empower developers to code, build and deploy using a web based IDE.
			</p>
		</div>  
	</div>
</section>

<section>
	<div class="px-4 py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10 mt-10">
		<div class="max-w-xl md:mx-auto sm:text-center lg:max-w-2xl">
  		<h2 class="max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
			  <span class="relative inline-block text-gray-500">
			    <span class="relative dark:text-white">
            A Closer Look: Che Dashboard
          </span>
        </span>
		  </h2>
		</div>
  </div>
	<div class="container mx-auto flex items-center justify-center flex-col">
		<img class="w-full lg:w-3/4 rounded" src="{devfileToDevWorkspaceImage}" alt="" />
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-base text-gray-700 dark:text-gray-300 md:text-lg py-5">
			<p>
			  The <b>Dashboard</b> is Che frontend application to manage DevWorkspaces. It lets authenticated users create, list, stop or delete DevWorkspaces. The input parameter for a DevWorkspace creation is an URL to a git repo or to a `Devfile.yaml`.  
			</p>
			<p>
			  The Che dashboard uses other server-side components: the <b>Che server</b>, that is both a gateway to external git services and a Kubernetes namespaces provisioner and the <b>Devfile Registry</b> that returns a list of sample DevWorkspaces.
			</p>
		</div>
	</div>
</section>

<section>
	<div class="px-4 py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10 mt-10">
		<div class="max-w-xl md:mx-auto sm:text-center lg:max-w-2xl">
  		<h2 class="max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
			  <span class="relative inline-block text-gray-500">
			    <span class="relative dark:text-white">
            A Closer Look: DevWorkspace Operator
		      </span>
		    </span>
      </h2>
    </div>
  </div>
  <div class="container mx-auto flex items-center justify-center flex-col">
		<img class="w-full rounded" src="{devWorkspaceToKubernetesImage}" alt="" />
    <div class="grid grid-cols-3 gap-8 row-gap-10 mt-8">
      <div class="max-w-md sm:mx-auto sm:text-center">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50 dark:bg-indigo-700 sm:mx-auto sm:w-24 sm:h-24">
          <svg class="w-12 h-12 text-deep-purple-accent-400 dark:text-gray-200 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-3 text-xl font-bold leading-5">Universal API</h6>
        <ul class="mb-3 text-sm text-gray-900 dark:text-gray-300 text-left list-outside list-disc ml-6">
          Che Workspaces are Kubernetes object:
          <li>Managed with any Kubernetes client such as kubectl</li>
          <li>Secured by Role-Based Access Control (RBAC) </li>
          <li>Can be validated and protected by Admission Webhooks</li>
          <li>The Devfile specification is automatically generated from the API</li>
        </ul>
      </div>
      <div class="max-w-md sm:mx-auto sm:text-center">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50 dark:bg-indigo-700 sm:mx-auto sm:w-24 sm:h-24">
          <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-3 text-xl font-bold leading-5">Highly Available</h6>
        <p class="mb-3 text-sm text-gray-900">
          The new engine is a Kubernetes controller. As such it runs behind the kube-apiserver that is designed to scale horizontally. The data is persisted in a key value store designed to be highly available (etcd).
        </p>
      </div>
      <div class="max-w-md sm:mx-auto sm:text-center">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50 dark:bg-indigo-700 sm:mx-auto sm:w-24 sm:h-24">
          <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-3 text-xl font-bold leading-5">Simple Design</h6>
        <p class="mb-3 text-sm text-gray-900">
          The new workspace engine has a single responsibility that is to manage workspace resources. It's decoupled from the developers IDEs and from the server side components of Che. Communications between components happens asynchronously using ConfigMaps and Secrets rather than a REST API.
        </p>
      </div>
	</div>
</section>


<section>
	<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
		<div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
		  <div>
		  </div>
		  <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
			<span class="relative inline-block text-gray-500">
			  <span class="relative dark:text-white">Workspace components
			</span>
			</span>
		  </h2>
		  <p class="text-base text-gray-700 dark:text-gray-300 md:text-lg">
			The Kubernetes objects that power a development environment, IDE included
		  </p>
		</div>
		<div class="container mx-auto flex items-center justify-center flex-col">
			<img class="w-full rounded" src="{devWorkspaceWorkspaceCreationFlowImage}" alt="" />
			<div class="grid grid-cols-4 gap-8 row-gap-10 mt-8">
				<div class="max-w-md sm:mx-auto sm:text-center">
				  <h6 class="mb-3 text-xl font-bold leading-5">Init Containers</h6>
                  <p class="mb-3 text-sm text-gray-900">
                    Init containers are used to perform pre-start actions such as cloning a git repository, downloading the IDE or pre-downloading IDE extensions.  
                  </p>                  
				</div>
				<div class="max-w-md sm:mx-auto sm:text-center">
				  <h6 class="mb-3 text-xl font-bold leading-5">Developer defined containers</h6>
				  <p class="mb-3 text-sm text-gray-900">
					These are the containers that are specified in the Devfile. The entrypoint of these containers must be non-terminating. The IDE and its extensions are usually run as standalone binaries in one of these containers although they can run in its own container too.
				  </p>
				</div>
				<div class="max-w-md sm:mx-auto sm:text-center">
                    <h6 class="mb-3 text-xl font-bold leading-5">Persistent Volumes</h6>
                    <p class="mb-3 text-sm text-gray-900">
                      Containers are ephemeral: when a workspace is stopped changes to its files are wiped out unless they belonged to a PV. By default code is cloned in a PV. Persistent Volumes can be specified in Devfiles or can be labeled and annotated to be automatically mounted.
                    </p>
                  </div>
                  <div class="max-w-md sm:mx-auto sm:text-center">
                    <h6 class="mb-3 text-xl font-bold leading-5">Secrets and ConfigMaps</h6>
                    <p class="mb-3 text-sm text-gray-900">
                        Kubernetes Secrets and ConfigMap can be automatically mounted in containers with user credentials and configurations. The DevWorkspace operator selects which ones based on their labels.
                    </p>
                  </div>
            </div>
    </div>
	
</section>