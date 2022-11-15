
# Branch name
BRANCH=${1}

# Check argument.
if [ -z "$BRANCH" ]; then
  echo 'Empty branch name. --> sh asset/git/submodule/push.sh 2022'
  exit 1
fi

# Push
git submodule foreach git push origin $BRANCH
