<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
   
    </x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin</title>
        <!-- plugins:css -->
        @include("admin.admincss")
      </head>
      <body>
        <div class="container-scroller">
        @include("admin.navbar")
        <div style="position: relative; top:60px; right:-60px;">

            <table bgcolor="grey" boder="3px red" >
                <tr>
                    <th style="padding:30px;">Name</th>
                    <th style="padding:30px;">Email</th>
                    <th style="padding:30px;">Action</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    @if($data->usertype=="0")
                    <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
               
                    @else
                    <td>Not allowed</td>
                    @endif
                </tr>
                @endforeach
            </table>
        </div>


    </div>
    
    
    
        @include("admin.adminjs")
        
      </body>
    </html>
</body>
</html>