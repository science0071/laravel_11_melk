<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="price-data1" content='{!! $price1 !!}'>
  <meta name="price-data2" content='{!! $price2 !!}'>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Show</title>

</head>
<body>
  <script src="{{ asset('js/tofa.js') }}"></script>



  <!-- ////////////////////==== Btn Bar ======//////////// -->
    <button id="btn_bar" class="btn btn-primary f-fa" style="display: none"  onclick="toggleSlide()">فیلتر ها</button>

  <!-- ////////////////////==== SIDE BAR ======//////////// -->
    <div class="sidebar col-3">
      <div>
        <h2 class="main-title par1 f-fa"> فیلترها</h2>
      </div>
      
      <div>
        <button class=" btn btn-success btn-side" onclick="upToDown()" data-bs-toggle="modal" data-bs-target="#exampleModal01">بیشترین قیمت</button>
        <button onclick="downToUP()" class=" btn btn-success btn-side"  data-bs-toggle="modal" data-bs-target="#exampleModal02" style="margin-top:10px ;" >کمترین قیمت</button>
        <div class="bdl"></div>
          <div class="input-group mt-2 btn-side" id="mySearchBox">
            <span class="input-group-text btn btn-warning  f-fa" style="padding-top:11px">محله</span>
            <input id="address" name="address" type="text" class="form-control f-fa" oninput="sugArea()" autocomplete="off" >
            <div class="suggestions" id="suggestionsBox"></div>
          </div>
          <button onclick="search()" class=" btn btn-info btn-side"  style="margin-top:10px ;"  data-bs-toggle="modal" data-bs-target="#exampleModal03" >جستوجو</button>
        
        <div class="bdl"></div>
          <!-- @auth
          <a onclick="" href="#" class=" btn btn-warning btn-side"  style="margin-top:10px; padding-top:11px"   >لیست ذخیره ها</a>
        @endauth -->
      </div>
    </div>
  <!-- //////////////////// TITLE ////////////// -->
    <div id="title_show" class="col-9" style="margin-right:25% ;  padding: 20px;">
      <h1 class="main-title f-fa"> جدول املاک</h1>
    </div>
  <!-- ====================== Modal 01 =================================== -->
    <div class="modal fade" id="exampleModal01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 farsi11" id="exampleModalLabel">
              بیشترین قیمت
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
      <!-- ////////////////TABLE////////////////////////// -->
        <div class="table-container">
          <table class="table table-striped " id="myTable2">
            <thead>
              <tr class="my-tr">
                <th scope="col" class="farsi11">ردیف</th>
                <th scope="col" class="farsi11">محله</th>
                <th scope="col" class="farsi11">متراژ</th>
                <th scope="col" class="farsi11">قیمت</th>
                <th scope="col" class="farsi11">سال ساخت</th>
              </tr>
            </thead>
          </table>
        </div>   
      <!-- ////////////////////////END TABLE/////////////////////////////////  -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>
  <!-- ====================== Modal 02 =================================== -->
    <div class="modal fade" id="exampleModal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 farsi11" id="exampleModalLabel">
              کمترین قیمت
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
      <!-- ////////////////TABLE////////////////////////// -->
        <div class="table-container">
          <table class="table table-striped " id="myTable3">
            <thead>
              <tr class="my-tr">
                <th scope="col" class="farsi11">ردیف</th>
                <th scope="col" class="farsi11">محله</th>
                <th scope="col" class="farsi11">متراژ</th>
                <th scope="col" class="farsi11">قیمت</th>
                <th scope="col" class="farsi11">سال ساخت</th>
              </tr>
            </thead>
          </table>
        </div>   
      <!-- ////////////////////////END TABLE/////////////////////////////////  -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>
  <!-- ====================== Modal 03 =================================== -->
    <div class="modal fade" id="exampleModal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 farsi11" id="exampleModalLabel">
              نتیجه جستجو
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
      <!-- ////////////////TABLE////////////////////////// -->
        <div class="table-container">
          <table class="table table-striped " id="myTable4">
            <thead>
              <tr class="my-tr">
                <th scope="col" class="farsi11">ردیف</th>
                <th scope="col" class="farsi11">محله</th>
                <th scope="col" class="farsi11">متراژ</th>
                <th scope="col" class="farsi11">قیمت</th>
                <th scope="col" class="farsi11">سال ساخت</th>
              </tr>
            </thead>
          </table>
        </div>   
      <!-- ////////////////////////END TABLE/////////////////////////////////  -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>
  <!-- ========================= MAIN TABLE  ================================== -->
  <div class="table-container col-9">
    <table class="table table-striped " id="myTable">
      <thead>
        <tr class="my-tr">
          <th scope="col" class="farsi11">ردیف</th>
          <th scope="col" class="farsi11">محله</th>
          <th scope="col" class="farsi11">متراژ</th>
          <th scope="col" class="farsi11">قیمت</th>
          <th scope="col" class="farsi11">سال ساخت</th>
          @auth
          <th scope="col" class="farsi11">ذخیره</th>
          @endauth
        </tr>
      </thead>
      <tbody>
        @php $count = 1; @endphp
        @foreach($data as $i)
        <tr class="row-hover">
          <td>
            {{$count++}}
          </td>
          <td class="farsi11">
            {{$i->address}}
          </td>
          <td class="farsi11"  data-area="{{ $i->area}}"> 
          </td>
          <td class="farsi11" data-price="{{ $i->price}}">
          </td>
          <td class="farsi11" data-year="{{ $i->year}}">>
          </td>
          <!-- @auth
          <td class="farsi11">
            <button class=" btn btn-light "  onclick="add({{$i->id}})">
              <i id="bookmark{{$i->id}}"
                style="color: {{ in_array($i->id, $saved_ids) ? '#C86909' : 'blue' }}"
                class="fa-solid fa-bookmark"></i>
              </button> 
          </td>
          @endauth -->
        </tr>
        @endforeach
      </tbody>
    </table>
   </div>

   <br>

   {{-- ==============================SCRIPTS============================================= --}}
{{-- ==============================SCRIPTS============================================= --}}
{{-- ==============================SCRIPTS============================================= --}}
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/rel.js') }}"></script>
 {{-- ================================================ --}}
 {{-- ================================================ --}}
  <script>
        document.querySelectorAll('td[data-area]').forEach(item => {
        let area = item.getAttribute('data-area');
        item.textContent = tofa(area);
        });
        document.querySelectorAll('td[data-price]').forEach(item => {
        let price = item.getAttribute('data-price');
        item.textContent = tofa(price);
        });
        document.querySelectorAll('td[data-year]').forEach(item => {
        let year = item.getAttribute('data-year');
        item.textContent = tofa1(year);
        });
    </script>


</body>
</html>