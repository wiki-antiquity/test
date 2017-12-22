<?php session_start();?><!-- active la variable de session - doit impérativement être placé au tout début du fichier -->
<!doctype html>
<!-- L'attribut lang="fr" identifie la page comme étant en français. D'après le w3c, identifier le langage de votre contenu vous permet d'effectuer plusieurs tâches automatiquement, du changement de l'apparence de votre page à l'extraction d'informations ou à la modification du fonctionnement d'une application. Certaines applications de langage fonctionnent sur l'ensemble du document, d'autres sur des parties du document convenablement étiquetées. -->
<html lang="fr">
    <!-- Métadonnées concernant la page -->
    <head>
        <!-- éléments obligatoires dans toute page HTML -->
        <title><?php echo($titre_page);?></title>
        <meta charset="utf-8">
        <!-- Déclaration de page adaptative -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Chargement de la librairie font-awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Chargement de la feuille de style adaptative Bootrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- Chargement de la feuille de style locale -->
        <link rel="stylesheet" href="styles.css">
    </head>
