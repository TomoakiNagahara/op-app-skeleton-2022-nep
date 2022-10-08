
# branch name
BRANCH=${1:-2022}

# Init git submodule
# git submodule init
# git submodule update
git submodule update --init --recursive
git submodule foreach git checkout $BRANCH
