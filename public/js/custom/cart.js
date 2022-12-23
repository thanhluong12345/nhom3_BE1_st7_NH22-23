

if (typeof window !== 'undefined') {
    
  function addToCart( product_id ) {
      if( !product_id ) {
          console.log("not found "+ !product_id?"product_id":"")
      } 
      else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fetch("api/cart_popup.php", {
                  method: "get",
                  mode: "cors",
                  headers: {
                    "Content-Type": "application/json"
                  }
                })
                .then(function(response) {
                  if(!response.ok) {
                    throw Error(response.statusText)
                  }
                  return response.json()
                })
                .then(function(result) {
                  console.log(result.html)
                  document.querySelector("#mini-cart-wrapper-popup").innerHTML = result.html;
                  document.querySelector("#mini-cart-trigger .item-counter").innerHTML = result.number
                  document.querySelector("#mini-cart-trigger .item-price").innerHTML = result.total_price + " VND"

                  $('#mini-cart-close').on('click', function () {
                    $('.mini-cart-wrapper').removeClass('mini-cart-open');
                  });

                  Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Thêm vào giỏ hàng thành công',
                    showConfirmButton: false,
                    timer: 500
                  })

                })
                .catch(function(error) {
                  console.log('Error nhé: \n', error )
                })
            } 
            else {
              console.log(xmlhttp.statusText)
            }
          }
          let quantity = document.querySelector("input[name=quantity]");
          quantity = quantity==undefined ? 1 : quantity.value
          xmlhttp.open("POST", "action/conf_cart.php");
          xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xmlhttp.send("product_id="+product_id+"&quantity="+quantity+"&add=1");
      }
  }

  function refreshCart( product_id ) {
    if( !product_id ) {
        console.log("not found "+ !product_id?"product_id":"")
    } 
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              fetch("api/cart_popup.php", {
                method: "get",
                mode: "cors",
                headers: {
                  "Content-Type": "application/json"
                }
              })
              .then(function(response) {
                if(!response.ok) {
                  throw Error(response.statusText)
                }
                return response.json()
              })
              .then(function(result) {
                document.querySelector("#mini-cart-wrapper-popup").innerHTML = result.html;
                document.querySelector("#mini-cart-trigger .item-counter").innerHTML = result.number
                document.querySelector("#mini-cart-trigger .item-price").innerHTML = result.total_price + " VND"

                $('#mini-cart-close').on('click', function () {
                  $('.mini-cart-wrapper').removeClass('mini-cart-open');
                });

              })
              .catch(function(error) {
                console.log('Error nhé: \n', error )
              })


              fetch("api/cart_list.php", {
                method: "get",
                mode: "cors",
                headers: {
                  "Content-Type": "application/json"
                }
              })
              .then(function(response) {
                if(!response.ok) {
                  throw Error(response.statusText)
                }
                return response.json()
              })
              .then(function(result) {
                document.querySelector(".cart-list-main").innerHTML = result.html;
                

                let $currentTextField,currentVal;
                $('.plus-a').each(function () {
                    $(this).on('click', function () {
                        let $currentTextField = $(this).prev();
                        let currentVal = parseInt($currentTextField.val());
                        /*
                        * Format values
                        * In JS if variable is not converted to number then by default variable is NaN.
                        * We known JS has Truthy & Falsey values.
                        * By default NaN (e.g. the result of 1/0) is false so its convert to true and expression
                        * becomes true.
                        */
                        if (!currentVal || currentVal === '' || currentVal === 'NaN' || currentVal === 0) {
                            // if value is NaN
                            $currentTextField.val(1);
                        }
                        // Compare and add 1 if the condition is satisfy
                        else if (currentVal < $(this).data('max')) {
                            $currentTextField.val(currentVal + 1);
                        }
                    });
                });
                $('.minus-a').each(function () {
                    $(this).on('click', function () {
                        $currentTextField = $(this).closest('div').find('input');
                        currentVal = parseInt($currentTextField.val());
                        /*
                        * Format values
                        * In JS if variable is not convert to number then by default variable is NaN.
                        * We known JS has Truthy & Falsey values.
                        * By default NaN (e.g. the result of 1/0) is false so its convert to true and expression
                        * becomes true.
                        */
                        if (!currentVal || currentVal === '' || currentVal === 'NaN' || currentVal === 0) {
                            // if value is NaN
                            $currentTextField.val(1);
                        }
                        // Compare and minus 1 if the condition is satisfy
                        else if (currentVal > $(this).data('min')) {
                            $currentTextField.val(currentVal - 1);
                        }
                    });
                });
              })
              .catch(function(error) {
                console.log('Error nhé: \n', error )
              })
          } 
          else {
            console.log(xmlhttp.statusText)
          }
        }
        let quantity = document.querySelector("input[name=quantity"+product_id+"]");
        quantity = quantity==undefined ? 1 : quantity.value
        xmlhttp.open("POST", "action/conf_cart.php");
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("product_id="+product_id+"&quantity="+quantity+"&refresh=1");

        console.log(quantity)

        Swal.fire({
          position: 'top-center',
          icon: 'success',
          title: 'Làm mới giỏ hàng thành công',
          showConfirmButton: false,
          timer: 600
        })
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
            fetch("api/cart_list.php", {
              method: "get",
              mode: "cors",
              headers: {
                "Content-Type": "application/json"
              }
            })
            .then(function(response) {
              if(!response.ok) {
                throw Error(response.statusText)
              }
              return response.json()
            })
            .then(function(result) {
              console.log(result.html)
              document.querySelector(".cart-list-main").innerHTML = result.html;

              Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Xóa thành công',
                showConfirmButton: false,
                timer: 500
              })

              let $currentTextField,currentVal;
                $('.plus-a').each(function () {
                    $(this).on('click', function () {
                        let $currentTextField = $(this).prev();
                        let currentVal = parseInt($currentTextField.val());
                        /*
                        * Format values
                        * In JS if variable is not converted to number then by default variable is NaN.
                        * We known JS has Truthy & Falsey values.
                        * By default NaN (e.g. the result of 1/0) is false so its convert to true and expression
                        * becomes true.
                        */
                        if (!currentVal || currentVal === '' || currentVal === 'NaN' || currentVal === 0) {
                            // if value is NaN
                            $currentTextField.val(1);
                        }
                        // Compare and add 1 if the condition is satisfy
                        else if (currentVal < $(this).data('max')) {
                            $currentTextField.val(currentVal + 1);
                        }
                    });
                });
                $('.minus-a').each(function () {
                    $(this).on('click', function () {
                        $currentTextField = $(this).closest('div').find('input');
                        currentVal = parseInt($currentTextField.val());
                        /*
                        * Format values
                        * In JS if variable is not convert to number then by default variable is NaN.
                        * We known JS has Truthy & Falsey values.
                        * By default NaN (e.g. the result of 1/0) is false so its convert to true and expression
                        * becomes true.
                        */
                        if (!currentVal || currentVal === '' || currentVal === 'NaN' || currentVal === 0) {
                            // if value is NaN
                            $currentTextField.val(1);
                        }
                        // Compare and minus 1 if the condition is satisfy
                        else if (currentVal > $(this).data('min')) {
                            $currentTextField.val(currentVal - 1);
                        }
                    });
                });

            })
            .catch(function(error) {
              console.log('Error nhé: \n', error )
            })


            fetch("api/cart_popup.php", {
              method: "get",
              mode: "cors",
              headers: {
                "Content-Type": "application/json"
              }
            })
            .then(function(response) {
              if(!response.ok) {
                throw Error(response.statusText)
              }
              return response.json()
            })
            .then(function(result) {
              document.querySelector("#mini-cart-wrapper-popup").innerHTML = result.html;
              document.querySelector("#mini-cart-trigger .item-counter").innerHTML = result.number
              document.querySelector("#mini-cart-trigger .item-price").innerHTML = result.total_price + " VND"

              $('#mini-cart-close').on('click', function () {
                $('.mini-cart-wrapper').removeClass('mini-cart-open');
              });

            })
            .catch(function(error) {
              console.log('Error nhé: \n', error )
            })
            
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