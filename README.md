# WordPress Composer bootstrapper

WordPress is hot garbage - no two ways about it - but given that sometimes we need to shake hands with the devil,
this repo allows one to bootstrap an installation of WordPress entirely in Composer, and use modern configuration 
methods.

## Configuration

The configuration is entirely controlled through environment variables, chiefly provided by an `.env` file (although
you may use actual environment variables if you wish). This file will be created for you automatically if you use 
`composer create-project`. Otherwise, simply copy `.env.example` to `.env` and away you go.

## Structure

The main structure of a bootstrapped site will be as follows:

- **content/:** contains the plugins and themes folder, along with any other plague-infested folders created by horribly written plugins.
- **wordpress/:** contains the normal files for a WordPress install.
- **index.php:** the entrypoint for public-facing pages.
- **cli:** a small utility program that sets up the encryption keys. It will also be able to install WP automatically at a future point. This is NOT the *WP-CLI* program.
- **.htaccess:** set up with the basic rewrite rules for WordPress.
- **index.php:** simple endpoint to load the site.
- **wp-config.php:** the heavily-modified config file that loads the configuration from the environment. You do not need to edit this file at all. Plugins probably will, but hey, that's the price we pay.

## Installing

Once Composer has done its thing, and you've set up the configuration as required, and you've had enough of your
favourite alcoholic beverage to prepare yourself, you can install the database tables by going to the following:

```
https://<WP_SITEURL>/wordpress
```

This should start up the installer.

## License 

MIT License. No warranties, or takebacksies, provided.

## Acknowledgements

Thanks to the following for making this type of setup possible, allowing sanity to reign once more.

- [John P. Bloch](https://github.com/johnpbloch/wordpress)
- [WPackagist](https://wpackagist.org/)