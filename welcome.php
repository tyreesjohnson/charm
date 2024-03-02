<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Carmellow</title>
    <link rel="manifest" href="/manifest.json">
    <link href="/global.css" type="text/css" rel="stylesheet">

    <script>
    var link = document.createElement('link'); link.rel = 'stylesheet'; link.href = 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css'; document.head.appendChild(link);
    </script>
</head>

</head>
<body class="h-screen">
    <img src="images/logo-black-256x256.png" class="w-20 pt-20 mx-auto" id="logo">
    <h1 class="text-3xl font-semibold text-center" stlye="color:#000">Log in or sign up</h1>

<div class="thirdparty-sign-in">
<button type="submit" class="bg-transparent text-black font-bold border text-base py-2 px-4 w-full flex items-center justify-center" style="border-radius:8px">
            <img src="https://img.icons8.com/color/48/google-logo.png" alt="Google Icon" class="w-6 h-6 mr-2">
            Continue with Google
</button>
<div style="margin:10px;"></div>
<button type="submit" class="bg-transparent text-black font-bold border text-base py-2 px-4 w-full flex items-center justify-center" style="border-radius:8px">
            <img src="https://img.icons8.com/ios-filled/48/mac-os.png" alt="Google Icon" class="w-6 h-6 mr-2">
            Continue with Apple
</button>
<div style="margin:10px;"></div>
<button type="submit" class="bg-transparent text-black font-bold border text-base py-2 px-4 w-full flex items-center justify-center" style="border-radius:8px">
            <img src="https://img.icons8.com/color/48/discord-logo.png" alt="Google Icon" class="w-6 h-6 mr-2">
            Continue with Discord
</button>


</div>
    <h6 class="text-center">or</h6>
<div class="sign-in">
    <input type="email" name="user.id" placeholder="Email" required/><input type="password" name="user.pass" placeholder="Password" required/><br/>
    <input type="submit" value="Log in"/><br/>
    <div style="margin:10px;"></div>
    <p class="text-center" style="font-size:13px">By signing up, you're creating a Charm account and agree to our <b>Terms of use</b> and <b>Privacy Policy</b></p>
</div>

<button type="submit" class="bg-transparent text-black font-semibold py-2 px-4 w-full flex items-center justify-center" style="border-radius:8px">
<a href="/home.php">Continue as guest</a>
</button>

</body>
</html>

<style>
body {
    background:#ffffff;
}

#logo {
    margin-bottom:25px !important;
}

.sign-in, .thirdparty-sign-in{
    margin:20px !important;
}

.sign-in input[type=email], input[type=password] {
    background:#f2f2f2;
    border:solid 1px #f2f2f2;
    border-radius:8px;

    font-size:15px;
    font-weight:bold;
    color:#000;

    width:100%;
    padding-top:10px;
    padding-bottom:10px;

    margin-bottom:10px;
}
.sign-in input[type=submit] {
    background:#000;
    border-radius:8px;

    font-size:15px;
    font-weight:bold;
    color:#fff;

    width:100%;
    padding-top:10px;
    padding-bottom:10px;
}

.thirdparty-sign-in button:active {
    background:#f5f5f5;
}


a {
    color:grey;
    font-weight:bold;
    text:center;
}

p {
    padding-top:12px;
}
</style>