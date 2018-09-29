FROM ubuntu:14.04

RUN apt-get update && \
    apt-get install -y \
    apache2 \
    php5 \
    libapache2-mod-php5 \
    php5-mcrypt \
    php5-mysql \
    php5-imagick \
    language-pack-EN \
    php5-dev \
    php5-xdebug

ENV LOCAL true

RUN echo "zend_extension=/usr/lib/php5/20121212/xdebug.so" >> /etc/php5/apache2/php.ini
RUN echo "xdebug.remote_enable=1" >> /etc/php5/apache2/php.ini
RUN echo "xdebug.remote_handler=dbgp" >> /etc/php5/apache2/php.ini
RUN echo "xdebug.remote_mode=req" >> /etc/php5/apache2/php.ini
RUN echo "xdebug.remote_host=127.0.0.1" >> /etc/php5/apache2/php.ini
RUN echo "xdebug.remote_port=9000" >> /etc/php5/apache2/php.ini

# redirect log filts to stdout and stderr
RUN ln -sf /dev/stdout /var/log/apache2/access.log \
    && ln -sf /dev/stderr /var/log/apache2/error.log

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]