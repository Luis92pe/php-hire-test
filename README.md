# PHP job application test

## The job itself
Our open spot is for **web development**, mainly PHP 5.3+ for backend and JavaScript / CSS / HTML for the client-side. Looks like a piece of cake at first (if you're the one), but it can be tricky (and satisfying) at the same time!

### Why is it written in english?
Because **english is a must nowadays for software development**. You may find specs and material in our native language (Spanish Latin American), but don't expect to find a translated version of functions and variables of the source code of your preferred tool or framework. This is highly unlikely ... Seriously.

# Goal
Create a contact form based on the Adobe Photoshop _contact.psd_ file available in this repository, using it to guide how it shoud look. If you don't have access to Adobe Photoshop, you can simply use GIMP (like I did). You should use the following frameworks and resources:

* Bootstrap 3.1+ - LESS/CSS Framework
* jQuery 1.10+ - JavaScript framework
* Slim Framework - PHP 5.3+
 * If you choose another PHP framework, you'll better have a good reason for it ;)
  * And do not use Wordpress or plain PHP
* MySQL 5.x+

## Preview
**Be aware!** The watermark is not important! :P

![alt text](https://github.com/JarcDevelop/php-hire-test/raw/master/resources/preview.png "Contacts preview")

## Requirements
* Use LESS CSS pre-processor to create user styles;
* Validate user input in the frontend (with friendly messages) and also in the backend (security is important for us, the reason not shareable by the moment);
* The form data must be sent using the POST HTTP method, refreshless (by using AJAX) and in the JSON format;
* Integrate the Google Maps API (for visual purpose) in any coordinate you want. You just have to be sure that it points to a city, not the middle of nowhere (or Area 51);
* Make usage of PDO abstraction layer for database transactions;
* Write all contacts to a database and send an e-mail to a parametrized address;
* Make use of a SMTP server to send the e-mail, and not PHP's mail();
* The client-side must be visually and functionally compatible (_pay attention: I'm saying compatible, be sure on what this means_) with MS Internet Explorer 9+, Chrome and Firefox. The technique for this is up to you;

## What can distinguish you from the others
* How you treat code licensing;
* How you deal with encodings and charsets;
* How you'll handle the build process (if any);
* How W3C compliant your code will be;
* How fast and speed optimizable the page will shown;
* Are you aware of the latest asset optimization techniques?
* Your overall interest in our company and technologies :)

## How to do the test
1. Fork this repository, of course;
2. Create a branch with your github username, organizing assets, resources and files as you think it should;
3. Please, use composer and bower to manage the project dependencies;
4. When you're done, make a pull request and send e-mail to hello@jarcodallo.com.

## How get started

1. You need create a database with name: 'test';
2. Create a table: 'clientes' with columns: 'ID, name, email, website, comments'.;
3. set in the file 'database.php' ubicated in '/models/config/database.php' your user and pass.;
