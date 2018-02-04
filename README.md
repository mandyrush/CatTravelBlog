# CatTravelBlog

## Fresh Install
### File Storage
Currently we are running featured images from the `storage\app\public` folder 
but it needs to be accessible in `public`. Feature images will not work otherwise,
so to create a symbolic link run:
```
php artisan storage:link
```

### Admin Views
* run `composer install`
* then run `php artisan vendor:publish --tag=vendor `
this will move adminlte vendor files into the public dir.