## Run locally
Requires PHP >= 8.0

### Install
```
pecl install ds
composer install
```

### Run
```
./vendor/bin/psalm
```

## Run in docker

### Install

```
composer install
docker-compose up -d
```

### Run
```
docker-compose exec -u 1000:1000 php-cli ./vendor/bin/psalm --no-cache
```
