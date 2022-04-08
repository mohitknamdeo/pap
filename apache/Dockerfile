FROM httpd:latest
RUN apt-get -y update; \
    apt-get -y upgrade;
# Copy apache vhost file to proxy php requests to php-fpm container
COPY my.apache.conf /usr/local/apache2/conf/my.apache.conf
RUN echo "Include /usr/local/apache2/conf/my.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
