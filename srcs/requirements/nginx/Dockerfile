FROM debian:buster

RUN apt-get update -y && apt-get install nginx -y

COPY conf/nginx.conf /etc/nginx/nginx.conf


RUN mkdir -p /etc/nginx/ssl && chown -R www-data.www-data /var/www/html  && chmod -R 755 /var/www/html


RUN apt install openssl -y && openssl req -x509 -nodes -batch  -newkey rsa:2048 -keyout /etc/nginx/ssl/inception.key -out /etc/nginx/ssl/inception.crt

RUN chmod 0777 /etc/nginx/ssl/inception.*


RUN apt-get install sysvinit-utils -y && apt install vim -y



EXPOSE 8080

CMD ["nginx","-g", "daemon off;"]