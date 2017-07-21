<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Just Laravel - How to send beautiful HTML emails with Laravel using Beauty mail</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100%;
				width:100%
                margin: 0;
            }

            .full-height {
                height: 100%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }


            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .sendmailBtn{
                width:250px; 
                height:50px; 
                color:#FFF; 
                background:#e36c39;
                border-radius:10px;
                border:1px solid #FFF;
            }

            .sendmailBtn:hover{
                border:1px solid #e36c39;
                color:#e36c39;
                background: #fff;
                font-size: 20%;
            }
            
            .input_email{
                height: 50px;
                width: 250px;
                margin-top: 30px;
                padding: 0px !important;
                font-size: 20%;
                border-color: #e36c39;
                vertical-align: text-top;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @if(Session::has('message'))
                    <span style="color:green; font-size:20px;"> {{ Session::get('message') }} </span>
                    @endif
                    <form action="{{ URL::to('/sendMail') }}" method="POST">
                        {{ csrf_field() }}
                        <div>Email: <input class="input_email"  type="email" name="email" required></div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div style="color:red; font-size:18px !important;"> {{ $error }}</div>
                            @endforeach
                        @endif
                        <button class="sendmailBtn" type="submit">Send Email</button>
                    </form>
                </div>               
            </div>
        </div>
    </body>
</html>
