
# Laravel Submission Application

Project set up and start.

Main .env parameters exists in the file, for database connection- 
```http
  cp .env.example .env - use this command to create .env file
``` 

To start the project we need to follow this steps:

1) Install composer:
```http
  composer install
```

2) Create laravel sail enviroment for easy usage:
```http
  php artisan sail:install - after runing this command select only mysql
```

3) Start docker:
```http
  ./vendor/bin/sail up -d
```

4) Run migration of database:
```http
  ./vendor/bin/sail artisan migrate
```
# API Documentation:
List of the existed API:
```http
  POST /api/sumbit
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | **Required**. Name of the User who wants to send submit request. Minimum 3, Maximum 999 symbols. |
| `email` | `string` | **Required**. Email of the User. Minimum 3, Maximum 255 symbols. |
| `message` | `string` | **Required**. Message to send in submit request. Minimum 3, Maximum 999 symbols. |


##
# Main logic path
```http
  Name | Path:

  submit api | routes/api.php

  SubmissionController | App\Http\Controllers\Api\Submissions\SubmissionController.php

  StoreSubmissionDataJob | App\Jobs\Submissions\StoreSubmissionDataJob.php

  SubmissionCreated | App\Events\Submissions\SubmissionCreated.php

  SubmissionListener | App\Listeners\SubmissionListener.php
```