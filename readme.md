We need to install Vagrant to manage our local server, and VirtualBox to create a local virtual machine.

### Installing Virtual Box

[VirtualBox](https://www.virtualbox.org)

### Install Vagrant

[Vagrant](https://www.vagrantup.com)

Once installed in the terminal type `vagrant -v` to pull the verify that its been installed correctly

### Installing Homestead

In the terminal type `vagrant box add laravel/homestead`

please refer to the [laravel documentation](http://laravel.com/docs/4.2/homestead) if you have any issues.

In the terminal go to your home directory type `cd ~` and then clone the git repo `git clone https://github.com/laravel/homestead.git Homestead`

### Configuring Homestead

Follow the instructions on the Laravel [Homestead](http://laravel.com/docs/4.2/homestead) section.

### environment setup

once you clone this repo you will need to run a `composer update` to import all dependencies.

next run `composer dump-autoload` to update the PSR mapping.

### Database setup

#### Mapping the database

Create a new file in the root directory called: ".env.local.php"

file should contain the following information:
```<?php

 return [
     'DB_HOST'     => 'localhost',
     'DB_USERNAME' => '<db_username>',
     'DB_PASSWORD' => '<db_pass>',
     'DB_NAME'     => '<db_name>'
 ];
```

#### Migrate the database

from within the vagrant VM run `php artisan migrate`