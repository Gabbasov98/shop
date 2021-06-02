function sliderMain() {
    var swiper = new Swiper('.main .swiper-container', {
        speed: 800,
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        navigation: {
            nextEl: '.main .swiper-button-next',
            prevEl: '.main .swiper-button-prev',
        },
        pagination: {
            el: ".main .swiper-pagination",
            // dynamicBullets: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 15,
            },

            992: {
                slidesPerView: 1,
                spaceBetween: 50,
            },
        }
    })
}

function sliderNew() {
    var swiper = new Swiper('.new .swiper-container', {
        speed: 800,
        slidesPerView: 5,
        spaceBetween: 0,
        navigation: {
            nextEl: '.new .swiper-button-next',
            prevEl: '.new .swiper-button-prev',
        },

        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 0,
                loop: true,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
                loop: true,
            },

            992: {
                slidesPerView: 4,
                spaceBetween: 0,
                loop: false,
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 0,
            },
        }
    })
}

function sliderNew2() {
    var swiper = new Swiper('.catalog-list .new .swiper-container', {
        speed: 800,
        slidesPerView: 5,
        spaceBetween: 0,
        navigation: {
            nextEl: '.catalog-list .new .swiper-button-next',
            prevEl: '.catalog-list .new .swiper-button-prev',
        },

        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 0,
                loop: true,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
                loop: true,
            },

            992: {
                slidesPerView: 3,
                spaceBetween: 0,
                loop: false,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 0,
            },
        }
    })
}


$(document).ready(function() {
    sliderMain()
    sliderNew()
    sliderNew2()


    // Выбор опции поиска
    $('.search__select').niceSelect()
    $('.sale__nav-sort select').niceSelect()
    $('.sale__nav-sort--mob select').niceSelect()



    // Реализация табов в галлерее
    const tabsBtn = $(".about .tabs__item");
    const tabsContent = $(".about .tabs__content");

    const tabsBtn2 = $(".catalog-detail .tabs__item");
    const tabsContent2 = $(".catalog-detail .tabs__content");

    $(".about .tabs__item").click(function() {
        let tabsPath = $(this).attr("data-tabs-path");

        tabsHandler(tabsPath);
        console.log("dsdf")
    })

    $(".catalog-detail .tabs__item").click(function(e) {
        let tabsPath = $(this).attr("data-tabs-path");
        tabsHandler2(tabsPath);

    })

    $(".tabs__btn--next").click(function() {
        let tabsItemPath = $(".about .tabs__item--active").attr("data-tabs-path");
        tabsItemPath = Number.parseInt(tabsItemPath);

        $(".about .tabs__item--active").removeClass("tabs__item--active")
        $(".about .tabs__content--active").removeClass("tabs__content--active")
        if (tabsItemPath === tabsBtn.length) {
            $(`.about .tabs__item[data-tabs-path=${1}]`).addClass("tabs__item--active")
            $(`.about .tabs__content[data-tabs-target=${1}]`).addClass("tabs__content--active")
        } else {

            $(`.about .tabs__item[data-tabs-path=${ tabsItemPath +1 }]`).addClass("tabs__item--active")
            $(`.about .tabs__content[data-tabs-target=${ tabsItemPath +1  }]`).addClass("tabs__content--active")
        }
    })

    $("about .tabs__btn--prev").click(function() {
        let tabsItemPath = $("about .tabs__item--active").attr("data-tabs-path");
        tabsItemPath = Number.parseInt(tabsItemPath);

        $("about .tabs__item--active").removeClass("tabs__item--active")
        $("about .tabs__content--active").removeClass("tabs__content--active")
        if (tabsItemPath === 1) {
            $(`about .tabs__item[data-tabs-path=${tabsBtn.length}]`).addClass("tabs__item--active")
            $(`about .tabs__content[data-tabs-target=${tabsBtn.length}]`).addClass("tabs__content--active")
        } else {

            $(`about .tabs__item[data-tabs-path=${ tabsItemPath -1 }]`).addClass("tabs__item--active")
            $(`about .tabs__content[data-tabs-target=${ tabsItemPath -1  }]`).addClass("tabs__content--active")
        }
    })


    function tabsHandler2(path) {
        $.each(tabsBtn2, function(index, value) {
            $(value).removeClass("tabs__item--active")
            $(`.catalog-detail .tabs__item[data-tabs-path=${ path }]`).addClass("tabs__item--active")
        })

        $.each(tabsContent2, function(index, value) {
            $(value).removeClass("tabs__content--active")
            $(`.catalog-detail .tabs__content[data-tabs-target=${ path }]`).addClass("tabs__content--active")
        })
    }

    function tabsHandler(path) {

        $.each(tabsBtn, function(index, value) {
            $(value).removeClass("tabs__item--active")
            $(`.about .tabs__item[data-tabs-path=${ path }]`).addClass("tabs__item--active")
        })

        $.each(tabsContent, function(index, value) {
            $(value).removeClass("tabs__content--active")
            $(`.about .tabs__content[data-tabs-target=${ path }]`).addClass("tabs__content--active")
        })
    }

    // Переключение способов доставки
    let radio = $("input[name='delivery']");

    $("input[name='delivery']").change(function() {
        deliveriRadioChange()
    })

    function deliveriRadioChange() {
        $("input[name='delivery']").parents(".order__delivery-item").removeClass("order__delivery-item--checked")
        $("input[name='delivery']:checked").parents(".order__delivery-item").addClass("order__delivery-item--checked")
        let radioValue = $("input[name='delivery']:checked").val();
        $(".order__option").removeClass("order__option--active")
        $(`.order__option[data-tabs-target="${radioValue}"`).addClass("order__option--active")
    }
    $(".order__delivery-item").click(function() {
        $(this).children("label").children("input[name='delivery']").prop("checked", true)
        deliveriRadioChange()
    })
    $(".order__pay-input").click(function() {
        $(this).children("label").children("input").prop("checked", true)
    })


    $.fn.setCursorPosition = function(pos) {
        this.each(function(index, elem) {
            if (elem.setSelectionRange) {
                elem.setSelectionRange(pos, pos);
            } else if (elem.createTextRange) {
                var range = elem.createTextRange();
                range.collapse(true);
                range.moveEnd('character', pos);
                range.moveStart('character', pos);
                range.select();
            }
        });
        return this;
    };
    $(".order__phone input").click(function() {
        $(".order__phone input").setCursorPosition(3)
    }).mask("+7 (999) 999-99-99")



    $(".catalog-menu__show").click(function() {
        $(this).toggleClass("catalog-menu__show--active")
        $(this).siblings(".catalog-menu__hidden").slideToggle(400);
    })

    $(".catalog-list__param-show").click(function() {
        console.log("sff")
            // $(".catalog-list__param-hidden").hide();
        $(this).siblings(".catalog-list__param-hidden").slideToggle();
        $(this).toggleClass("catalog-list__param-show--active")
    })


    // Табы в детальном просмотре товара
    $(".catalog-detail__tabs .tabs__item").click(function() {
        let path = $(this).attr("data-tabs-path");
        $(".catalog-detail__tabs .tabs__item").removeClass("tabs__item--active")
        $(this).addClass("tabs__item--active");
        $(".catalog-detail__tabs .tabs__content").removeClass("tabs__content--active");
        $(`.catalog-detail__tabs .tabs__content[data-tabs-target="${path}"]`).addClass("tabs__content--active");
    })


    // Меню в шапке
    $(".header__open-menu").click(function() {
        $(this).toggleClass("header__open-menu--active");
        $(".header__menu").toggleClass("header__menu--active");
        $(".header__open-info").removeClass("header__open-info--active");
        $(".header__nav").removeClass("header__nav--active");
    })
    $(".header__open-info").click(function() {
        $(this).toggleClass("header__open-info--active");
        $(".header__nav").toggleClass("header__nav--active");
        $(".header__open-menu").removeClass("header__open-menu--active");
        $(".header__menu").removeClass("header__menu--active");
    })

    $(".header__menu-title").click(function() {

        if ($(window).width() < 768) {
            $(this).toggleClass("header__menu-title--active");
            $(this).parent(".header__menu-col").children(".header__menu-item").toggleClass("header__menu-item--active");
        }
    })

})