
# branch name
BRANCH=${1:-2022}

# Init git submodule
git submodule init
git submodule update
git submodule foreach git checkout $BRANCH
