<?php
    if (empty(session_id())){
        session_start();
    }; 
    $_SESSION['username'] = "filvi"; // TODO remove this debug part
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Today I Learn!</title>
    <meta name="twitter:image" content="https://todayilearn.it/assets/img/og_image_til.jpg">
    <meta name="twitter:title" content="Today I Learn!">
    <meta property="og:type" content="website">
    <meta name="description" content="The place where you can proactively backup your daily discoveries. Reinforcing learn with periodical mail reminders .">
    <meta property="og:image" content="https://todayilearn.it/assets/img/og_image_til.jpg">
    <meta name="twitter:description" content="The place where you can proactively backup your daily discoveries. Reinforcing learn with periodical mail reminders .">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Special+Elite">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=220695d33937f0c1d9977599320bf21d">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=adff92d3f0cf00231f9a2a4025220407">
</head>

<body class="h-100">
