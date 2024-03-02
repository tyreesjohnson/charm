<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Carmellow</title>
    <link rel="manifest" href="/manifest.json">

    <script>
    var link = document.createElement('link'); link.rel = 'stylesheet'; link.href = 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css'; document.head.appendChild(link);
    </script>
</head>
<body>

<?php
    include 'components/TopNavigation.php';
    include 'components/HomeContent.php';
    include 'components/BottomNavigation.php';
?>

    <script src="/script.js"></script>
</body>
</html>

