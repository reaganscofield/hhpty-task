# hhpty-task
I HAVE CHANGE THIS LINE
LOCAL SERVER TESTING 

Create database and name it "hhptytasksdb"

Open hhtpyChallenge directory and under _SQL directory
import the hhptytasksdb.sql file in your phpmyadmin tool
this file contents datas.

open your terminal or cmd and got to "hhptytasksdb" directory
run "php artisan serve" this should open the application on localhost http://127.0.0.1:8000
open your browser and got to this address http://127.0.0.1:8000  

now you're free to tester the application.


LIVE SERVER DEPLOYEMENT AND TESTING 

Open your Remote Server Directory Create a new directory and name it "hhptytasksdb"
download the application zip file from https://github.com/reaganscofield/hhpty-task/
unzip it. from the application you have unzip beside public directory copy everything else
and paste it in your remote server under the new directory you have created, now open the public directory copy everything and paste it on your remote server public_html.

now open the index.php file, change the following lines

change this line:
    require __DIR__.'/../vendor/autoload.php';
to:
   require __DIR__.'/../hhptytasksdb/vendor/autoload.php'; 

change this line:
    $app = require_once __DIR__.'/../bootstrap/app.php';
to:
   $app = require_once __DIR__.'/../hhptytasksdb/bootstrap/app.php';


and save it.

in your remote server open your database and Create database and name it "hhptytasksdb"
or anything else got to your remote server under "hhptytasksdb" directory open the .env file and connect to your database by using your server details

DB_CONNECTION=mysql
DB_HOST=  serverName
DB_PORT=  serverPort 
DB_DATABASE= databaseName
DB_USERNAME=  userName
DB_PASSWORD=  userPassword

after editing this file

Open hhtpyChallenge directory and under _SQL directory
import the hhptytasksdb.sql file in your phpmyadmin tool
this file contents datas.

now you're free to tester your application

thanks for your time
