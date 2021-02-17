#change version of the $lastStableVersion & $lastVersion in download.php.
#./setVersion.sh \"1.15.2\" \"1.12.1\" or ./setVersion.sh \"1.15.3\"
if [[ $# -eq 1 ]]; then
  echo "<?php \$lastVersion="$1"; \$lastStableVersion="$(cat version.md)" ?>" > download.php
else
  echo $2 > version.md
  echo "<?php \$lastVersion="$1"; \$lastStableVersion="$2" ?>" > download.php
fi
cat preDownload.php >> download.php
php download.php > download.html
rm download.php
git add download.html
git add version.md
git commit -m "auto releases for version "$1
#git push
