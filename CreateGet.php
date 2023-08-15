<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form id="loginForm">
        <input type="text" placeholder="shopname" id="shopname" value="">
        <input type="text" placeholder="ownername" id="ownername" value="">
        <input type="text" placeholder="mobilenumber" id="mobilenumber" value="">
        <input type="text" placeholder="username" id="username" value="">
        <input type="text" placeholder="email" id="email" value="">
        <input type="text" placeholder="password" id="password" value="">
        <input type="text" placeholder="masterandagentid" id="masterandagentid" value="">
        <input type="text" placeholder="address" id="address" value="">
        <input type="text" placeholder="Role" id="Role" value="">
        <button type="submit">Login</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        const apiUrl = 'https://funtargetgame.co.in/CreatePost';

        document.getElementById('loginForm').addEventListener('submit', function (event) {
            event.preventDefault();

            var shopname = document.getElementById('shopname').value;
            var ownername = document.getElementById('ownername').value;
            var mobilenumber = document.getElementById('mobilenumber').value;
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var masterandagentid = document.getElementById('masterandagentid').value;
            var address = document.getElementById('address').value;
            var Role = document.getElementById('Role').value;

            const requestData = {
                shopname: shopname,
                ownername: ownername,
                mobilenumber: mobilenumber,
                username: username,
                email: email,
                password: password,
                masterandagentid: masterandagentid,
                address: address,
                Role: Role,
            };

            axios.post(apiUrl, requestData, {
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => {
                console.log(response.data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>