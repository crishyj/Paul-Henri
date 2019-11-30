$(document).ready(function() {
    $(function() {
        $('.selectpicker').selectpicker();
    });

    var lang = "en";
    $(".lang").each(function(index, element) {
        $(this).text(arrLang[lang][$(this).attr("key")]);
    });
    
    
    let start_date = new Date();
    
    $('#end').datepicker({ 
        format: "yyyy-mm-dd",
        clearBtn: true,
        startDate:start_date
    });
    
    $('#start').datepicker({ 
        format: "yyyy-mm-dd",
        clearBtn: true,
        startDate: new Date()
    }).on('changeDate', function(e) {
        start_date = e.dates[0];
        $('#end').datepicker('setStartDate', start_date);
    });
    
    
    $('.boitier').val(localStorage.getItem('boitier'));
    $('.email1').val(localStorage.getItem('email'));
    $('.diff').val(localStorage.getItem('diff'));
    let cost = localStorage.getItem('diff') *2;
    $('.cost').text(cost);
    
    
    $("#exp_date").datepicker({
        viewMode: 'years',
		format: 'mm-yyyy'
	});
})


$(".translate").change(function() {
    var lang = $(this).children("option:selected").val();
    $(".lang").each(function(index, element) {
        $(this).text(arrLang[lang][$(this).attr("key")]);
    });
});