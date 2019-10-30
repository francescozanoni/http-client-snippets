curl --user my_username:my_password \
     -L --cookie-jar cookies.txt \
     http://www.example.com/login

curl -L --cookie cookies.txt \
     http://www.example.com/home