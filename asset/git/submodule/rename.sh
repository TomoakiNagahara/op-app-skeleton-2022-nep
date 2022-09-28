
# Change remote name and location

# Source name
A=${1:-origin}

# Distnation name
B=${2:-upstream}

# Rename origin name.
git submodule foreach git remote rename $A $B
