#description

it is a simple code test to retrieve prices from the database and display it in a table
#what I do

I seperate the views (frontend) from the backend and I use ajax to retrieve JSON data.
I create a router in the index file to recieve request and give response
I make use of composer, do not worry on using composer command, I will add the whole project.
My approach is Model View Controller architecture
#how to install on local machine

download or clone the folder
create a database and run prices.sql
edit the config.php file in the root to match your database configuration
edit the views/js/config.js file match your view configuration
navigate to the folder of the project and run this command $php -S 127.0.0.1:8000
#Important Links

127.0.0.1:8000 serve the index page
127.0.0.1:8000/list retrieve the json data of all the records in the prices table