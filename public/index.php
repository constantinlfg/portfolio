<?php

use Html\WebPage;

$html = new WebPage("Mon Portfolio");

$html->appendCssUrl('css/style.css');

$html->appendContent(<<<HTML
    <header>
        <nav class="navbar">
            <img class="logo" src="img/logo.png" alt="logo"/>
            <a href="#comp" class="nav-item">Compétences</a>
            <a href="#projet" class="nav-item">Projet</a>
            <a href="#form" class="nav-item">Formation</a>
            <a href="#contact" class="nav-item">Contact</a>
        </nav>
    </header>
    <main>
        <div class="bio">
            <div class="description">
                <h1>CONSTANTIN LYFOUNG</h1>
                <p>Étudiant en développement, front end & back end.</p>
            </div>
        </div>
        <div class="competences">
            <h1>MES COMPETENCES</h1>
            <div class="competence">
                <h2>Front</h2>
                <p>Je suis passionné par le dev web. Je maitrise le HTML et le CSS.</p>
            </div>
            <div class="competence">
                <h2>Back</h2>
                <p>Je suis formé au dev objet : python, PhP, C++. Je maitrise le SQL. Je suis formé au framework Symfony.</p>
            </div>
        </div>
    </main>
HTML
);

echo $html->toHTML();
