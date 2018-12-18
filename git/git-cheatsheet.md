# [Git Cheat Sheet](#git-cheat-sheet)

## [Basic Git Guides](#git-basic-guides)

* Repository initialization and configuration.
	```bash
	# initialize the repo.
	git init
	
	# add the remote origin of the repo.
	git remote add origin https://github.com/user/repo.git
	
	# verify remote origin.
	git remote -v
	# output -> origin  https://github.com/user/repo.git (fetch)
	# output -> origin  https://github.com/user/repo.git (push)
	```

* Set-up email and user name.
	```bash
	git config user.email "juan_dela_cruz@example.com"
	git config user.name "Juan Dela Cruz"
	```

* Check status of all files in the repository
	```bash
	git status
	```

* Adding untracked files or delete files.
	```bash
	# add a file to track.
	git add file_name.any

    # add all files within the current directory
    git add .

	# add all files.
	git add -A
	```

* Commiting and pushing changes and added files.
	```bash
	# commit all changes.
	git commit -m "My commit message"

	# push to a branch. In the exampale the branch is master it could be any branch.
	git push origin master
	```

* Pulling and merging changes from a branch.
	```bash
	# pull any updates from a branch.
	git pull origin master
	
	# In the case of unrelated histories add --allow-unrelated-histories
	git pull origin master --allow-unrelated-histories
	
	# all changes will be merged and will notify for merge conflicts. 
	# if there are conflicts then resolve them manually.
	# commit and push the changes to a branch.
	git push origin master
	```

* Cloning a repository.
	```bash
	git clone https://github.com/user/repo.git
	
    # example
	git clone https://github.com/arielmagbanua/android-mobile-app-dev-examples.git
	```

## [Git Branching Guides](#git-branching-guides)

* Creating and checkout from the branch.
	```bash
	git checkout -b branch_name
	```

* Checkout a branch.
	```bash
	git checkout branch_name
	```

* Merging updates from other branches.
	```bash
	# merge changes from example_branch_name_1
	git merge example_branch_name_1
	
	# in case of unrelated histories add --allow-unrelated-histories
	git merge example_branch_name_1 --allow-unrelated-histories
	
	# after merging if there are merge conflicts manually resolved them.
	# commit the branch.
	```

* Delete a local branch
    ```bash
    # The -d option stands for --delete, which would delete the local branch, only if you have already pushed and merged it with your remote branches.
    git branch -d branch_name

    # The -D option stands for --delete --force, which deletes the branch regardless of its push and merge status, so be careful using this one!
    git branch -D branch_name
    ```

* Delete a remote branch
    ```bash
    # git push <remote_name> --delete <branch_name>
    # git push <remote_name> :<branch_name>
    git push origin --delete remote_branch_name
    ```

## [Git Collaboration Guides](#git-collaboration-guides)

* By default your public repository can be cloned by anyone but only added collaborators can commit to any branch.

* In Github you can add collaborators to be able to contribute and commit to repositories.

* Outsiders can fork and make pull request to the owner of the repository in order to integrate their changes.

* GitHub Flow - https://guides.github.com/introduction/flow/

