<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Carmellow</title>
    <link href="/global.css" type="text/css" rel="stylesheet">
    <link rel="manifest" href="/manifest.json">
    
    <script>
    var link = document.createElement('link'); link.rel = 'stylesheet'; link.href = 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css'; document.head.appendChild(link);
    </script>
</head>
<body class="flex flex-col items-center h-screen justify-center" style="background:#fff !important">
    <img src="images/logo-black-256x256.png" class="h-28 mx-auto my-auto" alt="Logo"/>
    <script src="/script.js"></script>

    <script>
// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // After 3 seconds, redirect to welcome.php
    setTimeout(function () {
        window.location.href = 'welcome.php';
    }, 2600);
});
</script>

<style>
        html, body {
            margin: 0;
            overflow: hidden; /* Prevent scrolling */
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>

</body>
</html>

