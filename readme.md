## Laravel React Tasks

[![Build Status](https://travis-ci.com/jeremykenedy/laravel-react-tasks.svg?branch=master)](https://travis-ci.com/jeremykenedy/laravel-react-tasks)
[![StyleCI](https://github.styleci.io/repos/151041710/shield?branch=master)](https://github.styleci.io/repos/151041710)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jeremykenedy/laravel-react-tasks/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jeremykenedy/laravel-react-tasks/?branch=master)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

#### Table of contents
- [About](#about)
- [Features](#features)
- [Installation Instructions](#installation-instructions)
- [Routes](#routes)
- [File Tree](#file-tree)
- [License](#license)

### About
Simple task list example using Laravel 5.7 and ReactJS UI.

### Features
| Laravel React Tasks Features |
| :------------ |
|Built on [Laravel](http://laravel.com/) 5.7|
|Built on [Bootstrap](https://getbootstrap.com/) 4|
|Front End Built on [ReactJS](https://reactjs.org/)|

### Installation Instructions
1. Run `git clone https://github.com/jeremykenedy/laravel-react-tasks.git laravel-react-tasks`
2. From the projects root run `cp .env.example .env`
3. Run `composer update` from the projects root folder
4. From the projects root folder run `php artisan key:generate`
5. From the projects root folder run `yarn install`
6. From the projects root folder run `yarn run dev` or `yarn run production`
  * You can watch assets with `yarn run watch`
7. From the projects root folder run `php artisan serve`

### Routes

```
+--------+----------+------------------------+------+--------------------------------------------------------+------------+
| Domain | Method   | URI                    | Name | Action                                                 | Middleware |
+--------+----------+------------------------+------+--------------------------------------------------------+------------+
|        | GET|HEAD | api/projects           |      | App\Http\Controllers\ProjectController@index           | api        |
|        | POST     | api/projects           |      | App\Http\Controllers\ProjectController@store           | api        |
|        | GET|HEAD | api/projects/{id}      |      | App\Http\Controllers\ProjectController@show            | api        |
|        | PUT      | api/projects/{project} |      | App\Http\Controllers\ProjectController@markAsCompleted | api        |
|        | POST     | api/tasks              |      | App\Http\Controllers\TaskController@store              | api        |
|        | PUT      | api/tasks/{task}       |      | App\Http\Controllers\TaskController@markAsCompleted    | api        |
|        | GET|HEAD | {path?}                |      | Illuminate\Routing\ViewController                      | web        |
+--------+----------+------------------------+------+--------------------------------------------------------+------------+
```

### File Tree

```
Laravel React Tasks
├── .env.example
├── .env.travis
├── .gitattributes
├── .gitignore
├── .travis.yml
├── LICENSE
├── app
│   ├── Console
│   │   └── Kernel.php
│   ├── Exceptions
│   │   └── Handler.php
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── Auth
│   │   │   │   ├── ForgotPasswordController.php
│   │   │   │   ├── LoginController.php
│   │   │   │   ├── RegisterController.php
│   │   │   │   ├── ResetPasswordController.php
│   │   │   │   └── VerificationController.php
│   │   │   ├── Controller.php
│   │   │   ├── ProjectController.php
│   │   │   └── TaskController.php
│   │   ├── Kernel.php
│   │   └── Middleware
│   │       ├── Authenticate.php
│   │       ├── CheckForMaintenanceMode.php
│   │       ├── EncryptCookies.php
│   │       ├── RedirectIfAuthenticated.php
│   │       ├── TrimStrings.php
│   │       ├── TrustProxies.php
│   │       └── VerifyCsrfToken.php
│   ├── Models
│   │   ├── Project.php
│   │   └── Task.php
│   ├── Providers
│   │   ├── AppServiceProvider.php
│   │   ├── AuthServiceProvider.php
│   │   ├── BroadcastServiceProvider.php
│   │   ├── EventServiceProvider.php
│   │   └── RouteServiceProvider.php
│   └── User.php
├── artisan
├── bootstrap
│   ├── app.php
│   └── cache
│       ├── .gitignore
│       ├── packages.php
│       └── services.php
├── composer.json
├── composer.lock
├── config
│   ├── app.php
│   ├── auth.php
│   ├── broadcasting.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── hashing.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   ├── session.php
│   └── view.php
├── database
│   ├── .gitignore
│   ├── factories
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2014_10_12_100000_create_password_resets_table.php
│   │   ├── 2018_09_30_070315_create_tasks_table.php
│   │   └── 2018_09_30_070349_create_projects_table.php
│   └── seeds
│       └── DatabaseSeeder.php
├── package.json
├── phpunit.xml
├── public
│   ├── .htaccess
│   ├── css
│   │   └── app.css
│   ├── favicon.ico
│   ├── index.php
│   ├── js
│   │   └── app.js
│   ├── mix-manifest.json
│   ├── robots.txt
│   └── svg
│       ├── 403.svg
│       ├── 404.svg
│       ├── 500.svg
│       └── 503.svg
├── readme.md
├── resources
│   ├── js
│   │   ├── app.js
│   │   ├── bootstrap.js
│   │   └── components
│   │       ├── App.js
│   │       ├── Example.js
│   │       ├── Header.js
│   │       ├── NewProject.js
│   │       ├── ProjectsList.js
│   │       └── SingleProject.js
│   ├── lang
│   │   └── en
│   │       ├── auth.php
│   │       ├── pagination.php
│   │       ├── passwords.php
│   │       └── validation.php
│   ├── sass
│   │   ├── _variables.scss
│   │   └── app.scss
│   └── views
│       ├── app.blade.php
│       └── welcome.blade.php
├── routes
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
├── server.php
├── webpack.mix.js
└── yarn.lock
```

* Tree command can be installed using brew: `brew install tree`
* File tree generated using command `tree -a -I '.git|node_modules|vendor|storage|tests'`

### License
Laravel React Tasks is licensed under the [MIT license](https://opensource.org/licenses/MIT). Enjoy!
