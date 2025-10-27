<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>MELK</title>
</head>
<body>
    <!-- ############################## TITLE ########################################### -->
    <div class="col-8 container">
      <h1 class="main-title f-fa">
        ثبت اطلاعات ملک</h1>
    </div>
    
    <br>

    <!-- ############################## FORM ########################################### -->
    <form action="#"  onsubmit="return Val()" method="POST">
      @csrf
      <div class="container">
          <div class="gird-container ">
              <!-- ******** address INPUT ***************** -->
              <div class="">
                <div class="input-group">
                  <span class="input-group-text btn btn-info f-fa">منطقه</span>
                  <input id="address" name="address" type="text" class="form-control f-fa border-rad" >
                </div>
              </div>
              <!-- ******** AREA INPUT ***************** -->
              <div class="">
                <div class="input-group">
                  <span class="input-group-text btn btn-info f-fa">متراژ (متر)</span>
                  <input id="area"  type="text" class="form-control f-fa border-rad" placeholder="">
                  <input id="area11" name="area" type="hidden" class="form-control" placeholder="">
                </div>
              </div>
              <!-- ******** PRICE INPUT ***************** -->
              <div class="">
                <div class="input-group">
                  <span class="input-group-text btn btn-info f-fa">قیمت (تومان)</span>
                  <input id="price"  type="text" class="form-control f-fa border-rad" placeholder="">
                  <input id="price11" name="price" type="hidden" class="form-control" placeholder="">
                </div>
              </div>
              
              <!-- ******** PRICE YEAR ***************** -->
              <div class="">
                <div class="input-group">
                  <span class="input-group-text btn btn-info f-fa ">سال ساخت</span>
                  <input id="year" name="year" type="text" class="form-control f-fa border-rad" placeholder="">
                </div>
              </div>
          </div>
          <br>
          <div class="input-group justify-content-center">
            <button name="sunmit" type="submit" class="btn btn-warning btn-lg f-fa col-2">ثبت</button>
          </div>
          <br>
        </div>
    </form>
    
    <!-- ############################## SHOW BTN ########################################### -->
     <div class="d-flex justify-content-center">
        <a href="#" class="btn1 btn1-white btn1-animation-1 f-fa">
          نمایش اطلاعات
        </a> 
    </div>
    <br>
    
    <!-- ############################## ALERT MSG ########################################### -->
    <div id="div-err" class="div-err">
      <span id="span" class="f-fa span"></span>
    </div>
    @if ($message= Session::get('success'))
    <div  class="div-suc">
      <span class="f-fa span-suc">{{$message}}</span>
    </div>
    @endif
    <br>
    <br>

    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/index.js') }}"></script>



</body>
</html>