<?php

$clientId = ""; // Application ID

$scope = "VALUABLE_ACCESS"; // The requested app permissions are separated by the “;” symbol. See app permissions https://apiok.ru/en/ext/oauth/permissions

$response_type = "code"; // Type of server response, enter token

$redirectUri = ""; // URI to be redirected with access_token The part of the URI following the “?” (query) is not included in the check. Regardless
                   //  , we recommend that you use the state parameter to transfer dynamically changing data.

$layout = "w";   // How the authorization window looks:
                // * w – (by default) the standard window for the full version of the site;
                // * m – the window for mobile authorization;
                // * a – the simplified window for mobile authorization without a header.

$state = "";    // Condition parameter. Will be passed to redirect_uri without changes. 
                //Making it possible to transfer arbitrary data between different OAuth phases and protect against xsrf.



$url = "https://connect.ok.ru/oauth/authorize?client_id=".$clientId."&scope=".$scope."&response_type=".$response_type."&redirect_uri=".$redirectUri."&layout=".$layout."&state=".$state;
?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ok.ru Login</title>
</head>
<body>
    <button type="button" onclick="Login()">ok.ru Login</button>
    <script type="text/javascript">
        function Login() {
            location.href = "<?php echo($url); ?>";
        }
    </script>
</body>
</html>

