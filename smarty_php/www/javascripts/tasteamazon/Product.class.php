Product = {
    helloWorld: function(){
        var hello = "Hello World";
        Admin.rpc.invoke('Product.helloWorld', hello, Product.success, Product.failure);
    },

    success: function(res){
        Admin.notify(res.message, 'center', 'success', 5000);
    }, 

    failure: function(res){
        Admin.notify(res.message, 'center', 'warning', 5000);
    } 
}