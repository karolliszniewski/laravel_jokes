# Backend Task

## Overview

This project involves building a Laravel app that connects to an external API to get and save data, then shows it on the frontend. The main goal is to manage data securely with authentication.

Live Version: [Laravel Jokes Application](https://jokes.creativevault.ovh/laravel_jokes/public/)

## API Source

-   **Endpoint:** [https://icanhazdadjoke.com/](https://icanhazdadjoke.com/)

## Requirements

-   **Data Collection:** Fetch data from the above API.
-   **Data Storage:** Save the API responses in a database.
-   **Frontend Display:** Render the stored data on the application’s frontend.
-   **CRUD Operations:** Implement Create, Read, Update, and Delete functionalities for the stored data.
-   **Authentication:** Ensure that users must be logged in to perform data manipulations.

## Bonus Points

-   Add any additional features you think would be good than demonstrate your PHP / Laravel knowledge

## Setup Instructions

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/karolliszniewski/laravel_jokes.git
    ```

2. **Navigate to the Project Directory:**

    ```bash
    cd laravel_jokes
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

7. **Fetch and Populate Data:**
   To fetch and populate the jokes data, run:

    ```bash
    php artisan jokes:fetch
    ```

8. **Run the Development Server:**
   To start the local development server, use:
    ```bash
    php artisan serve
    ```
    Then, open your browser and go to `http://localhost:8000` to view the application.

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

## Homepage Views

### Logged In

![Homepage - Logged In](https://github.com/user-attachments/assets/6518fbbd-ee11-4027-ad81-8c42dabbe2c7)

### Logged Out

![Homepage - Logged Out](https://github.com/user-attachments/assets/706f985b-7dc2-4f00-bbb6-319eb986e635)
