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
    <body>
        <div class="container mt-4 w-3/4 mx-auto">
            <div style="padding: 5%; margin: auto;">
                <h2 class="text-6xl font-bold text-center text-green-600 overline mb-4">CONTATOS</h2>
                <p class="mt-2 text-center text-4xl">Bem-vindo ao blog Tudo Em Vagas.</p>
                <p class="mt-6 text-left text-2xl">É sempre um prazer conversar com você, por isso estaremos aguardando seu contato. Para eventuais duvidas e sugestões, abaixo estarão nossos principais meios de contatos. </p>
            </div>
            <div class="bg-white flex flex-row space-x-9" style="align-items: start;">
                <div class="mx-auto w-2/4">
                    <img src="{{ asset('assets/images/contact.jpg') }}" alt="imagem de contatos" >
                </div>
                <div class="mx-auto w-2/4">
                    <div class="mx-auto font-mono">
                            <div class="flex flex-col justify-left mt-2">
                                <img src="{{asset('assets/images/phone-call.png')}}" class="justify-left" alt="imagem de telefone"  style="width: 10%; height: 10%;">
                                <div class="flex justify-left mt-2 text-xl">
                                    <h5 class="flex justify-left text-2xl font-bold text-green-600 overline">Telefone:</h5>
                                </div>
                                <div class="flex justify-left text-2xl text-emerald-600"> (88) 9 9999 9999.</div>
                            </div>
                            <div class="flex flex-col justify-left mt-2">
                                <img src="{{asset('assets/images/email.png')}}" class="justify-left" alt="imagem de telefone" style="width: 10%; height: 10%;">
                                <div class="flex justify-left mt-2 text-xl">
                                    <h5 class="flex justify-left text-2xl font-bold text-green-600 overline">E-mail:</h5>
                                </div>
                                <div class="flex justify-left text-2xl text-emerald-600"> TudoEmVagas@yaaa.com.</div>
                            </div>
                            <div class="flex flex-col justify-left mt-2">
                                <img src="{{asset('assets/images/placeholder.png')}}" class="justify-left" alt="imagem de telefone" style="width: 10%; height: 10%;">
                                <div class="flex justify-left mt-2 text-xl">
                                    <h5 class="flex justify-left text-2xl font-bold text-green-600 overline">Localização:</h5>
                                </div>
                                <div class="flex justify-left text-2xl text-emerald-600"> R. Pergentina Araújo - Centro, Itapipoca - CE, 62540-000</div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>