
# First, Change to local path.
sh asset/git/submodule/local.sh

# --> sudo port install realpath
HOME=$(realpath ~/)

# Change to remote path from local path.
sed -i -e "s|${HOME}/repo/|repo:~/repo/|g" .gitmodules

# Sync
git submodule sync
