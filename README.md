

## About Instilla Sales Taxes

The Instilla sales taxes application allows to retrieve, display and add to a virtual cart some products fetched from either a DB and a custom API. 
The application is connected with a MYSQL database to keep trace of the products chosen and generate a receipt for the cart total costs.

It is coded in PHP and JS with ajax, allowing to handle actions without refreshing the page. 


## Technical info

The platform relies on Laravel 10, written in PHP 8.2 and the project interacts with a MYSQL database. It might be compatible with PHP 7.4 due to the lacking of new PHP syntax.

Frontend is compiled with Vite, a newer alternative to Laravel Mix that keeps listening for every change on files, compiling them on live.

For the CSS, Tailwind is chosen as framework due to its easy usability and customizability.

### Technological Stacks

- HTML

- CSS

- Tailwind

- JS

- PHP 8.2

- MySQL

- Laravel 10

- Ajax

    
## Launching

For launching this application you need to create your local database and clone this repo from Github (https://github.com/EddieFreedome/instilla-sales-taxes) and open with an IDE (maybe VSCode).

Go to the .env file and replace DB_NAME and PORTS to correctly connect to the database.

Launch `php artisan key:generate`.

After that, make sure you run all migrations with 
`php artisan migrate`.

Done the migrations open a terminal and execute these commands:

`composer install`

`npm install`

`npm run dev`

To run local server launch:

`php artisan serve`

You did it.


## Contributing

Thank you for considering contributing to the Instilla Sales Taxes project! 
Just in case, le us know any major improvements we can do.

## Security Vulnerabilities

If you discover a security vulnerability within Instilla sales taxes, please don't use our platform for your personal application. Really. It's for a view-only purpose.


## Team and Profiles



_EddieFreedome:_ https://github.com/EddieFreedome


## License

If you want to take as exaple our platform for your projects you can do. 

