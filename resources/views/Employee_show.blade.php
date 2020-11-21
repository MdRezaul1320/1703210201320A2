<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DEpt</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
          
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
       <br> <a href="dept_create">add</a></br>
        <table>
             <tr>
             <td>Id</td>
             <td>Name</td>
             <td>Created at</td>
             <td>Action</td>
             
             </tr>
             @foreach($deptArr as $dept)
             <tr>
             <td>{{$->id}}</td>
             <td>{{$dept->name}}</td>
             <td>{{$dept->created_at}}</td>
             
             </tr>
             @endforeach
    </body>
</html>
