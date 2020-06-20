function confirm_reset() {
    return confirm("Are you sure you want to reset all text?");
}

function postToGoogle() {
            var field1 ;
            field1= $('#name1').val();
            var field2 ;
            field2= $('#last_name').val();
            var field3 ;
            field3= $('#age').val();
            var field4 ;
            field4= $('#mobile_number').val();
            $.ajax({
                url: "https://docs.google.com/forms/d/e/1FAIpQLSfuVsRGUycVHqQRE6cUleABZ3NZkff9mqLPzEH9zSa6Cu-tSg/formResponse",
                data: {"entry.161527933": field1,"entry.948016940":field2,"entry.532020368": field3,"entry.146821541": field4},
                type: "POST",
                dataType: "xml",
                crossDomain: true,
                dataType: 'jsonp',
                statusCode: {
                    0: function() {
                        alert('sucess');
                    },
                    200: function() {
                        alert('sucess');
                    }
                }
            });
        }
function required1(){
    var empt = document.forms["register"]["Mobile_number"].value;
    var empt2= document.forms["register"]["name1"].value;
   
    if (empt2 == "")
    {
        //alert("Please input name");
        return false;
    } 
     if (empt == "")
    {
        //alert("Please input mobile number");
        return false;
    } 	
    postToGoogle();
    alert("Data Stored");
    return true;
} 