## About Email OTP Auth (Login)

Email OTP auth used default laravel authentication and ui used.

While login the application Email OTP send to the registered email(You can register login the application).

Note : Kindly check Emails in "SPAM" folder also.

## Installation
-- **[Clone the repository]**

 	git clone  git@github.com:mpneethiraj/Email-OTP-auth.git

--**[Install all the dependencies using composer]**

	composer install

--**[Copy the example env file and make the required configuration changes in the .env file]**

	cp .env.example .env

--**[Generate a new application key]**

	php artisan key:generate

--**[Laravel Default Auth if required]**

    composer require laravel/ui "^1.0" --dev
    php artisan ui:auth

--**[Run the database migrations (Set the database connection in .env before migrating)]**

	php artisan migrate

--**[Start the local development server]**

	php artisan serve
    
You can now access the server at http://localhost:8000

