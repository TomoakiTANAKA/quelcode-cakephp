docker-compose up -d
docker-compose exec php bash -c 'cd mycakeapp && composer install -n'
