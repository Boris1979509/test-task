## Test task

#### Clone repository:
```sh
git clone https://github.com/Boris1979509/test-task.git
```
#### Mysql:
```sh
CREATE DATABASE `test-task`
```
#### API:
```sh
$ cd test-task/backend
```
```sh
$ composer install
```
```sh
$ php artisan migrate
```
```sh
$ php artisan serve /localhost:8000/
```
#### CLIENT
```sh
$ cd ../frontend
```
```sh
$ npm install
```
```sh
$ npm run dev /localhost:8080/
```
