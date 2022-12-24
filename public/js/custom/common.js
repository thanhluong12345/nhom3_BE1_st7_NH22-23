if (typeof window !== 'undefined') {

    function addWishlist( product_id ) {
        const url = ("api/add_wishlist.php?"+ new URLSearchParams({product_id: product_id}).toString());
        fetch(url, {
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
          .then( function( result ) {
            let msg = "Thêm vào danh sách yêu thích thành công";
            let icon = result.status == 0 ? "warning" : "success";
            if( result.status == 0 ) {
                msg = "Thất bại!";
                if( result.msg ) {
                    msg = result.msg
                }
            }
            Swal.fire({
                position: 'top-center',
                icon: icon,
                title: msg,
                showConfirmButton: false,
                timer: 1000
            })
          } )
    }

    function removeWishList( product_id, current_page ) {
        const url = ("api/remove_wishlist.php?"+ new URLSearchParams({product_id: product_id, page: current_page}).toString());
        fetch(url, {
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
          .then( function( result ) {
            let msg = "Xóa thành công!";
            let icon = result.status == 0 ? "warning" : "success";
            if( result.status == 0 ) {
                msg = "Thất bại!";
                if( result.msg ) {
                    msg = result.msg
                }
            } else {
              document.querySelector(".wishlist-wrapper").innerHTML = result.html;
            }
            Swal.fire({
                position: 'top-center',
                icon: icon,
                title: msg,
                showConfirmButton: false,
                timer: 500
            })
          } )
    }
}