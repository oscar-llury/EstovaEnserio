# This script is meant to be used with Git Bash.
# Repository root `back` and have a child `logs` folder.
# Use `./stop.sh` to stop the containers before calling `./start.sh` again.
# Use `git log -p start.sh` to view older versions of the run command.
# You can change the `Dockerfile` in this directory if you need a different image setup.
# You can change the `000-default.conf` in this directory if you need a different Apache config.
set -e

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )"
ROOT=$(readlink -f "$DIR/../../..")
NAME=estovaenserio

# Git Bash uses /c/path/to/folder, which Docker doesn't like. Fix the path.
WIN_ROOT=$(echo $ROOT | sed 's,/\(.\)/,\1:/,' | sed 's,/,\\,g')
cd ../..

docker build --tag estovaenserio:"$NAME" -f "$DIR"/Dockerfile .
docker run \
    --name "$NAME" \
    --detach \
    --tty \
    --interactive \
    --publish 80:80 \
    --volume "$WIN_ROOT":/home/usuario \
    estovaenserio:"$NAME"


#conectarse a docker desde cmd
#docker exec -it rtci bash