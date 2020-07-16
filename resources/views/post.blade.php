<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <form action="{{route('addinfo')}}" method ="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

                <div class="form-group">
                    <label>User_ID</label>
                    <input type="number" name="user_id" class="form-control" placeholder="Enter your ID number">
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter your title">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" >
                        <label class="custom-file-label">Choose image</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input type="mediumtext" name="content" class="form-control" placeholder="About">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Save info</button>
                <a href="/postview" class = "btn btn-primary" style="margin-left: 35%">View Table</a>
                <a href="/" class="btn btn-primary" style="float:right">Go Back</a>
            
            </form>
        </div>
            

</body>
</html>