# Formations.tg

Formations.tg is an open-source online platform designed to help training centers and individuals promote their training courses. It is built on Laravel 8 with Sail (Docker, Postgres), Livewire, Alpine.js, and Tailwind CSS. 

## Getting Started

### Prerequisites

Make sure you have the following installed on your machine:

* Docker and Docker Compose
* Git


### Database Schema Design
* [Version 17/11/2021](https://drive.google.com/file/d/1lXEbJuUgYvRbgvKL7X_IhR17TEnVlu69/view?usp=sharing)



### Installation

1. Clone the repository:

```bash
git clone https://github.com/gausoft/formations.tg.git
```
2. Navigate into the project directory:
```bash
cd formations.tg
```
3. Copy the .env file:
```bash
cp .env.example .env
```
4. Run the Sail command to start the containers: 
```bash
./vendor/bin/sail up
``` 
5. Generate the application key:
```bash
./vendor/bin/sail artisan key:generate
```
6. Run the database migrations and seed the database:
```bash
./vendor/bin/sail artisan migrate --seed
```
7. Visit the site at `http://localhost:8000`.

## Usage

The website is a marketplace where learners can find professional, modular, and thematic courses offered by various providers, both free and paid. Training centers and individuals can register and publish their training courses on the website.

## Contributing

We welcome contributions from the community to improve the platform. If you have any ideas or suggestions, please feel free to submit a pull request.

### Coding Standards

We follow the [PSR-2 coding style guide](https://www.php-fig.org/psr/psr-2/). Please make sure your code conforms to this standard before submitting a pull request.

### Testing

We encourage testing and require that all code submissions include tests where possible. We use PHPUnit for testing.

To run the tests, run the following command:

```bash
./vendor/bin/sail test
```

## License  

This project open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).