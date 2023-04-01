<style>
    .dependency{
        color: yellowgreen
    }
    .fun{
        animation: fun 3s infinite; 
    }
    @keyframes fun{
        0%{
            color:red;
            font
        }
        50%{
            color:green;
            font-size: 2rem;
        }
        75%{
            color: blue;
        }
        100%{
            color: red;
            
        }
    }
</style>
> Date: april/2023

>---
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## DOCUMENTATION
- ### [Laravel DOCS](https://laravel.com) 

- ### [Inertia DOCS](https://inertiajs.com/)

- ### [React DOCS](https://react.dev/) 

<br>

## _How To:_

> Server Side

| 1. [Create the project](https://laravel.com/docs/10.x/installation#your-first-laravel-project)
|-
| <code><span class="dependency">composer</span> create-project <span style="color: orangered"> laravel/laravel</span> <span style="color:teal">{{NAME_OF_THE_PROJECT}}</span> </code>

| 2. [Install the Inertia dependencies](https://inertiajs.com/server-side-setup#install-dependencies)
|-  
| <code><span class="dependency">composer</span> require <span style="color: violet"> inertiajs/inertia-laravel</span></code>

| 3. [Configure a new file / Root template](https://inertiajs.com/server-side-setup#root-template)
|-  
| `\resources\views\app.blade.php` creating the template for the app


| 4. [Setup the Inertia middleware](https://inertiajs.com/server-side-setup#middleware)
|-  
| <code><span class="dependency">php</span> artisan <span style="color: violet"> inertia:middleware </span></code>

| 5. [Register the middleware into the Kernel](https://inertiajs.com/server-side-setup#middleware)
|-  
| - Go to: `App\Http\Kernel` <br><br> - and add this as the last item in the `web` middleware <strong>group</strong><br> <code><span class="dependency">'web' </span> =>\[ \\<span style="color: orange">App</span>\\<span style="color: orange">Http</span>\\<span style="color: orange">Middleware</span>\\<span style="color: orange">HandleInertiaRequests</span>::class, ] </code>

<br/>
<br/>

> Client Side MANUALLY INSTALL (Use Breeze otherwise)

| 1. [Install Inertia Client Side ](https://inertiajs.com/client-side-setup)
|-
| Inertia: <code><span class="dependency">npm install</span> @inertiajs/react</code> <br> React: <code><span class="dependency">npm install</span> @vitejs/plugin-react react react-dom</code>

<br>

| 2. [Add into vite.config.js](/vite.config.js)
|-
|   <code><span style="color: orangered">import</span> react <span style="color: orangered">from</span> <span style="color: yellowgreen">'@vitejs/plugin-react'</span></code>
|   <code><span style="color: teal">plugins</span>: \[ react(), laravel({.....}), \],</code>

<br>

| 3. [Configure the main JavaScript file to boot Inertia app ](https://inertiajs.com/client-side-setup#initialize-the-inertia-app)
|-
| - Go to: `\resources\views\js\app.jsx` [<sup>(view documentation)</sup>](https://inertiajs.com/client-side-setup#initialize-the-inertia-app)

<br>

| 4. [In the same folder create another folder `/Pages`  ](https://inertiajs.com/client-side-setup#initialize-the-inertia-app)
|-
| - Go to: `\resources\views\js\Pages\**\*.jsx` [<sup>(view documentation)</sup>](https://inertiajs.com/client-side-setup#initialize-the-inertia-app)

<br>


## LAST STEP:  Have <span class="fun">FUN</span>
