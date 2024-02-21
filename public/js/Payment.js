function buyNow() {
    var name = document.getElementById("name");
    var price = document.getElementById("price");

    console.log(price);
    
    

  
    var form = new FormData();
    // form.append("name", name.innerHTML);
    form.append("price", price.innerHTML);
  
    // var xhr = new XMLHttpRequest();
    // xhr.open("POST", "Payment.php", true);
    // xhr.onreadystatechange = function () {
    //   if (xhr.status === 200 && xhr.readyState === 4) {
    //     var data = JSON.parse(xhr.responseText);

    
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "Payment/index", true); // Adjust the URL path as needed
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
             console.log(xhr.responseText);
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    try {
                        var data = JSON.parse(xhr.responseText);
                        console.log(data); // Output the parsed JSON data
                        // Access payment details from the 'data' object
                        var order_id = data.order_id;
                        var merchant_id = data.merchant_id;
                        var name = data.name;
                        var price = data.price;
                        var currency = data.currency;
                        var hash = data.hash;
                        // Further processing with payment details...
                    } catch (error) {
                        console.error("Error parsing JSON: " + error.message);
                    }
                } else {
                    console.error("XHR request failed with status: " + xhr.status);
                }
            
        // Adjust the POST parameters as needed
        var params = "name=John&price=100";
        
    
    

  
        // Payment completed. It can be a successful failure.
        payhere.onCompleted = function onCompleted(orderId) {
          console.log("Payment completed. OrderID:" + orderId);
          // Note: validate the payment and show success or failure page to the customer
        };
  
        // Payment window closed
        payhere.onDismissed = function onDismissed() {
          // Note: Prompt user to pay again or show an error page
          console.log("Payment dismissed");
        };
  
        // Error occurred
        payhere.onError = function onError(error) {
          // Note: show an error page
          console.log("Error:" + error);
        };
    // Put the payment variables here
    var payment = {
        sandbox: true,
        merchant_id: data.merchant_id, // Replace your Merchant ID
        return_url: undefined, // Important
        cancel_url: undefined, // Important
        notify_url: "http://sample.com/notify",
        order_id: data.order_id,
        items: data.name,
        amount: data.price,
        currency: data.currency,
        hash: data.hash, // *Replace with generated hash retrieved from backend
        first_name: "Saman",
        last_name: "Perera",
        email: "samanp@gmail.com",
        phone: "0771234567",
        address: "No.1, Galle Road",
        city: "Colombo",
        country: "Sri Lanka",
      };

      // Show the payhere.js popup, when "PayHere Pay" is clicked
      payhere.startPayment(payment);
    }
  };
  xhr.send(form);
}
