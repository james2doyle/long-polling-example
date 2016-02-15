## Long Polling Example App

> a demo of how to go about setting up a simple ajax-polling page/feature

[YouTube Demo](https://www.youtube.com/watch?v=ys44OFDHydE)

#### Uses:

* [Lumen 5.2](https://lumen.laravel.com/)
* [Vue.js](http://vuejs.org/) 1.0.16
* [window.fetch](https://developers.google.com/web/updates/2015/03/introduction-to-fetch?hl=en) API

## Setup and Installation

Lumen needs to have a virtual host setup so get started. I use [Laravel Homestead](https://laravel.com/docs/5.2/homestead) as a virual machine.

If you have all that, then continue:

* clone the repo and change to the directory
* move the `env` to `.env`
* update `.env` with the setting appropriate to your app/database
* `php artisan migrate`
* `php artisan db:seed`
* visit the url for your virtual host and go to `/frontend.html`
