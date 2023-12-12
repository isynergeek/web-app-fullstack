# The Property Table App

## How to run project for local development

```shell
## Git clone project to local directory
## Prepare Backend
cd backend
cp .env.example .env
composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
```

Backend will serve on `localhost:9000` port. It can be changed in `.env` file by `APP_PORT` parameter.

Also, API host for frontend can be changed in .env file inside frontend directory by  `VITE_API_HOST`
and `VITE_API_PREFIX` parameters.

```shell
## Prepare Frontend
cd frontend
cp .env.example .env
yarn 
yarn dev
```