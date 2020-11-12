#!/bin/bash
# replace with your sandbox host
ssh wpdev@peanutbutterbatter.wordpress.com << EOF 
  cd '/home/wpcom/public_html/wp-content/themes/pub'; 
  svn revert -R .;
  svn cleanup --remove-unversioned;
  svn up;
EOF