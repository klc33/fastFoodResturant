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
        
        <div style="postion:relative; top:60px;right:-150px;">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div >
                    <label for="">Title</label>
                    <input style ="color:blue;" type="text" name="title" id="title" placeholder="Write a title" required>
                </div>
                <div>
                    <label for="">Price</label>
                    <input style ="color:blue;" type="text" name="price" id="price" placeholder="Price" required>
                </div>
                <div>
                    <label for="">Image</label>
                    <input style ="color:blue;" type="file" name="image" id="image" required>
                </div>
                <div>
                    <label for="">Description</label>
                    <input style ="color:blue;" type="text" name="description" id="" placeholder="description" required>
                </div>
                <div>
                    <input  style="color:black; background:white;" type="submit" name="submit" value ="save" id="submit">
                </div>
            </form>
        </div>
        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding:30px;">Food Name</th>
                    <th style="padding:30px;">Price</th>
                    <th style="padding:30px;">Description</th>
                    <th style="padding:30px;">Image</th>
                    <th colspan="2" style="padding:30px;">Action</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}$</td>
                    <td>{{$data->description}}</td>
                    <td><img src="/foodimage/{{$data->image}}" height="200px" width="200px" alt="{{$data->title}}"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
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