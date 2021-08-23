# Cindy's Life
* Dynamic fully responsive blog website called Cindy's Life.
* Blog includes responsive control management system (CMS) for admin dashboard.
* All pictures such as tags, post titles, post pictures come from database, so they are not static except the picture which used in header of home page.
* MVC model applied.
* App is still being developed.
* All passwords are hashed using PHP password hashing algorithm.
### Deployed URL Given Below
[cindyslife.net](http://cindyslife.net)

## How to See on Your Local Machine?
* Clone the repository, or download the zip file.
* Download the MAMP, XAMP or WAMP depends on your machine and insterest.
* There are several steps before you start these are;
#### First,
* Change the path.php file based on yourself. It must look like given below (Do not forget to open php tag before the code below).

        define("APPROOT", realpath(dirname(__FILE__)));
        define("URLROOT", "http://localhost:<your_port>/cindyslife");

#### After all;
* Compress the blog_system.sql file under the assets/sql folder.
* Open localhost:<your_port> (if you are using)>/phpMyAdmin, then click import button, and import the compressed SQL commands.
#### Finally,
* Type "localhost:<your_port>/cindyslife" in URL part of your browser.
* Now, you are ready to go.

## How to Check Admin Dashboard?
* Firstly, you need to set yourself up as an admin. Please follow the steps given below to be able to do this.
### How to Set Yourself Up as an Admin?
* Click to Login on navigation menu. Then, Click to not registered yet link on that page.
* Complete your registration. You must be logged in as a normal user after registration step.
* Then, open the phpMyAdmin page and change the value 0 to 1 in users table in blog_system database, or you can add yourself as an admin into the sql codes (Do not forget to hash your password before you start to add).
* You will see your name instead of login on the right of navigation menu, Click/tap your name, and you will see log out button. Log out, and log in again to see admin dashboard. After you log in again, you will be redirected to the dashboard.
* Also, You will see admin button (If you are) after you click/tap your name. Therefore, you can use this option if you want to do it.

## What are The Things Included in The Dashboard?
* User management system. For example, you can create, delete, update (You also can change their admin status).
* Post management system.
* Tag management system.