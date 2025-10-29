<html lang="en">
<head>
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  
  <title>لیست علابق</title>
</head>
<body>
  <script src="{{ asset("js/tofa.js") }}"></script>
  
  <!-- ************** AUTH BAR ******************* -->
  <div style="text-align: left">
    <div class="tap col-12">
        @if (Route::has('login'))
            @auth
            <div class="box-row ">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <div class="box2">
                    <a href="" class="box farsi11"
                      onclick="event.preventDefault(); this.closest('form').submit();">
                      خروج
                    </a>
                  </div>
              </form>
              
                  <div class="box2 farsi11">
                    <a href="{{ route('melk') }}" class="box">صفحه نمایش</a>
                  </div>     
            </div>
            @endauth
          @endif
      </div> 
  </div> 
  
<!-- ******** TITLE ************** -->
<div class="col-12 container" style=" padding: 20px;">
  <h1 class="main-title f-fa" style="border:none;">املاک ذخیره شده</h1>
</div>

<!-- ******************* MAIN TABLE *********************** -->
<div class="table-container col-12">
  <table class="table table-striped " id="myTable">
    <thead>
      <tr class="my-tr">
        <th scope="col" class="farsi11">ردیف</th>
        <th scope="col" class="farsi11">محله</th>
        <th scope="col" class="farsi11">متراژ</th>
        <th scope="col" class="farsi11">قیمت</th>
        <th scope="col" class="farsi11">سال ساخت</th>
        <th scope="col" class="farsi11">حذف</th>
        
      </tr>
    </thead>

    <tbody>
      @php $count = 1; @endphp
      @foreach($savedData as $i)
      <tr class="row-hover">
        <td>
          {{$count++}}
        </td>
        <td class="farsi11">
          {{$i->address}}
        </td>
        <td class="farsi11"  data-area="{{ $i->area}}"> 
        </td>
        <td class="farsi11" data-price="{{$i->price}}">  
        </td>
        <td class="farsi11" data-year="{{$i->year}}">
        </td>
      
        <td class="farsi11">
          <button class=" btn btn-danger "  onclick="remove({{$i->id}},this)">
            حذف
            </button> 
        </td>
        
      </tr>
      @endforeach
    </tbody>

  </table>

  
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

<script>
  function remove(data_id,el) {
  fetch("{{ route('melk.remove') }}", {
    method: "POST",
    headers: {
      "X-CSRF-TOKEN": "{{ csrf_token() }}",
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ data_id: data_id }),
  })
  .then(response => response.json())
  .then(result => {
    if (result.success) {
      // حذف سطر از جدول بدون رفرش
      const row = el.closest('tr');
      if (row) row.remove();
    }
  })
  .catch(error => console.error("Error:", error));
  }
</script>


<script> // when click `bacl icon` in browser the page will be reloaded
  window.addEventListener('pageshow', function (event) {
    if (event.persisted || performance.getEntriesByType("navigation")[0].type === "back_forward") {
      location.reload();
    }
  });
</script>
  
</body>
</html>