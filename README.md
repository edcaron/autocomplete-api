# Backend for global search

This is the backend code for the global search component

#

## Setting up
```
cd autocomplete-api

cp -a .env.example .env

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

./vendor/bin/sail up -d

./vendor/bin/sail artisan migrate:install

./vendor/bin/sail artisan migrate

./vendor/bin/sail artisan db:seed
```


#
## Testing with Curl command

curl --request GET \
  --url 'http://0.0.0.0:8091/api/autocomplete?search=Super%20cool' \
  --header 'Accept: application/json'
