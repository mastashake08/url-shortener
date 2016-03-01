<!DOCTYPE html>
<html>
    <head>
        <title>URL Shortener</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
              <form role="form" action="/addUrl" method="post">
              <div class="form-group">
                {{ csrf_field() }}
                <label for="input_url">URL:</label>
                <input type="url" class="form-control" id="input_url">
              </div>
              <button type="submit" class="btn btn-default">Shorten URL</button>
              </form>
            </div>
        </div>
    </body>
</html>
