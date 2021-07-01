<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bonjour</h1>
    @foreach ($users as $user)
        <div style="padding: 1rem ;text-align: center; width: max-content; height: max-content; border: 1px solid black">
            <p><strong>Id : </strong>{{$user->id}}</p>
            <p><strong>Nom : </strong>{{$user->nom}}</p>
            <p><strong>Age : </strong>{{$user->age}}</p>
            <p><strong>Email : </strong>{{$user->email}}</p>
        </div>
    @endforeach
</body>
</html>