$('#pills-tab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
})

$('#modalidad').on('change', function() {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    console.log(valueSelected, optionSelected);
    if (valueSelected == 4) {
        $('.operador').css('display', 'block');
    } else {
        $('.operador').css('display', 'none');
    }
})

$('#plan').on('change', function() {
    var optionSelected = $("option:selected");
    var valueSelected = this.value;
    // console.log(valueSelected);
    if (optionSelected.hasClass('ilimitado')) {
        $('.ilimitado-text').css('display', 'block');
        $('.limitado-text').css('display', 'none');
    } else {
        $('.ilimitado-text').css('display', 'none');
        $('.limitado-text').css('display', 'block');
    }
})

$(function() {
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });

    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        asNavFor: '.slider-for',
        focusOnSelect: true,
        centerMode: true
    });
});

$('#send').on('click', function() {
    $('#datos').modal('hide');
    $('#gracias').modal('show')
})