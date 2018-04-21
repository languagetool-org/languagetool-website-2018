## languagetool.org

#### Requirements
- PHP v7

#### Getting started

1. `composer install --ignore-platform-reqs`
2. Depending on your setup, you might need to change file permissions:  
`chmod a+rw storage/logs/`  
`chmod a+rw bootstrap/cache/`  
`chmod a+rw storage/framework/views/`  
`chmod a+rw storage/framework/sessions/`  
3. `cp .env_example .env`
4. `php artisan serve`
