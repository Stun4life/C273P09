$(document).ready(function () {
$("#idCountry").change(function(){
                    var countryType = $(this).val()
                    $.ajax({
                        type:"GET",
                        url:"getCountryDetails.php",
                        data:"id=" + countryType,
                        dataType: "JSON",
                        success: function(response){
                            var message = "<tr><td>" + response[0].population + "</td><td>" + response[0].obese + "</td></tr>";
                            $("#obeseTable tbody").html(message);
                        }
                    })
                })
    
});
