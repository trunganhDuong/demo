jQuery(document).ready(function() {
	
	"use strict";

    $('.signup-header .close').on('click',function () {
        $('.signup-for-document .minimized').css('display','block');
        $('.signup-for-document .before-minimize').css('display','none');
    });

    $('.signup-for-document .minimized').on('click',function () {
        $('.signup-for-document .minimized').css('display','none');
        $('.signup-for-document .before-minimize').css('display','block');
    });

});