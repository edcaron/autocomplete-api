# Backend for global search

This is the backend code for the global search component

#

## Setting up
```
composer install

./vendor/bin/sail up

php artisan migrate

php artisan db:seed
```


#
## Testing with Curl command

curl --request GET \
  --url 'http://0.0.0.0:8091/api/autocomplete?search=Super%20cool' \
  --header 'Accept: application/json'
