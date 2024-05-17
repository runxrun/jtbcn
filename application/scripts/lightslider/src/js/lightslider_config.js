
$(document).ready(function() {
    $("#promotion-slider").lightSlider({
        loop:true,
        keyPress:true,
		item:5,
		pause: 5000,
        speed:600,
        auto:true,
        controls: false,
        slideMargin: 24,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        responsive : [
            {
                breakpoint: 1200,
                settings: {
                    item:3,
                    slideMove:1,
        			slideMargin: 24,
                  }
            },
            {
                breakpoint: 820,
                settings: {
                    item:2,
                    slideMove:1,
        			slideMargin: 24,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });

    $("#recommend-activities-slider").lightSlider({
        loop:true,
        keyPress:true,
		item:4,
		pause:5000,
        speed:600,
        auto:true,
        controls: false,
        slideMargin: 16,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        responsive : [
            {
                breakpoint: 1200,
                settings: {
                    item:3,
                    slideMove:1,
        			slideMargin: 16,
                  }
            },
            {
                breakpoint: 820,
                settings: {
                    item:2,
                    slideMove:1,
        			slideMargin: 16,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });

    
    $("#recommend-packages-slider").lightSlider({
        loop:true,
        keyPress:true,
		item:4,
		pause:5000,
        speed:600,
        auto:true,
        controls: false,
        slideMargin: 16,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        responsive : [
            {
                breakpoint: 1200,
                settings: {
                    item:3,
                    slideMove:1,
        			slideMargin: 16,
                  }
            },
            {
                breakpoint: 820,
                settings: {
                    item:2,
                    slideMove:1,
        			slideMargin: 16,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });

    
    $("#recommend-tickets-slider").lightSlider({
        loop:true,
        keyPress:true,
		item:4,
		pause:5000,
        speed:600,
        auto:true,
        controls: false,
        slideMargin: 16,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        responsive : [
            {
                breakpoint: 1200,
                settings: {
                    item:3,
                    slideMove:1,
        			slideMargin: 16,
                  }
            },
            {
                breakpoint: 820,
                settings: {
                    item:2,
                    slideMove:1,
        			slideMargin: 16,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });

    $("#recommend-hotels-slider").lightSlider({
        loop:true,
        keyPress:true,
		item:4,
		pause:5000,
        speed:600,
        auto:true,
        controls: false,
        slideMargin: 16,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        responsive : [
            {
                breakpoint: 1200,
                settings: {
                    item:3,
                    slideMove:1,
        			slideMargin: 16,
                  }
            },
            {
                breakpoint: 820,
                settings: {
                    item:2,
                    slideMove:1,
        			slideMargin: 16,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });

    $("#blog-slider").lightSlider({
        loop:true,
        keyPress:true,
		item:4,
		pause:5000,
        speed:600,
        auto:true,
        controls: false,
        slideMargin: 16,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        responsive : [
            {
                breakpoint: 1200,
                settings: {
                    item:3,
                    slideMove:1,
        			slideMargin: 16,
                  }
            },
            {
                breakpoint: 820,
                settings: {
                    item:2,
                    slideMove:1,
        			slideMargin: 16,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });
});
