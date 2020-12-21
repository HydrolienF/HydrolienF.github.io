#change version of the $lastStableVersion & $lastVersion in download.php.
#./setVersion.sh \"1.15.2\" \"1.12.1\" or ./setVersion.sh \"1.15.3\"
if [[ $# -eq 1 ]]; then
  echo "1 seul agrs"
  echo "<?php \$lastStableVersion="$1"; \$lastVersion="$(cat version.md)" ?>" > download.php
else
  echo $2 > version.md
  echo "<?php \$lastStableVersion="$1"; \$lastVersion="$2" ?>" > download.php
fi
cat preDownload.php >> download.php
php download.php > download.html
