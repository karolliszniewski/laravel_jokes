# Backend Task

## Overview

This project involves creating a Laravel application to interact with an API, store the retrieved data, and display it on the frontend. The primary focus is to enable data manipulation with authentication.

## API Source

-   **Endpoint:** [https://icanhazdadjoke.com/](https://icanhazdadjoke.com/)

## Requirements

-   **Data Collection:** Fetch data from the above API.
-   **Data Storage:** Save the API responses in a database.
-   **Frontend Display:** Render the stored data on the application’s frontend.
-   **CRUD Operations:** Implement Create, Read, Update, and Delete functionalities for the stored data.
-   **Authentication:** Ensure that users must be logged in to perform data manipulations.

## Bonus Points

-   Add any additional features that showcase your expertise in PHP and Laravel.
-   Consider including advanced functionalities or optimizations to enhance the project.

## Setup Instructions

1. **Clone the Repository:**
    ```bash
    git clone <repository-url>
    ```
2. **Navigate to the Project Directory:**
    ```bash
    cd your-repository
    ```
3. **Install Dependencies:**
    ```bash
    composer install
    npm install
    ```
4. **Set Up Your .env File:**
    ```bash
    cp .env.example .env
    ```
5. **Generate an Application Key:**
    ```bash
    php artisan key:generate
    ```
6. **Run Migrations:**
    ```bash
    php artisan migrate
    ```

## Project Progress

### Fetch Jokes

-   **Feature**: Use the `artisan fetch` command to retrieve jokes from the API and save them to the database.
    ![Fetch Jokes](https://github.com/user-attachments/assets/1136f25e-5f9b-4d67-8351-07c8bdf34727)

### Basic Authentication and Display

-   **Feature**: Implemented Laravel basic authentication with Bootstrap CSS and created a route to display jokes.
    ![Basic Authentication](https://github.com/user-attachments/assets/72312e18-8e75-47be-8869-241ade483e9c)

## Features

-   **CRUD Operations**: Implemented using Laravel's conventional methods:
    -   `index`: Display a listing of the resource.
    -   `store`: Store a newly created resource in storage.
    -   `update`: Update the specified resource in storage.
    -   `destroy`: Remove the specified resource from storage.
-   **Bootstrap Integration**: Utilized Bootstrap buttons and forms for a responsive and modern graphical user interface (GUI).

## Screenshots

![image](https://github.com/user-attachments/assets/83492f87-30ed-4c6e-b9d1-e6830d9b29de)
