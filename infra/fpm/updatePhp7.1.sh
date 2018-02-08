/usr/bin/expect <<EOF

spawn add-apt-repository ppa:ondrej/php
expect '$ '
send "Y\r"
expect EOF
