<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Update</title>

</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h3>Update required Data</h3>
        <form action="/updatepost/{{$posts->id}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="id" id="id" value="{{$posts->id}}">

            <div class="form-group">
                <label>User_ID</label>
            <input type="number" name="user_id" class="form-control" value="{{$posts->user_id}}">
            </div>

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{$posts->title}}">
            </div>
            
            <label>Image</label>
            <div class="input-group">
                <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" value="{{$posts->image}}">
                <label class="custom-file-label">Change image if required</label>
                </div>
            </div>

            <div class="form-group">
                <label>Content</label>
                <input type="text" name="content" class="form-control" value="{{$posts->content}}">
            </div> 
        <br><br>

            <button type="submit" name="submit" class="btn btn-primary">Update Info</button>
       
            <a href="/postpage" class="btn btn-primary" style="float:right">Go Back</a>
        </form>
        </div>
    </div>

    
</body>
</html>