;(function () {

    'use strict';

    /**
     * подсвечивание последнего элемента (точки)
     * @type {jQuery}
     */
    var str = $('#fh5co-logo a').text();
    str = str.slice(0, -1) + '<span>'+ str.substr(-1) +'</span>';
    $('#fh5co-logo a').html(str)

}());