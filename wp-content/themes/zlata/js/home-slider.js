var homeSlider = function () {
    this.size = 0;
    this.selector = '#home-slider';
    this.$slider = $(this.selector);
    this.index = 0;
    this.interval = 3000;
    this.intID;

    this.init();
};
homeSlider.prototype = {
    init: function () {
        var _this = this;
        this.size = $('.slide', this.$slider).size();

        for (var i = 0; i < this.size; i++) {
            $('.slider-dots', this.$slider).append('<li></li>');
        }

        this.setActive();

        this.start();

        $('.slider-dots li', this.$slider).click(function (e) {
            e.preventDefault();
            _this.stop();
            _this.setActive($(this).index());
            _this.start();
        });
    },
    next: function () {
        this.index++;
        if (this.index >= this.size) {
            this.index = 0;
        }
        this.setActive();
    },
    prev: function () {
        this.index--;
        if (this.index < 0) {
            this.index = this.size - 1;
        }
        this.setActive();
    },
    setActive: function (index) {
        this.index = index == 0 || index ? index : this.index;
        $('.slide', this.$slider).removeClass('active');
        $('.slide', this.$slider).eq(this.index).addClass('active');
        $('.slider-dots li', this.$slider).removeClass('active');
        $('.slider-dots li', this.$slider).eq(this.index).addClass('active');
    },
    start: function () {
        var _this = this;
        if (!this.intID) {
            this.intID = setInterval(function () {
                _this.next();
            }, this.interval);
        }
    },
    stop: function () {
        if (this.intID) {
            clearInterval(this.intID);
            this.intID = null;
        }
    }
};

jQuery(document).ready(function ($) {
    new homeSlider();
});