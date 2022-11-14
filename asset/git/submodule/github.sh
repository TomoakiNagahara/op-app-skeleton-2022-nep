
# user name
USER_NAME=${1}

# Check argument.
if [ -z "$USER_NAME" ]; then
  echo 'Empty github user name.'
  exit 1
fi

# Replace
sed -i -e "s/onepiece-framework/${USER_NAME}/g" .gitmodules

# Sync
git submodule sync
