

if (typeof window !== 'undefined') {
    
  function addToCart( product_id, page = "" ) {
      if( !product_id || !page ) {
          console.log("not found "+ !product_id?"product_id":"")
      } 
      else {
          const quantity = document.querySelector("input[name=quantity]").value;
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              console.log("success");
            } 
            else {
              console.log(xmlhttp.statusText)
            }
          }
          xmlhttp.open("POST", "action/conf_cart.php");
          xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xmlhttp.send("product_id="+product_id+"&quantity="+quantity+"&add=1&page="+page);
      }
  }

  function removeCart( product_id ) {
    if( !product_id ) {
        console.log("not found product_id")
    } 
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText)
          } 
          else {
            console.log(xmlhttp.statusText)
          }
        }
        xmlhttp.open("POST", "./action/conf_cart.php");
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("product_id="+product_id+"&delete=1");
    }
  }

}