#sudo cp ./* /var/www/html/ -r
git add --all
if [ -z $1 ]; then
	echo "NO PARAM"
git commit -m "this is an update of style"
else
	git commit -m "$1"
fi

git push
