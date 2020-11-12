#!/bin/bash

# replace with path to your local themes repo and sandbox
rsync -av --exclude-from='.sandbox-ignore' ./$1 wpdev@peanutbutterbatter.wordpress.com:/home/wpcom/public_html/wp-content/themes/pub/$1