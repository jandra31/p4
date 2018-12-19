# Project 4
+ By: *Juan Ignacio Andrade*
+ Production URL: <http://p4.ignacio.zone>

## Database
*This is an instant customer satisfaction rating system, the idea is on checkout the customer is presented with 
a tablet where they are asked to rate their experience ranging from poor to excelent. Later an administrator can login from
<http://p4.ignacio.zone/p4/public/login> to view the results and get a general idea of what the customer is feeling as they leave the store.
This information is extremely usefull when it comes to evaluating customer experience.<br><br>
for pourposes of the demo the register option has been left open so that users can make accounts to login and view the results.*

Primary tables:
  + `locations`
  + `migrations`
  + `password_resets`
  + `results`
  + `users`
  


## CRUD

__Create__

*there are 3 creates in the project*
  + Visit <http://p4.ignacio.zone/p4p4/public/register>
  + Fill out form
  + Click *Register*
  + Observe confirmation message
  <!-- -->
  + Visit <http://p4.ignacio.zonep4/public/create>
  + Fill out form
  + Click *Create*
  + Observe new location in display page
  <!-- -->
  + Visit <http://p4.ignacio.zonep4/public/>
  + Click rating button
  + Observe new location in display page <http://p4.ignacio.zonep4/public/dataview?r=3>
  <!-- -->
__Read__

*there are 2 instances of read in the project*
  + Visit <http://p4.ignacio.zone//p4/public/dataview?r=2> to se a list of available locations to rate
  + Visit <http://p4.ignacio.zone//p4/public/dataview?r=3> to se a list of the poll results
  
__Update__
  + Visit <http://p4.ignacio.zone//p4/public/dataview?r=2>; choose the Edit button next to one of the locations
  + Make some edit to form
  + Click *Update*
  + Observe changes in display page
  
__Delete__
  + Visit <http://p4.ignacio.zone//p4/public/dataview?r=2> or <http://p4.ignacio.zone//p4/public/dataview?r=3>; choose the Delete button next to one of the items
  + Observe changes in display page

## Outside resources
  + laravel login <https://sujipthapa.co/blog/laravel-56-register-login-activation-with-username-or-email-support>
  + laravel Auth check <https://laravel.io/forum/11-24-2015-check-if-user-is-logged-in>
  + laravel Auth <https://laravel.com/docs/5.7/authentication>
  + php redirect after x seconds <https://stackoverflow.com/questions/6119451/page-redirect-after-certain-time-php>
  
## Code style divergences
  + using tab instead of 2 spaces for indentation
## Notes for instructor
+ there is no way to reach the login from the landing page this is intentional as the landing page should only be the customer taking a poll, the backend data view systems are meant for administrators who should knwo the url to login.
*there's probably is a more elegant solution for this but i couldn't come up with one at the moment*

                      

