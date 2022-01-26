FROM php:8.0-cli

RUN apt-get update && \
    pecl install \
        ds && \
    docker-php-ext-enable \
        ds

COPY entrypoint /entrypoint
ENTRYPOINT ["/entrypoint"]

CMD trap "exit 0;" TERM INT; sleep 99999999999d & wait
