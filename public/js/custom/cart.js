

if (typeof window !== 'undefined') {
    
  function addToCart( product_id, quantity ) {
      if( !product_id || !quantity ) {
          console.log("not found "+ !product_id?"product_id":"quantity")
      } 
      else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              console.log(this.responseText)
              document.open("text/html", "replace");
              document.write(this.responseText);  // htmlCode is the variable you called newDocument
              document.close();
            } 
            else {
              console.log(xmlhttp.statusText)
            }
          }
          xmlhttp.open("POST", "./conf_cart.php");
          xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xmlhttp.send("product_id="+product_id+"&quantity="+quantity+"&add=1");
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
        xmlhttp.open("POST", "./conf_cart.php");
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("product_id="+product_id+"&delete=1");
    }
  }

}