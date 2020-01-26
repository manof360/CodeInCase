

- if you in shared host you need to change the path from public to public_thml by this code  to index.php  in public forlder : 

/*
| cahnge save palece to public_html 
|
*/

$app->bind('path.public', function() {
           return __DIR__;
});



- if you are in shared host and you  need to make  storage link  use this code in web.php for onece  : 

/*
|storage link 
|
*/

Route::get('/foo', function () {
Artisan::call('storage:link');
});

