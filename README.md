# che-website
https://www.eclipse.org/che website mirror

## Contribute with the devfile

Use the factory url https://workspaces.openshift.com#https://github.com/eclipse/che-website

This factory will start che and clone the repo che-website.

On the right side `My workspace` view, you can start to preview the website after installing all dependencies (launch task 1 and then task 2)

### Commi
You can commit with Theia git view or the terminal (with the git container). Create a dedicated branch and a fork if you are not commiter.
In any case, you will need to create a Pull Request.

Note that before your contribution can be accepted by the project, you need to electronically sign the [Eclipse Contributor Agreement](https://github.com/eclipse/che/wiki/Eclipse-Contributor-Agreement) (ECA). 

Also, your commit should be signed-off.
For instance, in command line with the `-s` option:
```
$ git commit -s -m "Auto share multiple projects in single job"
```


### Updating the website
Once your PR is merged, we have jobs at https://ci.eclipse.org/che/job/che-website-pipeline/ that will update the site. It may take few hours.


### Che documentation ?
The Che documentation is not included. We merge the site and the doc afterwards in our ci. To contribute to the doc: https://github.com/eclipse-che/che-docs
