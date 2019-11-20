# PHPagebuilder boilerplate

> Boilerplate for quickly spinning up websites using [PHPagebuilder](https://github.com/HansSchouten/PHPagebuilder).

This boilerplate defines the project structure for quickly creating a website that can be managed with a drag and drop pagebuilder.

## Installation

To setup your website download the boilerplate and upload it to the webroot directory of your website.

### Install PHPagebuilder with Composer
To install PHPagebuilder via composer, SSH to your webroot directory and run the following command:

```
composer require hansschouten/phpagebuilder
```

Now uncomment line 7 of `index.php`.

### Install PHPagebuilder without Composer
If you don't want to use composer, simply download the latest version of PHPagebuilder [here](https://github.com/HansSchouten/PHPagebuilder) and upload it in a directory called `phpagebuilder` inside your webroot directory.

Now uncomment lines 10 and 11 of `index.php`.

### Add the config file
Copy the `config.example.php` from your version of the [PHPagebuilder project](https://github.com/HansSchouten/PHPagebuilder) and add it as `config.php` to your website's root directory.

### Configure a database
If you use PHPagebuilder without any customizations, it requires a database for storing your pages. Just create a database and run the queries from `config/create-tables.sql` of your version of the [PHPagebuilder project](https://github.com/HansSchouten/PHPagebuilder). Next, add the database credentials to your config file.

### Login
Now you should be able to log in to the admin panel by going to the `/admin` URL of your website using `admin` and `changethispassword` (you can change these in the config file). If you are able to login you can follow the instructions to start building your website as described in the [main project's repository](https://github.com/HansSchouten/PHPagebuilder).

Note: make sure to disable error reporting in `index.php` once your website goes into production!
