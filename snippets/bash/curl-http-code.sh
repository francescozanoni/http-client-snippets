HTTP_CODE=$(curl -s \
                 -o /dev/null \
                 -D - \
                 http://example.com \
                 | grep "HTTP/" \
                 | sed -E 's/.+ ([0-9]{3}) .+/\1/')