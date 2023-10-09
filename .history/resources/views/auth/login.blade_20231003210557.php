@extends(la)
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            cursor: pointer;
        }

        body {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 25rem;
            height: 28rem;
            flex-direction: column;
            box-shadow: 0 8px 41px 0 rgba(90, 200, 255, 0.37);
            border-radius: 45px;
            background: transparent;
        }

        input {
            width: 80%;
            margin: 5% auto;
            margin-bottom: 8%;
            border: none;
            outline: none;
            background: transparent;
            color: white;
            border-bottom: 1px solid rgb(255, 255, 255);
        }

        button {
            background-color: rgb(23, 214, 176);
            border-radius: 50px;

        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-image: url(images/login.jpg);">
    <form action="">
            <br><br><br>
            <center><label for="" style="color:white">
                    <h1><strong>User Name</strong></h1>
                </label>
                <input type="text">
            </center>
            <br><br><br><br><br>
            <center><label for="" style="color:white">
                    <h1><strong>Password</strong></h1>
                    <input type="text">
                </label></center>
            <br>
        <center>
            <button class="btn btn-success" style="color: azure;margin-right: 11rem;">
                Save
            </button>
        </center>
    </form>
</body>

</html>
