@extends('header')

@section('section')
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
<!-- Section-->
<section class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1>Login</h1> <br>
            <form method="POST" action="/login_ok">
                @csrf
                <table style="margin-left: auto; margin-right: auto">
                    <tr>
                        <td>ID</td>
                        <td><input type="text" name="user_id" id="user_id"></td>
                        <td rowspan="2"><button style="height: 80px">Login</button></td>
                    </tr>
                    <tr>
                        <td>PW</td>
                        <td><input type="password" name="user_pw" id="user_pw"></td>
                    </tr>
                </table>
            </form>

            <br>
            <table>
                <tr>
                    <td><a href="/find_id">아이디 찾기</a></td>
                    <td> | </td>
                    <td><a href="find_pw">비밀번호 찾기</a></td>
                </tr>
            </table>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection

