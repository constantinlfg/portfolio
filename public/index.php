<?php

use Html\WebPage;

$html = new WebPage("Mon Portfolio");

$html->appendCssUrl('css/style.css');

$html->appendToHead("\n    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
                             \n    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>");

$html->appendContent(
    <<<HTML
    <header>
        <nav class="navbar">
            <img class="logo" src="assets/img/logo.png" alt="logo"/>
            <div class="menu">            
                <a href="#comp" class="menu-item">Compétences</a>
                <a href="#projet" class="menu-item">Projet</a>
                <a href="#form" class="menu-item">Formation</a>
                <a href="#contact" class="menu-item">Contact</a>
            </div>

        </nav>
    </header>
    <main>
        <div class="bio">
            <h1>CONSTANTIN <br>LYFOUNG</br></h1>
            <p>Étudiant en développement, front end & back end.</p>
        </div>
        <div class="group">
            <h1>COMPETENCES</h1>
            <div class="group-content">
                <div class="group-item">
                    <h2>Front</h2>
                    <p>Je suis passionné par le dev web. Je maitrise le HTML et le CSS.</p>
                </div>
                <div class="group-item">
                    <h2>Back</h2>
                    <p>Je suis formé au dev objet : python, PhP, C++. Concernant les bases de données, je maitrise le SQL. Je suis formé au framework Symfony.</p>
                </div>
                <div class="group-item">
                    <h2>Mes qualités</h2>
                    <p>Je suis quelqu'un sur qui vous pouvez compter, je rends toujours mes travaux dans les temps. Je suis également curieux, autonome et je m'adapte rapidement.
                     J'apprécie apprendre de nouveau framework et langages.</p>
                </div>
            </div>
        </div>
        <div class="group">
            <h1>PROJETS</h1>
            <div class="group-content">
                <a href="https://github.com/constantinlfg/portfolio" class="group-item">
                    <h2>Mon portfolio</h2>
                    <p>Le code de ce portfolio est 100% de moi, sans IA. Une simple démonstration de mes compétences HTML et CSS.</p>
                </a>
                <a href="https://github.com/constantinlfg/game-library" class="group-item">
                    <h2>Web App de jeux vidéo</h2>
                    <p>Il s'agit d'une webapp créer en binôme lors d'un projet universitaire. Nous devions créer une webapp de présentation de jeux vidéo. La base de données nous a été donnée. L'application a été codé en PhP pure sans framework. Le projet s'est étalé sur une semaine de travail.</p>
                </a>
            </div>
        </div>
    </main>
HTML
);

echo $html->toHTML();
