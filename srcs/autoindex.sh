# NGINX config file location.
nginx_file='/etc/nginx/sites-enabled/default'

# Searches file for "autoindex on".
grep "autoindex on;" "$nginx_file" > /dev/null

# If it finds "autoindex on", switches it OFF.
if [ "$?" = "0" ]; then
	echo "AutoIndex is currently ON. Turning it OFF"
	sed -i 's/autoindex on/autoindex off/g' "$nginx_file"
	sed -i 's/root /var/www/localhost;/root /var/www/localhost/wordpress;/g' "$nginx_file"
	autoindex="OFF";

# Else, switches it ON.
else
	echo "AutoIndex is currently OFF. Turning it ON"
	sed -i 's/autoindex off/autoindex on/g' "$nginx_file"
	sed -i 's/root /var/www/localhost/wordpress;/root /var/www/localhost;/g' "$nginx_file"
	autoindex="ON";
fi

# Restarts NGINX and confirms switch.
echo "Restarting NGINX"
/etc/init.d/nginx restart
echo -e "AutoIndex is now $autoindex!"
