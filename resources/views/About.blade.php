<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sobre</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container mt-4 w-3/4 mx-auto">
            <div style="padding: 5%; margin: auto;">
                <h2 class="text-6xl font-bold text-center text-cyan-300 overline mb-4">SOBRE NÓS</h2>
            </div>
            <div class="bg-white flex flex-col">
                <div class="flex flex-rowt p-4">
                    <div class="w-1/4">
                        <img src="{{ asset('assets/images/job-5382501_1280.jpg') }}" alt="imagem de contatos">
                    </div>
                    <div class="inline-block align-middle w-3/4">   
                        <h5 class="text-4xl">Missão</h5>
                        <p> Surgimos com a finalidade trazer as principais oportunidades de trabalho para Itapipoca e região</P>
                    </div>
                </div>
                <div class="flex flex-row mx-auto p-4">
                    <div class="inline-block align-middle w-3/4">
                        <h5 class="text-4xl">História</h5>
                        <p>O blog Tudo Em Vagas surgiu Outubro de 2023, a equipe conta 4 membros onde cada um tem uma habilidade e propósito para manter e desenvolver características para que o blog possui uma aparência amigável e as postagens possa está sempre atualizada de acordo com as vagas que eventualmente possa vir a aparecer.</P>
                    </div>
                    <div class="w-1/4">
                        <img src="{{ asset('assets/images/office-620817_1280.jpg') }}" alt="imagem de contatos">
                    </div>
                </div>
                <div class="flex flex-row p-4">
                    <div class="w-1/4">
                        <img src="{{ asset('assets/images/office-932926_1280.jpg') }}" alt="imagem de contatos">
                    </div>
                    <div class="inline-block align-middle w-3/4">
                        <h5 class="text-4xl">Conhecer mais</h5>
                        <p>Conheça um pouco mais da nossa história e do nosso trabaçho nas nossas redes sociais.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>