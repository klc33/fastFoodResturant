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

        <h1>Customers orders</h1>
        <table >
            <tr >
                <th style="padding:30px">Name</td>
                <th style="padding:30px">Phone</td>
                <th style="padding:30px">Address</td>
                <th style="padding:30px">Foodname</td>
                <th style="padding:30px">price</td>
                <th style="padding:30px">quantity</td>
                <th style="padding:30px">Total price</td>
            </tr>
            @foreach($data as $data)
            <tr style="background:#7e7938; color:#fff;">
                <td align="center" style="padding-left:5px;">{{$data->name}}</td>
                <td align="center" style="padding-left:5px;">{{$data->phone}} </td>
                <td align="center" style="padding-left:5px;">{{$data->address}}</td>
                <td align="center" style="padding-left:5px;">{{$data->title}} </td>
                <td align="center" style="padding-left:5px;">{{$data->price}}$</td>
                <td align="center" style="padding-left:5px;">{{$data->quantity}}</td>
                <td align="center" style="padding-left:5px;">{{$data->quantity * $data->price}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

    @include("admin.adminjs")
  </body>
</html>