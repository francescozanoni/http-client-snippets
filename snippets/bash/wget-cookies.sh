wget --http-user=my_username \
     --http-password=my_password \
     --keep-session-cookies \
     --save-cookies cookies.txt \
     -qO - http://www.example.com/login

wget --load-cookies cookies.txt \
     -qO - http://www.example.com/home