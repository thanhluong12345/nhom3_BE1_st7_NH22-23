

if (typeof window !== 'undefined') {
    
    function addToCart( product_id, quantity ) {
        if( !product_id || !quantity ) {
            alert("error")
        } 
        else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText)
              } 
              else {
                alert("error")
              }
            }
            xmlhttp.open("POST", "./conf_cart.php");
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("product_id="+product_id+"&quantity="+quantity+"&add=1");
        }
    }

}