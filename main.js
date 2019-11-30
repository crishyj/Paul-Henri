$(document).ready(function() {
    $(function() {
        $('.selectpicker').selectpicker();
    });

    var lang = "en";
    $(".lang").each(function(index, element) {
        $(this).text(arrLang[lang][$(this).attr("key")]);
    });
    $('.input-group.date').datepicker({ format: "yyyy-mm-dd" });
    $('.input-group.date').datepicker({ format: "yyyy-mm-dd" });
    $('.boitier').val(localStorage.getItem('boitier'));
    $('.email1').val(localStorage.getItem('email'));
})


$(".translate").change(function() {
    var lang = $(this).children("option:selected").val();
    $(".lang").each(function(index, element) {
        $(this).text(arrLang[lang][$(this).attr("key")]);
    });
});