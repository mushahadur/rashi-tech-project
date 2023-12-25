<p align="center">
 <img width="100px" src="./public/frontend/assets/images/welcome-hero/logo.png" align="center" alt="Logo" />
 <h2 align="center">This is Important Blog Site </h2>
 <p align="center"></p>
</p>


## Indexing
- [About Project](#about)
- [Use of Technology](#technology)
- [Installing  Project](#installing)
- [Key Features](#features)





<br>
<br>

### About Project <a name="about"></a>
Type of Blog Porject that platform allowing users to create, edit, delete posts and display all posts on the frontend.

<hr>

### Use of Technology <a name="technology"></a>


 | Field        | Technology                  |
 | ------------ | ---------------------- |
 | Frontend | JavaScript, JQuery, HTML5, CSS3, Bootstrap 5.x |
 | Backend | PHP, Laravel, Ajax. |
 | Design Principles | The Single Responsibility, SOLID.|
 | Database | PDO, MySQL.|
 | DevOps | Version Control Tool: GitHub |
 | Communication and Collaboration | Slack, Trello |
 | Graphic Design | Canva, Online Tools |



<br>
<br>
<hr>

### Installing Project <a name="installing"></a>
It is php 8.1.2 version
- git clone
- composer install
- php artisan key:generate
- Setup .env file with Database
- php artisan migrate:fresh 
- npm install
- npm run dev
- php artisan serve


<hr>



### Key Features <a name="features"></a>
1. User Profile: 
    - Users should be able to create a profile and log in. 
    - Users can register, login, and manage their profiles. 
    - Implement middleware for user authentication and authorization to ensure secure access to certain features.
<br>

2. Dashboard: 
    - After logging in, users should access a dashboard to post text with a title and image.  
    - The dashboard should also include options to edit, delete, and activate/inactivate posts. 

<br>

3. Data Validation: 
    - When user would like to submit form then validate.
    - Invalide value not alow to  submit.  

<br>

4. Date-wise Filtering:  
    - Users should have the option to filter data based on dates from their dashboard. 
<br>

5. Home Route: 
    - A route named "home" should display all users' posts from the present date, with filtering options for date and user.

<br>

6. Data Handling:  
    - The system must have the ability to handle large volumes of data.

<br>

7. Error Handling:  
    - The system must have the ability to handle error like Page not found and internal server error.



