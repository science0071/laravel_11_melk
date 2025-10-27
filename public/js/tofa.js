const enToFaDigits = {
  '0': '۰', '1': '۱', '2': '۲', '3': '۳', '4': '۴',
  '5': '۵', '6': '۶', '7': '۷', '8': '۸', '9': '۹'
  };

const faToEnDigits = {
  '۰': '0', '۱': '1', '۲': '2', '۳': '3', '۴': '4',
  '۵': '5', '۶': '6', '۷': '7', '۸': '8', '۹': '9'
  };
  
  function toFaDigits(str) {
    //return str.replace(/\d/g, d => enToFaDigits[d]);
    return String(str).replace(/\d/g, d => enToFaDigits[d]);
  }

  function toEnDigits(str) {
    //return str.replace(/[۰-۹]/g, d => faToEnDigits[d]);
    return String(str).replace(/[۰-۹]/g, d => faToEnDigits[d]);
  }

  function tofa(value){
    value = String(value).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    value =toFaDigits(value);
    return value;
  }

  function tofa1(value){
    value =toFaDigits(value);
    return value;
  }
