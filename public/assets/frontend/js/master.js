$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ["<img src='/assets/frontend/img/arrow_left.svg' />", "<img src='/assets/frontend/img/arrow_right.svg' />"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 5
        }
    }
})


$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $('.contact-send-button').click(function(){
        var form = $(this).closest('form');
        var url = form.attr('action');
        var data = form.serialize();


        var name = form.find('input[name="namesurname"]').val();
        var email = form.find('input[name="email"]').val();
        var phone = form.find('input[name="phone"]').val();


        if(name == '' || email == '' || phone == ''){
            $('.contact-form-error').text('Please fill all required fields.');
        } else{
            $.post(url, data, function (result) {

                if (result.status == 'success') {
                    window.location.href = 'https://atesconsulting.com/form-tamamlandi';
                }
            });
        }
    })
})
