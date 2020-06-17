## CRICKET- How to use

First you need to copy .env.example file to .env

```shell
$ cp .env.example .env
```
Setup DB connection in .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cricket
DB_USERNAME=root
DB_PASSWORD=passwords
```

##### Run .build-script.sh file or command

Then run server

```shell
$ php artisan serve
```

User/Admin access
```
YOURURL/admin/login

Email: admin@cricket.com
Password: dev#cricket@10
```

