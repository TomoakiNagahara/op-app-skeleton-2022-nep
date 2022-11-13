
# Branch name
REMOTE=${1:-origin}
BRANCH=${2:-2022}
#CURENT=OP

# Update git submodules
#git submodule foreach git branch           $CURENT
git submodule foreach git add .
git submodule foreach git stash save
git submodule foreach git fetch    $REMOTE
git submodule foreach git checkout         $BRANCH
git submodule foreach git rebase   $REMOTE/$BRANCH
#git submodule foreach git checkout         $CURENT
#git submodule foreach git stash pop
#git submodule foreach git reset
