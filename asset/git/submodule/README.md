About each files
===

# init.sh

 Initializing submodules. Can specify branch name.

```sh
sh init.sh branch_name
```

# rename.sh

 Change remote name.

```sh
sh rename.sh origin upstream
```

# update.sh

 Automatically update each submodules.

```sh
sh update.sh [origin] [branch_name]
```

# ~~origin.sh~~

 ~~Add new origin that private.~~
 ~~This script is deprecated.~~

 Do not use this file.
 Use local.sh instead.
 That is clean and correct.

# github.sh

 Change github user name.

```sh
sh github.sh my_github_user_name
```

# local.sh

 Change to local repository from git.

```sh
sh local.sh
```

# repo.sh

 Change to private server repository from git.

```sh
sh repo.sh
```

# push.sh

 Push all submodule branch.

```sh
sh push.sh branch_name
```
