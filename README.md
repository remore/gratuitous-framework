GratuitousFramework
======================
is a PHP micro framework which takes advantage of both painless testability and high flexibility.

+ Easy to insert Stub Object
+ Works perfectly fine even at CLI
+ Supported on PHP 5.2 and up

Installation
------
No dpendencies. Just clone this project.

Usage
------
Application entry point would be(you need to publish `/Web` folder beforehand of course)

    http://example.com/MyPage.php
    
Or hitting this command at your terminal works fine as well.

    php ./bootstrap.php MyPage.php

Getting started
------
Here I assume you are going to add chatroom function onto your project.

Copy `/Controllers/MyPage.php` and create your own controller as `/Controllers/Chatroom.php`. Controller Class Name must be changed when you create your own one.

    class ChatroomController extends Controller
    {
        // write your code here

That's all. Now you can access following address then get return value from the `ChatroomController::run()` method.

    http://example.com/Chatroom.php
    
CLI interface is available as well.

    php ./bootstrap.php Chatroom.php

Customize
------
+ Add your components under `/Components` folder. All of files under `/Components/*/` folder will be loaded by `spl_autoload_register()`(defined at ClassLoader Component)
+ Put resource files(like static image or html files) into `/Web/` folder and publish them

Testing
------
To run the tests, hit

    phpunit ./Components

Lisence
------
MIT License