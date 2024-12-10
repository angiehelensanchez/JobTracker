# JobTracker

**Welcome to the JobTracker!**
![Screenshot 2024-12-10 194521](https://github.com/user-attachments/assets/0fcf9805-30cb-49ba-a6e0-d360d1924d51)

## Description
JobTracker is a web application that will allow you to have a personalised follow-up of the job offers you have applied for.
Our application has 3 main views.

## Home view
The home view where you can see a list of the last 12 modified offers with some relevant data. In addition to a legend of all the technologies known to the user. 
The purpose of the skills legend is to provide the user with the ids to link them to the offers, as well as to show the knowledge he/she thinks he/she has. 

![Screenshot 2024-12-10 195729](https://github.com/user-attachments/assets/4ad31eca-bc1f-45a8-8f68-db55d635603b)

Our offers will have two different types of views. The initial one, which we will see throughout much of the system: 

![Screenshot 2024-12-10 200151](https://github.com/user-attachments/assets/4d67c086-921f-4805-bdc1-90638ab066cf)

As we can see, we will have the name of the offer, the corresponding id, the date we have applied to the offer, the name of the company, the salary range, the link of the offer, a bar representing the status of the offer: green (In-Progress), yellow (Paused), red (Finished). And we will also be able to see the last modification date, which will be the date of the last modification of the offer or the modification of its most recent advanced. 

## All Offers
![Screenshot 2024-12-10 200719](https://github.com/user-attachments/assets/2d471f57-4223-46c9-a364-293921758517)

In the next view, we will have the complete list of registered offers, including a filter that allows us to select the type of status (In progress, paused, finished) and by the name of the company. Both filters can be applied separately or at the same time.

## Show Offers
![Screenshot 2024-12-10 201154](https://github.com/user-attachments/assets/c7557c09-4a2b-401a-bee7-49a8195595e1)

In the next view, we have 3 main sections. The offer with all its data, the technologies that have been associated with this particular offer and the developments that have taken place.

The main part of the offer feels like a form, but that will be implemented in future updates. At the moment this page only allows us to have a complete and quick view to make some edits from the endpoints.

>[!CAUTION]
>Please read all the points of the README in order to make good use of the project. Thank you. 

## Installation Requirements

In order to run this project locally, you need:

1. XAMPP (or any other local server that supports PHP and MySQL)

2. A modern web browser

3. VSC Terminal

4. Composer

5. Node.js

6. xdebug

## Installation

1. Install my project with git clone

```bash
  git clone https://github.com/angiehelensanchez/JobTracker.git
```
2. Install composer:

```bash 
  composer install
``` 

3. Install NPM:

```
  npm install
```

4. Create an ".env" by taking the example ".env.example" file and modify:

    * DB_CONNECTION=mysql
    * DB_DATABASE=job_tracker

5. Create a database in MySQL

- In the database manager “phpMyAdmin” create only the database with name “job_tracker”.
  
- Generate the tables and the data of the tables:

```
  php artisan migrate:fresh --seed
```

![Screenshot 2024-12-10 201711](https://github.com/user-attachments/assets/31f2ae28-3313-4984-9e12-8a44e04302ee)

6. Run NPM

```
  npm run dev
```

7. Run in another Laravel terminal:

```
  php artisan serve
```
 
## Guide

In this quick guide you will learn about the main functionalities of my project "JobTracker":


## EndPoints
```
  npm run dev
```

```
  php artisan serve
```
To compensate for the fact that we have not yet developed the crud on the web, we have developed a collection of operations in Postman that you can import as follows:

![Screenshot 2024-12-10 201759](https://github.com/user-attachments/assets/fdd906c1-876a-46a4-958a-5df3c8412b0e)

From this collection you will have all the configurations done to be able to make the complete crud on the web tables. You also have a documentation that we have designed for each operation:

![Screenshot 2024-12-10 202557](https://github.com/user-attachments/assets/5063306c-1ad8-4994-9bd3-ace9dcac0170)


[JobTracker.postman_collection.json](https://github.com/user-attachments/files/18078147/JobTracker.postman_collection.json)


##  Execution of the tests

>[!IMPORTANT]
>You can test our functions using ` php artisan test --coverage` in the terminal.

![Screenshot 2024-12-10 173325](https://github.com/user-attachments/assets/d1b64695-b461-44ef-8d1d-c3bede4092e1)


##  Diagrams made (BBDD)

![Screenshot 2024-12-10 202759](https://github.com/user-attachments/assets/5652df47-eb36-43db-ae9c-188177551b5e)


## Project structure

The project follows the structure of the MVC design pattern, which allows for better separation of responsibilities and makes code maintenance easier.

- **Model:** Manages the application logic and connects to the database to interact with incident data.

- **View:** It is responsible for representing the data to the user, using HTML and CSS.

- **Controller:** Handles communication between the model and the view, processing user requests and sending appropriate responses.


### Tech

The project is developed using the following technologies:

<a href='#777BB4' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=FFFFFF&labelColor=8892be&color=8892be'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='CSS3' src='https://img.shields.io/badge/CSS3-100000?style=for-the-badge&logo=CSS3&logoColor=white&labelColor=1572B6&color=1572B6'/></a>
<a href='#4479A1' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=00758f&color=00758f'/></a>
<a href='#FF2D20' target="_blank"><img alt='LARAVEL' src='https://img.shields.io/badge/LARAVEL-100000?style=for-the-badge&logo=LARAVEL&logoColor=white&labelColor=F05340&color=F05340'/></a>

### Tools

The tools used for this project are:

<a href='visual studio code' target="_blank"><img alt='VSC' src='https://img.shields.io/badge/VSC-100000?style=for-the-badge&logo=VSC&logoColor=white&labelColor=0277BD&color=0277BD'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Git' src='https://img.shields.io/badge/Git-100000?style=for-the-badge&logo=Git&logoColor=white&labelColor=F05032&color=F05032'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub Pages' src='https://img.shields.io/badge/GitHub_Pages-100000?style=for-the-badge&logo=GitHub Pages&logoColor=white&labelColor=222222&color=222222'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='composer' src='https://img.shields.io/badge/composer-100000?style=for-the-badge&logo=composer&logoColor=white&labelColor=8f6447&color=8f6447'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='node.js' src='https://img.shields.io/badge/Node.js-100000?style=for-the-badge&logo=node.js&logoColor=white&labelColor=82cc27&color=82cc27'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Bootstrap' src='https://img.shields.io/badge/Bootstrap-100000?style=for-the-badge&logo=Bootstrap&logoColor=white&labelColor=7952B3&color=7952B3'/></a>
## Authors

- [@Angie](https://github.com/angiehelensanchez)

## Bibliography
<a href='https://bluuweb.github.io/tutorial-laravel/db-relacional/#relacion-uno-a-muchos-inverso' target="_blank">Relación uno a muchos inverso</a>
<a href='https://bluuweb.github.io/tutorial-laravel/db-relacional/#relacion-uno-a-muchos-inverso' target="_blank">Relaciones en Laravel</a>
<a href='https://github.com/pvdlg/conventional-commit-types?authuser=0' target="_blank">Conventional Commits</a>


