@extends('generalTemplate')

@section('content')
    <link rel="stylesheet" href="http://pWeb2324.test/themes/css/knowUs.css">
    <article class= "intro">
        <h1>Bienvenido a nuestro proyecto GC Market Connet</h1>
        <p>Buenas, somos el grupo de trabajo de la asignatura de Programación Web 23/24 que está formado por Myriam Yerou y
            Antonio Cristian regina Puccini.</p>
        <p>En este apartado explicaremos en qué consiste nuestra aplicación web, a qué problemática damos solución según los
            objetivos establecidos para el proyecto en la asignatura y también explicaremos la estructura de la propia
            aplicación web y de la base de datos que utilizaremos</p>
    </article>

    <article class= "proyecto">
        <h2>Sobre el proyecto</h2>
        <p>
            Nuestro proyecto se basa en el ODS (Objetivo de Desarrollo Sostenible) número 12 "Producción y consumo
            responsables". Bajo esta premisa pensamos que la mejor manera de fomentar dicho objetivo era mediante una
            aplicación web que ayudase a los productores y puestos de la isla de Gran Canaria y del Mercado Central,
            respectivamente, a ofrecer sus productos a los consumidores locales. Normalmente los consumidores acuden a
            grandes centros de distribución como pueden ser supermercados o hipermercados, y no acostumbran mucho a acudir a
            mercados más clásicos como lo es el Mercado Central ubicado en la zona de Mesa y López.
        </p>
        <p>
            Por ello proponemos que se fomente el consumo local, o kilómetro cero mediante esta Aplicación Web, donde los
            productores que se responsabilizan por el medio ambiente, lo cuidan y producen de manera responsable y eficiente
            con respecto del medio ambiente vean sus esfuerzos compensados por la existencia de una plataforma en la cuál
            los consumidores puedan interaccionar fácilmente y acorde a las tecnologías del momento con los maravillosos
            productos que ofrece la isla y sus responsabilizados productores y comerciantes.
        </p>
        <p>
            GranCan Market Connect es una aplicación web diseñada para facilitar la conexión directa entre productores
            locales de la isla de Gran Canaria, puestos del mercado central ubicado en la zona de Mesa y López, y los
            consumidores finales. La aplicación ofrece perfiles específicos para productores, puestos y consumidores,
            permitiendo transacciones fluidas y transparentes en todo el ecosistema de comercio local y fomentando el
            comercio de cercanía.
        </p>
        <p>

        </p>
    </article>

    <article class="sitemap">
        <h2>Sitemap de nuestra Aplicación Web</h2>

        <ul>
            <li><a href="/home">/home</a></li>
            <li><a href="/servicios">/servicios</a></li>
            <a href=""></a>
            <li><a href="/conocenos">/conocenos</a></li>
            <li><a href="/contacto">/contacto</a></li>
            <li><a href="/consumidores">/consumidores</a></li>
            <ul>
                <li><a href="/consumidores/perfil">/perfil</a></li>
                <li><a href="/consumidores/entregas">/entregas</a></li>
                <li><a href="/consumidores/afluencia">/afluencia</a></li>
            </ul>
            <li><a href=""></a>/puestos</li>
            <ul>
                <li><a href=""></a>/perfil</li>
                <li><a href=""></a>/catalogo</li>
                <li><a href=""></a>/realizarPedido</li>
                <li><a href=""></a>/entregas</li>
                <li><a href=""></a>/temp</li>
            </ul>
            <li><a href=""></a>/productores</li>
            <ul>
                <li><a href=""></a>/perfil</li>
                <li><a href=""></a>/catalogo</li>
                <ul>
                    <li><a href=""></a>/editarCatalogo</li>
                </ul>
                <li><a href=""></a>/pedidos</li>
            </ul>
        </ul>
    </article>
@endsection
