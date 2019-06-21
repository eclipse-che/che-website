# che-website
https://www.eclipse.org/che website mirror

## Contribute with the devfile

Use the factory url https://che.openshift.io/f?url=https://github.com/eclipse/che-website.

This factory will start che and clone the repo che-website.

On the right side `My workspace` view, you can start to preview the website with the command `start che-website`.
Open the port 80 and the link as suggested. Click on `che/`.
You can then make your changes on the files in `/projects/che-website/che`

You will notice that a `/projects/che` symbolic link has been added. This is to have the apache server having the right `root` folder while navigating.

### Commit.Pu.sh
You can commit with Theia git view or the terminal (with the git container). Create a dedicated branch and a fork if you are not commiter.
In any case, you will need to create a Pull Request.

### Updating the website
Once your PR is merged, we have jobs at https://ci.eclipse.org/che that will update the site. It may take few hours.


### Che documentation ?
The Che documentation is not included. We merge the site and the doc afterwards in our ci. To contribute to the doc: https://github.com/eclipse/che-docs.