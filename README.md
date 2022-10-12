<h1 align="center">Hyperfeste</h1>

<p align="center">
<img alt="GitHub" src="https://img.shields.io/github/license/lucasdotvin/hyperfeste">
<img alt="PHP 8.1" src="https://img.shields.io/badge/php-%3E=8.0-blue">
</p>

## About

This is an example application that intends to demonstrate the basic features from Hyperf.

## Installation

Run the following command to install the dependencies inside the Docker container:

```bash
docker-compose run --rm hyperf composer install
```

Copy the `.env.example` file to `.env` and fill in the database credentials:

```bash
cp .env.example .env
```

Use the following commands to create the database container and run the migrations:

```bash
docker-compose up -d mysql
docker-compose run --rm hyperf php bin/hyperf.php migrate
```

Now, to run the application, use the following command:

```bash
docker-compose up -d hyperf
```

> **Note**:
> In the next times, you'll only need to run `docker-compose up -d` to start the application.

## Relevant Files

You can check the application routes on the [routes.php](config/routes.php) file. On the [dependencies.php](config/dependencies.php) file, you'll find the configuration for the dependency injection.

It is important to check the [migrations](migrations) folder too, as it contains the database structure.

The files inside the [app](app) folder follow the structure you'd see in a regular MVC application: there is a folder for the controllers, a folder for the models etc.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Lucas Vinicius](https://github.com/lucasdotvin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.