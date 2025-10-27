
    

 
 
    function upToDown(){
      const data = JSON.parse(document.querySelector('meta[name="price-data1"]').content);
      //console.log(data);
      let len = data.length;
      const table = document.getElementById("myTable2");
      console.log(table);
       
       // اگر tbody قبلی وجود داشت حذف کن
        const oldTbody = table.querySelector("tbody");
       if (oldTbody) {
         table.removeChild(oldTbody);
        }
       
       const tbody = document.createElement("tbody");
        let num=1;
             
       for (let x = 0; x < len; x++) {
         const row = document.createElement("tr");
         row.className = 'row-hover';
 
         let cell0 = document.createElement("td");
         cell0.textContent = num;
         row.appendChild(cell0);
         
         let cell1 = document.createElement("td");
         cell1.className='farsi11';
         cell1.textContent = data[x]['address'];
         row.appendChild(cell1);
 
       // ستون منطقه
       let cell2 = document.createElement("td");
       cell2.className='farsi11';
       cell2.textContent = tofa(data[x]['area']);
       row.appendChild(cell2);
 
       // ستون قیمت
       let cell3 = document.createElement("td");
       cell3.className='farsi11';
       cell3.textContent = tofa(data[x]['price']);
       row.appendChild(cell3);
 
       // ستون سال
       let cell4 = document.createElement("td");
       cell4.className='farsi11';
       cell4.textContent = tofa1(data[x]['year']);
       row.appendChild(cell4);
       
       tbody.appendChild(row);
       num++;
     }
    table.appendChild(tbody);
 }
 
 
 
 function downToUP(){
    const data = JSON.parse(document.querySelector('meta[name="price-data2"]').content);
    let len = data.length;
    const table = document.getElementById("myTable3");
 
        // اگر tbody قبلی وجود داشت حذف کن
       const oldTbody = table.querySelector("tbody");
       if (oldTbody) {
         table.removeChild(oldTbody);
       }
 
       const tbody = document.createElement("tbody");
       let num=1;
       for (let x = 0; x < len; x++) {
         const row = document.createElement("tr");
         row.className = 'row-hover';
 
         let cell0 = document.createElement("td");
         cell0.textContent = num;
         row.appendChild(cell0);
         
        
         let cell1 = document.createElement("td");
         cell1.className='farsi11';
         cell1.textContent = data[x]['address'];
         row.appendChild(cell1);
 
       // ستون منطقه
       let cell2 = document.createElement("td");
       cell2.className='farsi11';
       cell2.textContent = tofa(data[x]['area']);
       row.appendChild(cell2);
 
       // ستون قیمت
       let cell3 = document.createElement("td");
       cell3.className='farsi11';
       cell3.textContent = tofa(data[x]['price']);
       row.appendChild(cell3);
 
       // ستون سال
       let cell4 = document.createElement("td");
       cell4.className='farsi11';
       cell4.textContent = tofa1(data[x]['year']);
       row.appendChild(cell4);
       
       
       tbody.appendChild(row);
       num++;
     }
    table.appendChild(tbody);
    }