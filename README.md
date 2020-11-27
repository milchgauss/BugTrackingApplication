A bug tracking application that utilizes the MVC (Model-View-Controller) design pattern and implements basic security for user sign-up.

This application utilizes MySQL for database storage.
This was my very first application in back-end and front-end development.

The logo was designed by the developer.
Headers, navigation bars are from the Bootstrap library.
Icons are from fontawesome.com (Edition 4)

What I learned making this application:
Setting up php on the Brackets Editor.
Back-end development using PHP.

Using and connecting to a server (Apache)
Creating and executing SQL statements ($_GET['var'] and $_POST['var'] methods to retrieve and input data in to databases).
Local databse name: myguests

Password Hashing(using the password_hash and password_verify functions.

**index.php:**
**FORM VALIDATION**

Includes a responsive form using HTML and Bootstrap for input validation of passwords with a Javascript regular expression using the "pattern" property.
The password entered must be 12 symbols long in length, must include a capital letter, must include a lowercase letter, and must include at least 1 digit from 0-9.
I have also set the "required" attribute to true as usernames and  passwords in the log-in page can not be empty.

**signup.php**
**INSERTING INFORMATION IN TO A DATABASE**

Includes a responsive form using HTML and Bootstrap for user sign up. Using PHP, I created a connection with the local server and was able to create and access a database & table that I had created with MySQL. Using the password_hash function, the user's "password" input in the HTML file will automatically be encrypted using a hash function. When the user "signs up," their username and password will automatically be stored in the database.

**mainapppage.php**
**HTML TABLE THAT ALLOWS USERS TO ADD AND DELETE TABLES**

This is the "main app page" that I used to post bugs that I have discovered in the process of creating this application.
I used my own application to track the bugs that occcured while developing the application itself. 

**postissuespage.php**
This is a page that allows users to "add" and "subtract" from the table of potential bugs.
An improvement to this app: To allow users to sign in and edit ONLY their own entries. For the time being, the purpose of this page was to demonstrate that tables in HTML can be edited dynamically by the user.















