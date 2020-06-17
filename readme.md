##### System Requirements

- **Node 6.0+**
- **Redis 3+**
- **laravel-echo-server** 

##### Getting Started

**_Step : 1_**

```
git clone https://github.com/ycsiow888/laravel-Event-Broadcasting-Redis.git

```

**_Step : 2_**

Go to project directory using and type

```
composer install

```

**_Step : 3_**

Rename env.example to .env and generate laravel application key

```
php artisan key:generate

```

Also change in .env

```
BROADCAST_DRIVER=redis

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

```

**_Step : 4_**

install Node dependencies

```
npm install

```

**_Step : 5_**
Create database name simple-chat-app_v2 and type

```
php artisan migrate

```

**_Step : 6_**

Run Project

```
php artisan serve

```
**_Step : 7_**

Open project directory in second terminal/cmd

```
laravel-echo-server start

```

Open http://127.0.0.1:8000 url in multiple browser

Everytime clicking broadcasting will send message to all users
