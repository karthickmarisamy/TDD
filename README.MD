Install the php unit testing framework using composer by running below command inside the folder

composer require --dev phpunit/phpunit ^9

check if it is installed by running the below command

./vendor/bin/phpunit --version

To run the test cases you to have run below command

./vendor/bin/phpunit test --color


Update the file in composer by using below command 

composer dump-autoload