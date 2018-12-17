# Small Team Workflow

> This workflow is based on [github workflow](https://guides.github.com/introduction/flow/ "Github Workflow") inline link.
> This is not a dogmatic workflow and feel free to modify and make improvements depending on the project, the team, or preference.

## Workflow Checklist
* __Create and Provide Branches to Developers As Needed__  
Each team member must have their own branches where they can work simulatneously with other developers. This allows the developer to commit their own work and unit test their work safely without affecting others work. Senior developers or the project manager can name this branch very descriptively or just by prefixing those developer branches, for example ``dev-ariel``, ``dev-arriz``, or ``dev-vic``. It is a good idea as well to create branches from a certain milestone or features with a ``dev`` prefix like ``dev-milestone-1``, ``dev-build-1.0``, or ``dev-db-layer``.

* __Avoid Developers Committing in a Single Branch__  
Generally this is a bad practice and does not adhere to the principle of "__collaboration__" and definitely defeat the purpose git and version control in general. The following detailed arguments against this practice:
    * Almost impossible to track and code review commits.
    * Developers will have to check if there are newer commits to be pulled before they can commit.
    * Difficult to avoid data loss if bug is introduced and if there is a need to execute a rollback on certain commit.

* __Commit Every End of Task or Work__  
Every end of task developers must commit their work. Avoid commiting large chunk of work or code, even in the case of single line of code the developer must commit it. This is to avoid data loss in case your machine will be damaged or corrupted and in case of extreme circumstance like fire.  
![](../images/justdoit.png "Just do it!")