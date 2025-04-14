# App
This Component contains the Web-App

## Manual Setup
The Main Component (Webapp) Can be used standalone although this is not advised, its possible.  
- Extract the content of the app/src folder into a separate folder.
- From here its a standard Laravel App Setup.

## Admin User:
To Manually create a Admin user you need to use the following Command:
```
php artisan user:create-admin
```
If you want to reset the Admin-User to Default Login Details, add a `--force` at the end of the command.