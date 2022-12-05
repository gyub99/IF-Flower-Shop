function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function linking(m){
    location.href="product_detail.html?index="+m;
  }

  function linking_basket(m){
    location.href="shopping basket.html?index="+m;
  }

  function linking_buy(m){
    location.href="order.html?index="+m;
  }
