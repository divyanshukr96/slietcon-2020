$(document).ready(function () {
    let url = window.location.href;
    let origin = window.location.origin;
    let path = url.replace(origin, '');
    path = path.replace(/\/+/g, '/');


    let side_nav = $(".sidebar-nav a[href$='" + path + "']");
    if (side_nav.length) {
        side_nav.closest("li").addClass('active');
        if (side_nav.closest(".dropdown-menu").length) {
            side_nav.css('color', '#16181b');
        }
    }
    const notice = $('#notice');
    if (!sessionStorage.getItem('notice')) {
        notice.modal('show')
    }
    notice.on('hidden.bs.modal', function (e) {
        sessionStorage.setItem('notice', 'true')
    });

    const notice_ame = $('#notice_ame');
    if (!sessionStorage.getItem('notice_ame')) {
        notice_ame.modal('show')
    }
    notice_ame.on('hidden.bs.modal', function (e) {
        sessionStorage.setItem('notice_ame', 'true')
    });

    const notice_aisct = $('#notice_aisct');
    if (!sessionStorage.getItem('notice_aisct')) {
        notice_aisct.modal('show')
    }
    notice_aisct.on('hidden.bs.modal', function (e) {
        sessionStorage.setItem('notice_aisct', 'true')
    })

    const notice_acfbt = $('#notice_acfbt');
    if (!sessionStorage.getItem('notice_acfbt')) {
        notice_acfbt.modal('show')
    }
    notice_acfbt.on('hidden.bs.modal', function (e) {
        sessionStorage.setItem('notice_acfbt', 'true')
    });

});


$('body').scroll(function () {
    // const top = $('body').scrollTop() > 80;
    scrollTop($('body').scrollTop() > 80)
});
$(window).scroll(function () {
    // const top = $('body').scrollTop() > 80;
    scrollTop($(window).scrollTop() > 80)
});

function scrollTop(scroll) {
    if (scroll) {
        $('.navbar').removeClass('transparent');
    } else {
        $('.navbar').addClass('transparent');
    }
}


//
// $('body').scroll(function () {
//     const scrollTop = $('body').scrollTop() > 80;
//     let hasShow = $('.navbar-collapse.collapse').hasClass('show');
//     if (scrollTop) {
//         $('.navbar').removeClass('transparent');
//     } else {
//         if (!hasShow) {
//             $('.navbar').addClass('transparent');
//         }
//     }
// });
// $('.navbar-toggler').on('click', function () {
//     let hasShow = $('.navbar-collapse.collapse').hasClass('show');
//     const scrollTop = $('body').scrollTop() > 80;
//     if (!hasShow) {
//         $('.navbar').removeClass('transparent');
//     } else {
//         if (!hasShow) {
//             $('.navbar').addClass('transparent');
//         } else if (!scrollTop) {
//             $('.navbar').addClass('transparent');
//         }
//     }
// });
