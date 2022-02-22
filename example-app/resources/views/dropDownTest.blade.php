<html>
  <head>
    <meta charset="utf-8">
    <title>Dropdown Menu Test</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  </head>
  <body>
    <div class="container">
    <h2>DropDown Teste</h2>
            <div class="form-group">
                <label for="country">select discipline:</label>
                <select name="country" class="form-control" style="width:250px">
                    <option value="">--- Select discipline ---</option>
                    @foreach ($qualifications as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="state">Select State:</label>
                <select name="state" class="form-control"style="width:250px">
                <option>--State--</option>
                </select>
            </div>
      </div>
  </body>
</html>
