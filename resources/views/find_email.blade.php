<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<style>
    table{
        margin-left: auto;
        margin-right: auto;
        text-align: left;
    }
    td{
        padding: 5px;
    }
    button{
        background-color: white;
        border-radius: 8px;
        border: 1px solid gray;
        padding: 2px;
        padding-left: 8px;
        padding-right: 8px;
    }
    button:hover{
        background-color: #2c343b;
        color: white;
        border-radius: 8px;
        border: 1px solid white;
        padding: 2px;
        padding-left: 8px;
        padding-right: 8px;
    }
    input{
        border-radius: 8px;
        border: 1px;
        padding: 5px;
    }
    a{
        text-decoration: none;
        color: white;
    }
</style>


<section class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1>Find Email</h1> <br>
            <form method="POST" action="/login_ok">
                @csrf
                <table style="margin-left: auto; margin-right: auto">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="user_email" id="user_email"></td>
                    </tr>
                    <tr>
                        <td>Tel</td>
                        <td><input type="password" name="user_pw" id="user_pw"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>
