// show
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <style>
            .add_image {
                margin-top: 15px;
                margin-bottom: 15px;
            }
            .row {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
         <div class="col-md-12 add_image">
             <a href="{{url('thumbnails/create')}}" class="btn btn-primary">Upload New Image</a>
         </div>
            </div>
                @foreach($thumbnails as $thumbnail)
                    <div class="row">
                <div class="col-md-6">
                    <label>Original :</label>
                    <img src="thumbs/{{$thumbnail->image}}">
                </div>
                  <div class="col-md-6">
                    <label>Resize :</label>
                    <img src="thumbs/thumb_{{$thumbnail->image}}">
                </div>
                    </div>
                @endforeach
        </div>
    </body>
</html>
