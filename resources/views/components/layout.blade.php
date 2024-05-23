<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"
    >
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}" />
    <title>Jobs</title>
</head>

<body>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation" x-data="{ isActive: false }">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="is-rounded"/>
                </a>

                <a x-bind:class="isActive ? 'is-active' : ''" @click="isActive = !isActive" role="button"
                    class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu" x-bind:class="isActive ? 'is-active' : ''">
                <div class="navbar-start">
                    <a 
                        class="navbar-item" 
                        href="/jobs/create"
                    > 
                        Post Job
                    </a>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button has-background-grey has-text-light">User: Pesho Peshov</a>
                            <a href="" class="button has-background-grey has-text-light"><i class="fa-solid fa-door-closed"></i> Logout </a>
                            <a href="" class="button has-background-grey has-text-light"><i class="fa-solid fa-user-plus"></i> Register </a>
                            <a href="" class="button has-background-grey has-text-light"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="columns is-flex-direction-column is-fullheight-100vh">
        <main class="column">

            {{$slot}}

        </main>

        <footer class="column has-background-grey has-text-light is-narrow">
            <div class="content has-text-centered">
            <small> Copyright © 2024 Jobs App. All Rights Reserved. </small>
            </div>
        </footer>
    </div>
</body>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</html>