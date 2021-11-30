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
    </style>
<!-- Section-->
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>


<section class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1>Join</h1> <br>
            <form>
                @csrf
                <table>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="user_email" id="user_email"></td>
                        <td><button id="check_email">중복확인</button></td>
                    </tr>
                    <tr>
                        <td>PW</td>
                        <td><input type="password" name="user_pw" id="user_pw"></td>
                    </tr>
                    <tr>
                        <td>PW_ok</td>
                        <td><input type="password" name="user_pw_ok" id="user_pw_ok"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="user_name" id="user_name"></td>
                    </tr>
                    <tr>
                        <td>Tel</td>
                        <td><input type="text" name="user_tel" id="user_tel"></td>
                    </tr>
                    <tr>
                        <td>Add</td>
                        <td><input type="text" name="user_addr" id="user_addr"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><button>Join</button></td>
                    </tr>
                </table>
            </form>

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

{{--<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}" />--}}
{{--<script type="text/javascript">--}}

{{--    $('#check_email').click(function(e){--}}
{{--        e.preventDefault();--}}

{{--        $.ajax({--}}
{{--            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},--}}
{{--            type: 'post',--}}
{{--            url: '/email_multiple',--}}
{{--            dataType: 'json',--}}
{{--            data: {'user_email':'user_email'},--}}
{{--            success: function(data) {--}}
{{--                alert('success');--}}
{{--            },--}}
{{--            error: function(data) {--}}
{{--                alert('fail');--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
