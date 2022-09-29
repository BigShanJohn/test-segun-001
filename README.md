#description

1. it is a simple code test to retrieve prices from the database and display it in a table

#what I do

1. I seperate the views (frontend) from the backend and I use ajax to retrieve  JSON data.
2. I create a router in the index file to recieve request and give response
3. I make use of composer, do not worry on using composer command, I will add the whole project.
4. My approach is Model View Controller architecture


#how to install on local machine

1. download or clone the folder
2. create a database and run prices.sql
3. edit the config.php file in the root to match your database configuration
4. edit the views/js/config.js file  match your view configuration
5. navigate to the folder of the project and run this command $php -S 127.0.0.1:8000

#Important Links

1. 127.0.0.1:8000 serve the index page
2. 127.0.0.1:8000/list retrieve the json data of all  the records in the prices table


