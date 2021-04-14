# My Watch List
<img src="https://media0.giphy.com/media/VxbP9tLeKzazm/giphy.gif?cid=ecf05e47ipcjrvsipynxc067j8rvc566yblh6q46qjhccq0x&rid=giphy.gif&ct=g" width= "100%">

## About the application:

- My Watch List is a school project, to improve our experiences in backend applications.

## To reach the application:

-   Make sure you have previously installed PHP, Composer and NPM
-   Clone this repo on your computer
-   Install dependendcies
```
composer install
npm install
```
-   Copy the `.env` file
```
cp .env.example .env
```
-   Generate an App Key
```
php artisan key:generate
```
-   Add your database credentials to the `.env` file

```
php artisan migrate
```
-   Get a server running
```
php artisan serve
```
## Made by:

-   [Aseel Mohamad](https://github.com/Aseel88)
-   [Agnes Binett](https://github.com/aagneess)


## Code Review

By:
- [Dante Mogrim](https://github.com/mogrim-91)
- [Erik White](https://github.com/nausea87)
- [Sandra Danielsson](https://github.com/San-Dan)

1. When registering as a new user it'll complain about 'only letters and numbers allowed' when trying to add ones last name. Info on being first name specific would be good.
2. Search function reroutes to a 404 page if one is quick and presses 'enter/return' before seeing a possible match.
3. **your-list.blade.php:** Same movie can be added to watchlist multiple times. Would be cool with a function for this and a message telling the user that the movie already is in the list.
4. A descriptive `README.md` file on the root of your repo would be good.
5. User-friendliness: Button for "back" etc would be good. Currently need to go back in browser.
6. **movie.blade.php:** When clicking on the movies, one expects to get extended information but currently the rerouting serves no purpose when the information is identical to the one already on the main page. 
7. Ability to either delete movies or check them as Seen when you have watched them
8. No test for logging out route.
9. You could add something like  `'password-verify' => ['required', 'string', 'same:password']` in your reg-controller and then a verify in your blade to verify in a simple way.
10. Overall, more messages on the site, informing the user what is happening would be good. Ex "Movie added to list", "You successfully logged out".
11. **DB:** A few tables are not in use and empty.
12. **login.blade.php:** `@extends('errors')` missing.
13. **welcome.blade.php:** - Laravel's built in welcome page not necessary to keep. 
14. **your-list.blade:** Remove movie from list would be cool!
15. **RegistrationTest.php L:6-10:** A few passive links there that aren't put to use.
16. A website title and description on the home page is missing.
17. **dashboard.blade.php:** File doesn't ever seem to be put into use.
18. **img:** Alt description missing from the main page's movie posters.
19. Remember to remove comments (test files, User model etc.).
20. The site is bleeding to the sides.

> "All in all, excellent work! Fun idea! I really like it Great job!" :smile: */ Dante* <br><br>
> "Good job! Some improvements here and there but overall I like the looks of things. Nice use of the API. Awesome with search functions!" :thumbsup: */ Erik* <br><br>
> "Cool stuff: search while typing and using api!" */ Sandra*
