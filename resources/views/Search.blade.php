
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/258bab96e7.js" crossorigin="anonymous"></script>
    <title>مشاريع مؤرشفة </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('main.jpg');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
      

    </style>
</head>
<body>
    <div>

        <div style="position: absolute;
     right: 46%;
     top: 2%;">
                <i style="font-size: 27px;">مشاريع مؤرشفة </i>
        </div>
        <br>
        <table style="position: absolute;
top: 10%;
border=0.5">
                <tr>
                        <td> </td>
                        <td>فصل التخرج</td>
                        <td>قسم</td>
                        <td>عنوان المشروع</td>

                </tr>
                @if($inactive_users->count())
                @foreach($inactive_users as $user)
                <tr>
                        <td><button style="background-color: rgb(218, 55, 55);">
                                        <a target="self" href="{{route('drop_request_account', $user->id)}}">رفض</a>
                                </button></td>
                    

                        <td>{{$user->name}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->created_at}}</td>

                </tr>
                @endforeach
                @else
                <tr>
                        <td colspan="4">لا يوجد مشاريع مؤرشفة </td>
                </tr>
                @endif
        </table>
</body>
</html>