# How to run this project

run all of the commands(encased in a box) in your **terminal in vscode**

1. [Getting started](#starting)
2. [Dependencies](#dependencies)
3. [Env(confige)](#settingUpEnvFile)
4. [Database](#settingUpDatabase)
5. [Running the project](#runningTheProject)

6. [Errors](#errors)

<a name="starting"></a>
## BE sure to run xampp(apache and sql before proceeding)


1. First clone this project, run the command(dont include the <> and dont forget to change the link):
```
git clone <ssh/https link>
```

2. Download composer from their official website. 
<a href="https://getcomposer.org/download/" target="_blank">Composer download page</a>

3. Download npm/node js from their official website. 
<a href="https://nodejs.org/en/download" target="_blank">Node download page</a>

4. Run powershell and type
```
composer global require laravel/installer
```


<a name="dependencies"></a>
### For getting dependencies, run everytime you switch branch


1. Download the php project dependencies, run the command:
```
composer install
```

2. Download the javascript dependencies
```
npm install
```

<a name="settingUpEnvFile"></a>
### Setting up env file(skip if you already have it)


1. Then you need to set up your .env file
- first copy the provided env example by running this command
```
cp .env.example .env
```

- Now when you check the project again, you'll see a new file, name (.env)
- Modify the MAIL and database part(i commented the instruction there)
- to generate a password follow <a href="https://support.google.com/accounts/answer/185833?hl=en">link</a>

2. Run this command, this will generate the app_key needed for the .env file

```
php artisan key:generate
```


<a name="settingUpDatabase"></a>
### Database creation(factory and seeding)

1. Then run the database creator
```
php artisan migrate:fresh --seed
```

- this will drop all of the database and create 2 custom data + 10 fake data for the user's table(currently)
- email for user: user@gmail.com password:123
- email for admin: admin@gmail.com password:123


<a name="runningTheProject"></a>
### For running

#### You must run the two commands(step 9/10) at the same time

1. Open a powershell and **run this command** to generate your css/js tailwind realtime
```
npm run dev
```

2. open another powershell(dont close the shell rendering npm run dev) **then run**
```
php artisan serve
```
- this will create a live server([http://127.0.0.1:8000])

3. press **Ctrl+C** on the terminal of either artisan serve or npm run dev to stop the compilation

#### after this, you should have 2 powershells running step 9 and 10



<a name="errors"></a>
### Errors

1. If the terminal cannot run artisan but you have artisan file: run

```
php artisan config:clear
```

2. Try to update the composer if there are other errors:
```
composer update
```

3. Try to repair node.js if there are other errors: