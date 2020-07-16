<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">USER_ID</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Content</th>
                <th scope="col">EDIT</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)   
                <tr>
                <th>{{$post->id}}</th>
                <th>{{$post->user_id}}</th>
                <th>{{$post->title}}</th>
                <th><img src="{{asset('uploads/highlights/'.$post->image)}}" width="100px" height="100px" alt="Image"</th>
                <th>{{$post->content}}</th> 
              
                <th><a href="/editdata/{{$post->id}}" class="btn btn-success" >EDIT</th>
              </tr>
              @endforeach
              
            </tbody>

          </table>
          <a href="/" class="btn btn-primary"  style="float: right">Go Back</a>

    </div>
    
</body>
</html>