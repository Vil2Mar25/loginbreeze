<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sobre</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <style>
            p{
                text-align: justify;
            }
        </style>

        @vite('resources/css/app.css')
    </head>
    <body style="background-color: rgb(127, 255, 212);">
        @include('components/barra')
        <div class="container mt-4 mx-auto" style="width: 80%; max-width: 1920px; color: #696969;">
            <div style="padding: 5%; margin: auto;">
                <h2 class="text-6xl text-center text-green-600 overline mb-4">SOBRE NÓS</h2>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-row p-4 mb-4">
                    <div class="w-2/4 mr-px flex items-center justify-center h-screen">
                        <img src="{{ asset('assets/images/job-5382501_1280.jpg') }}" alt="imagem de contatos" class="rounded-lg w-3/4">
                    </div>
                    <div class="inline-block align-middle w-2/4" style="margin-left: 5%;">   
                        <h5 class="text-3xl text-center font-bold mb-4">Missão</h5>
                        <p class="text-xl text-justify"> Surgimos com a missão de conectar profissionais a oportunidades de carreira significativas, fornecendo informações atualizadas e confiáveis sobre vagas de emprego. Buscamos capacitar individuos a tomar decisões informadas sobre seu futuro profissional, promovendo a prosperidade e o crescimento pessoal. Junte-se a nós enquanto trabalhamos para coonstruir pontes entre talentos e oportunidades, impulsionando o sucesso profissional de cada usuário que faz parte dessa comunidade.</P>
                    </div>
                </div>
                <div class="flex flex-row mx-auto p-4 mb-4">
                    <div class="inline-block align-middle w-2/4">
                        <h5 class="text-3xl text-center font-bold mb-4">História</h5>
                        <p class="text-xl">O blog Tudo Em Vagas surgiu Outubro de 2023, quando um grupo de estudantes graduados determinados a superar as barreiras na busca por oportunidades de emprego. Frustados pela falta de clareza nas plataformas e redes sociais existentes, decidiu criar este site inovador. Movido pela própria experiência, percebeu a necessidade de uma fonte confiável que simplificasse a busca por vagas, oferecendo aos usuários uma visão clara e acessível do mecado de trabalho. Assim, nasceu plataforma, guiada pela missão de facilitar o caminho para o emprego, conectando talentos a oportunidades de maneira eficaz e transparente. Desde então, temos evoluido para ser a referência na jornada profissional de milhares, capacitando-os a conquistar o sucesso que merecem.</P>
                    </div>
                    <div class="w-2/4 mr-px flex items-center justify-center h-screen" style="margin-left: 5%;">
                        <img src="{{ asset('assets/images/office-620817_1280.jpg') }}" alt="imagem de contatos" class="rounded-lg w-3/4">
                    </div>
                </div>
                <div class="flex flex-row p-4 mb-4">
                    <div class="w-2/4 mr-px flex items-center justify-center h-screen">
                        <img src="{{ asset('assets/images/office-932926_1280.jpg') }}" alt="imagem de contatos" class="rounded-lg w-3/4">
                    </div>
                    <div class="inline-block align-middle w-2/4" style="margin-left: 5%;">
                        <h5 class="text-3xl text-center font-bold mb-4">Conhecer mais</h5>
                        <p class="text-xl text-justify">Convidamos você a conhecer mais sobre a equipe por trás desta plataforma incrível, que está empenhada em simplificar sua busca por oportunidades de emprego. Siga-nos nas redes sociais para ficar por dentro das últimas atualizações, histórias inspiradoras e insights do mundo profissional. Estamos aqui para construir uma comunidade sólida e conectada.</p>
                        <p class="text-xl text-justify">Ao explorar nossas redes, você descobrirá a paixão que nos impulsiona a oferecer a melhor experiência possível. Juntos, estamos transformando a forma como as pessoas encontram oportunidades de carreira. Acreditamos que você encontrará não apenas informações valiosas, mas também a vaga que tanto procura no vasto mercado de trabalho. Junte-se a nós nessa jornada e descubra um futuro profissional repleto de possibilidades</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>