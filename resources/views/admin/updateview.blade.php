<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public"></base>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    @include("admin.admincss")
    <style>
        .container{
            display: flex;
            justify-content: baseline;
            margin-left:0;
            margin-right:0;
        
        }
        .obj2{

        }
    </style>
  </head>
  <body>
    <div class = "container">
        <div class="obj1">
            @include("admin.navbar")
        </div>
       
        <div class="obj2">
            <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div >
                    <label for="">Title</label>
                    <input style ="color:blue;" type="text" name="title" id="title" value="{{$data->title}}" required>
                </div>
                <div>
                    <label for="">Price</label>
                    <input style ="color:blue;" type="text" name="price" id="price" value="{{$data->price}}" required>
                </div>
                
                <div>
                    <label for="">Description</label>
                    <input style ="color:blue;" type="text" name="description" id="" value="{{$data->description}}" required>
                </div>
                <div>
                    <label for="">Old Image</label>
                    <img height="200px" width="200px" src="/foodimage/{{$data->image}}" alt="">
                </div>
                <div>
                    <label for="">Image</label>
                    <input style ="color:blue;" type="file" name="image" id="image" required>
                </div>
                <div>
                    <input  style="color:black; background:white;" type="submit" name="submit" value ="save" id="submit">
                </div>
            </form>
        </div>
    
    </div>

    


    @include("admin.adminjs")
  </body>
</html>