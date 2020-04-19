<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPA Assets</title>
        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    </head>
    <body class="font-sans">
        <div id="app">
            <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') 0 0px no-repeat;">
                <h1>
                    <img alt="SPA Assets" src="/images/logo.svg" />
                </h1>
            </header>
            <div class="container px-8 pb-10">                
                <main class="flex">
                    <aside class="w-64 pt-8">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/" exact>Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/colors">Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/typography">Typography</router-link></li>
                            </ul>
                        </section>
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">Doodle</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/mascot">Mascot</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/illustration">Illustration</router-link></li>            
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/loaders-animation">Loaders and Animation</router-link></li>            
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/wallpapers">Wallpapers</router-link></li>            
                            </ul>
                        </section>
                        <section>
                            <h5 class="uppercase font-bold mb-5 text-base">Stats</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/site-stats">Site Stats</router-link></li>                                
                            </ul>
                        </section>                        
                    </aside>
                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>            
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
