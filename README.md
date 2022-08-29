# Books Shelf Online

### Resources (Models)

    Admin Dashbord (Auth)

- `/books` - index of all books
- `/books/{book}` - book with id


    Website
- `/` - index of all books
- `/books/{book}/reviews` - reviews for book with id


### Installation

1. Clone the repository then withing root of your directory run:

    ```bash
    composer install
    ```
To install all dependencies.

2. Install all frontend dependencies and compile them:

    ```bash
    npm install
    ```

3. Set up Database connection on `.env`

    ```bash 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=bukshelf
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. Run migrations:

    ```bash
    php artisan migrate
    ```

5. Start server:
    
    ```bash
    php artisan serve
    ```





