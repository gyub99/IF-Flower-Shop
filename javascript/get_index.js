function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function linking(m){
    location.href="product_detail.php?index="+m;
  }

  function linking_basket(m){
    location.href="shopping basket.php?index="+m;
  }

  function linking_buy(m){
    location.href="order.php?index="+m;
  }
