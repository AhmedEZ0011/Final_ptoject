<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notes</h1>
    <h2>{{$user}}</h2>

    <div>
        <h3>Add Note</h3>
    <form action="{{ route('note.store') }}" method="post" enctype="multipart/form-data"> 
    @csrf 
        <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
        <textarea name="content"></textarea>
        <input type="file" name="proposal">
        <input type="hidden" name="userid" value="1111">
        <input type="submit" value="{{$btnName}}"> 
    </form> 
    </div>
</body>
</html>