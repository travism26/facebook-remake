Note: still under development i will be pushing updates nightly.
[Deployed location](http://162.243.239.157/)

We need to install Vagrant to manage our local server, and VirtualBox to create a local virtual machine.

### Installing Virtual Box

[VirtualBox](https://www.virtualbox.org)

### Install Vagrant

[Vagrant](https://www.vagrantup.com)

Once installed in the terminal type `vagrant -v` to pull the verify that its been installed correctly

### Installing Homestead

Please follow the documentation on the laravel site [Homestead docs](http://laravel.com/docs/5.0/homestead)

## Installation TBC

Here are the steps for installation on a local machine.

1. Change directory into the Homestead Folder `cd ~/Homestead/Projects` (`mkdir Projects` if Projects doesn't exist).
2. Clone this repository: `git clone https://github.com/travism26/facebook-remake.git`.
3. Add the path for the cloned repository to the `Homestead.yml` file under the `folders` list.
4. Add a site `larabook` for the laravel.io repository to the `Homestead.yml` file under the `sites` list.
5. Run `vagrant provision` in your Homestead folder.
6. Create a database in Homestead called `larabook`.
7. Run `composer install --dev` and `php artisan migrate --seed --env=local`.
8. Add `128.0.0.1 larabook.dev` to your computer's `hosts` file.

### Configuring Homestead

Follow the instructions on the Laravel [Homestead](http://laravel.com/docs/4.2/homestead) section.

### environment setup

once you clone this repo you will need to run a `composer update` to import all dependencies.

next run `composer dump-autoload` to update the PSR mapping.

### Database setup

#### Mapping the database

Create a new file in the root directory called: ".env.local.php"

file should contain the following information:
```
<?php
 return [
     'DB_HOST'     => 'localhost',
     'DB_USERNAME' => '<db_username>',
     'DB_PASSWORD' => '<db_pass>',
     'DB_NAME'     => '<db_name>'
 ];
```

#### Migrate the database

from within the vagrant VM run `php artisan migrate`
