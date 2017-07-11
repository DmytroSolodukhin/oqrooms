/**
 * Preloader implementation.
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2016, RingCentral, Inc (http://www.ringcentral.com)
 *
 * @version   $Id:$
 */

/**
 * @param element       Preloader element returned by jQuery (e.g. $('#preloader'))
 */
;var Preloader = function(element) {
    "use strict";
    var that    = this;
    // Should preloader appear automatically?
    that.isAuto  = (!!element);

    /**
     * Enables or disables preloader autoappearance.
     *
     * @param {bool} isauto     True if enabled.
     */
    that.auto = function (isauto) {
        that.isAuto = !!element && isauto;
        return that;
    },

    /**
     * Show preloader
     */
    that.show = function () {
        if (!element.hasClass('active')) {
            element.addClass('active');
        }
    },

    /**
     * Hides preloader
     */
    that.hide = function () {
        if (element.hasClass('active')) {
            element.removeClass('active');
        }
    },

    /**
     * Toggles preloader.
     */
    that.toggle = function () {
        if (!!!element) return;
        if (element.hasClass('active')) {
            hide();
        } else {
            show();
        }
    };
}
