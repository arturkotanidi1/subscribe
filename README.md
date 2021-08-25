**Endpoints**

URL - api/post
TYPE - POST
Body - 
{
    "title" : "test title",
    "description" : "test description"
}


URL - api/subscribe
TYPE - POST
Body - 
{
    "email" : "test@mail.com"
}


**Commands**

create queue table
===> php artisan queue:table

to run "queues" need to run this command
===> php artisan queue:work




