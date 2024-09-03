# Epoch

A simple social media web app using laravel

## Requirements

- PHP >= 8.1
- Composer
- Node.js

## So what's it for?

This project is just a simple example of a social media web app
using laravel and that's pretty much it.

## Then, how do i run it on my computer?

If you really want to run this web app locally follow the steps below 'kay?

Clone the repo

```bash
git clone https://github.com/Hkaar/7Books.git
```

Go to the repo folder

```bash
cd 7Books
```

Install the required dependecies

```bash
composer install
```

Generate the env

`Bash` :

```bash
mv .env.example .env && cp .env .env.example
```

`Powershell` :

```powershell
Rename-Item .\.env.example .\.env ; Copy-Item .\.env .\.env.example
```

Build the assets

```bash
npm run build
```

Generate the app key

```bash
php artisan key:generate
```

Run the migrations

```bash
php artisan migrate
```

Seed the database

```bash
php artisan db:seed
```

And then serve it!

```bash
php artisan serve
```

## So, how do i help?

You can help the project by contributing to it or by just using the app :)

See on how to contribute by going to the contribution guide of the project

And that's all, btw here's a table for your reward

ʕノ•ᴥ•ʔノ ︵ ┻━┻
