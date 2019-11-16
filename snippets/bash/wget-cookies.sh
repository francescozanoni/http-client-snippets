wget --http-user=my_username \
     --http-password=my_password \
     --keep-session-cookies \
     --save-cookies cookies.txt \
     -qO - http://example.com/login

wget --load-cookies cookies.txt \
     -qO - http://example.com/home