https://github.com/barryvdh/laravel-ide-helper

#ny side

gennerer en controller hvis der skal bruges en ny

kør "php artisan make:controller {navn}"

åben "routes\web.php" og tilføj din route

"Route::\{metode}("{path}", "{controller navn}@{mnethode}")->middleware("auth");"

->middleware("auth") klar bruger sikkerheden 

#opret tabel

kør "php artisan make:migration create_{navn}_table" for at oprrette migration filen

udfyld filen eks. se filen "database/migration/2014_10_12_000000_create_users_table.php"

kør "php artisan migrate" for at få laravel til at oprette databasen

#opret tabel dummy content

kør "php artisan make:seeder {navn}TableSeeder"

udfyld filen eks. se filen "UserTableSeeder.php"

run metohden udfyldes således
1. slet den indhodet i tabellen
2. indsæt dummy data

kør "php artisan db:seed" for at få laravel til at indsætte indholdet