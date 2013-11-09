<?php
$prices = json_decode(file_get_contents("prices.json"));
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sean's Outpost Meal Index</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <section id="index">
            <h1>Sean's Outpost Meal Index</h1>
            <p>1 BTC = <?= intval($prices->total->amount / 1.25) ?> meals</p>
        </section>
        <section id="donate">
            <h1>Donate to Sean's Outpost</h1>
            <p><img src="donate.png"></p>
            <p><a href="http://seansoutpost.com/">What is Sean's Outpost?</a></p>
        </section>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-38745322-4', 'ryepdx.com');
            ga('send', 'pageview');
        </script>
    </body>
</html>
