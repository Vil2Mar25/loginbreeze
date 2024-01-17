<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
        @vite('resources/css/app.css')
       
    </head>
    <body class="antialiased">
        <nav class="mx-auto px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
            <!-- Primary Navigation Menu -->
            
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:items-center p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                    
                    <a href="/" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Postagens</a>
                    
                    <a href="{{ route('projects') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Projetos</a>
                    
                    <a href="{{ route('about') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sobre</a>
                    
                    <a href="{{ route('contacts') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Contatos</a>

                    <a href="{{ route('login') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cadastrar</a>
                        @endif
                    @endauth
                </div>
            @endif
            
        </nav>
        <main style="margin:60px 80px;">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis quas commodi impedit, labore doloremque nulla, nesciunt dolorem dicta perferendis omnis ex placeat eligendi tempore fuga libero similique provident? In.
            </p>
        </main>
    </body>
</html>
