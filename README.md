Michael @ Verve Group

- Basic example of a polymorphic relation between a Post/Video with comments.

Models
- Comment = morphTo
- Post/Video - Comments\MorphMany

Commands
- composer install
- php artisan migrate:fresh --seed
- npm i
- npm run dev/watch

URLS
- https://relationships.test/post/1
- https://relationships.test/video/1