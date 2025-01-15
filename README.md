# ToDo List Using Laravel

This is a simple To-do List application built with Laravel. It allows users to create, edit, mark as done, and delete tasks.

## Features

- Add new tasks with a title and description
- Mark tasks as completed
- Delete tasks
- View a list of all tasks with their status

## Installation

1. **Clone the repository**:
   ```sh
   git clone https://github.com/IT22091352/ToDo_List-Using-Laravel.git
   cd ToDo_List-Using-Laravel

2.Install dependencies:
composer install
npm install
npm run dev

3.Set up the environment:
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve


# Usage
Open your browser and navigate to http://localhost:8000 to access the application.
Use the form on the home page to add new tasks.
View the list of tasks, edit them, mark them as completed, or delete them.
# Routes
Home: GET / - Displays the home page with the form to add new tasks.
Todo List: GET /todo - Displays the list of tasks.
Add Task: POST /todo/store - Adds a new task.
Edit Task: GET /todo/{task_id}/edit - Displays the form to edit a task.
Update Task: PUT /todo/{task_id} - Updates an existing task.
Delete Task: GET /todo/{task_id}/delete - Deletes a task.
Mark Task as Done: GET /todo/{task_id}/done - Marks a task as completed.
# Contributing
Contributions are welcome! Please fork the repository and submit a pull request for any improvements or bug fixes.
