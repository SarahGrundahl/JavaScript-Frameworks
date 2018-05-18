Alert: {
    function myFunction() {
        var txt;
        var person = prompt("Indtast venligt dit navn:", "Harry Potter");

        if (person == null || person == "") {
            txt = "Bruger annulerede.";
        } else {
            txt = "Hej " + person + "! Hvordan har du det idag? :D";
        }
        $("#demo").html(txt);
    }
}