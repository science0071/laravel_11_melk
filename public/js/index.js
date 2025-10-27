
      function Val()
      {
          var address=document.getElementById("address").value;
       
          var area=document.getElementById("area").value;

          
          var price=document.getElementById("price").value;
          var year=document.getElementById("year").value;

          document.getElementById("address").innerHTML='';
          document.getElementById("area").innerHTML='';
          document.getElementById("price").innerHTML='';
          document.getElementById("year").innerHTML='';

         if(address==""){
          document.getElementById("div-err").style.display='flex';
          document.getElementById("span").innerHTML="فیلد منطقه را پرکنید";
          return false;
         } 
         
         if(area==""){
          document.getElementById("div-err").style.display='flex';
          document.getElementById("span").innerHTML="متراژ ملک را وارد کنید";
          return false;
         } 

         if(price==""){
          document.getElementById("div-err").style.display='flex';
          document.getElementById("span").innerHTML="ارزش ملک را وارد کنید";
          return false;
         } 
         
         if(year==""){
          document.getElementById("div-err").style.display='flex';
          document.getElementById("span").innerHTML="سال ساخت ملک را وارد کنید";
          return false;
         } 

      }

      const enToFaDigits = {
          '0': '۰', '1': '۱', '2': '۲', '3': '۳', '4': '۴',
          '5': '۵', '6': '۶', '7': '۷', '8': '۸', '9': '۹'
          };

      const faToEnDigits = {
          '۰': '0', '۱': '1', '۲': '2', '۳': '3', '۴': '4',
          '۵': '5', '۶': '6', '۷': '7', '۸': '8', '۹': '9'
          };

  function toFaDigits(str) {
    return str.replace(/\d/g, d => enToFaDigits[d]);
  }

  function toEnDigits(str) {
    return str.replace(/[۰-۹]/g, d => faToEnDigits[d]);
  }


      var area1=document.getElementById("area");
      var real_area=document.getElementById("area11");
      area1.addEventListener("input", function () {
            let raw = toEnDigits(this.value).replace(/\D/g, "");
            let formatted = raw.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            formatted=toFaDigits(formatted);
            this.value = formatted;
            real_area.value = raw;
            // console.log(real_area);
          });
        document.querySelector("form").addEventListener("submit", function () {
        document.getElementById("area11").value = toEnDigits(
        document.getElementById("area").value
          ).replace(/\D/g, "");
        });
      
      const price1=document.getElementById("price");
      const price11=document.getElementById("price11");
      price1.addEventListener("input", function () {
            let raw = toEnDigits(this.value).replace(/\D/g, "");
            let formatted = raw.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            formatted=toFaDigits(formatted);
            this.value = formatted;
            price11.value = raw;
          });
        document.querySelector("form").addEventListener("submit", function () {
        document.getElementById("price11").value = toEnDigits(
        document.getElementById("price").value
          ).replace(/\D/g, "");
        });



  