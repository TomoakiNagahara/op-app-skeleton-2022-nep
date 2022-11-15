
 ## op-app-skeleton-2020-nep:/ci.sh
 #
 # @created   2022-10-31
 # @version   1.0
 # @package   op-app-skeleton-2020-nep
 # @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 # @copyright Tomoaki Nagahara All right reserved.

# git stash save
# git submodule foreach git stash save

# CI
php ci.php display=0
if [ $? -ne 0 ]; then
  exit 1
fi

# git stash pop
# git submodule foreach git stash pop
