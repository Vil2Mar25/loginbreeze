<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Contatos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body style="background-color: rgb(127, 255, 212);">
        @include('components/barra')
        <div class="container mt-4 mx-auto" style="width: 80%; max-width: 1920px; color: #696969;">
            <div style="padding: 5%; margin: auto;">
                <h2 class="text-6xl font-bold text-center text-green-600 overline mb-4">CONTATOS</h2>
                <p class="mt-2 text-center text-3xl">Bem-vindo ao blog Tudo Em Vagas.</p>
                <p class="mt-6 text-center text-justify text-xl w-2/4 mx-auto">É sempre um prazer conversar com você, por isso estaremos aguardando seu contato. Para eventuais duvidas e sugestões, abaixo estarão nossos principais meios de contatos. </p>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-row p-4">
                    <div class="mx-auto w-2/4 mb-4">
                        <div class="w-3/4 mx-auto flex items-center justify-center h-screen">
                            <img src="{{ asset('assets/images/contact.jpg') }}" alt="imagem de contatos" class="w-3/4 mb-4">
                        </div>
                        <div class="mx-auto flex flex-row font-mono">
                                <div class="flex flex-col justify-left mt-2">
                                    <img src="{{asset('assets/images/phone-call.png')}}" class="justify-center mb-4" alt="imagem de telefone"  style="width: 40%; height: 40%;">
                                    <div class="flex items-center">
                                        <span class="text-2xl font-bold text-green-600 overline">Telefone:</span>
                                    </div>
                                    <p class="text-grey-700"> (88) 9 9999 9999.0</p>
                                </div>

                                <div class="flex flex-col justify-left mt-2">
                                    <img src="{{asset('assets/images/email.png')}}" class="justify-center mb-4" alt="imagem de telefone" style="width: 40%; height: 40%;">  
                                    <div class="flex items-center">
                                        <span class="text-2xl font-bold text-green-600 overline">E-mail:</span>
                                    </div>
                                    <p class="text-grey-700">TudoEmVagas@yaaa.com.</p>
                                </div>

                                <div class="flex flex-col justify-left mt-2">
                                    <img src="{{asset('assets/images/placeholder.png')}}" class="justify-center mb-4" alt="imagem de telefone" style="width: 40%; height: 40%;">
                                    <div class="flex items-center">
                                        <span class="text-2xl font-bold text-green-600 overline">Localização:</span>
                                    </div>
                                    <p class="text-grey-700"> R. Pergentina Araújo - Centro, Itapipoca - CE, 62540-000</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>