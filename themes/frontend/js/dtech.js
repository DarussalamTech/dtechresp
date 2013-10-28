var dtech = {
    /**
     * services will be loaded
     * here on every cricle click
     * @param {type} obj
     * @param {type} service
     * @param {type} ajax_url
     * @returns {undefined}
     */
    closeServiceflag: '',
    loadServices: function(obj, service, ajax_url) {
        $("body").children().eq(0).show();


        elem_id = service.replace("_", "");
        jQuery("#services").hide();
        jQuery("#service_position").hide();

        html_loaded = "<div id='" + elem_id + "'>";
        html_loaded += $("#loaded_servces #" + elem_id).html();
        html_loaded += "</div>";
        jQuery("#service_position").html(html_loaded)

        $(window).ready(function() {
            jQuery("#service_position #" + elem_id + " .left_side_move").hide();
            jQuery("#service_position #" + elem_id + " .right_side_move").hide();

            if (jQuery("#service_position #" + elem_id + " .ballons_img").length > 0) {
                jQuery("#service_position #" + elem_id + " .ballons_img").hide();
            }

            jQuery("#service_position").fadeIn('slow');

            dtech.scrolltoSection("service_position");


            setTimeout(function() {

                $("body").children().eq(0).hide();



                dtech.moveFromLeft(jQuery("#service_position #" + elem_id + " .left_side_move"));
                dtech.moveFromRight(jQuery("#service_position #" + elem_id + " .right_side_move"));

                if (jQuery("#service_position #" + elem_id + " .ballons_img").length > 0) {
                    dtech.moveFromBottom(jQuery("#service_position #" + elem_id + " .ballons_img"));
                }

            }, 800)
        })

    },
    /**
     * load all servies on runtime
     * 
     */
    loadServiceOnready: function(obj, service, ajax_url) {
        jQuery.ajax({
            type: "GET",
            url: ajax_url,
            async: false,
            data:
                    {
                        ajax: 1,
                        view: service,
                    }
        }).done(function(response) {

            elem_id = service.replace("_", "");


            jQuery("#loaded_servces").append(response)

        });
    },
    /**
     *  close service of 
     *  cross sign
     * @param {type} obj
     * @returns {undefined}
     */
    closeService: function(obj) {
        jQuery("#service_position").html("");
        jQuery("#service_position").hide();
        jQuery("#services").fadeIn();

    },
    /**
     * hover and un hover of portfolio 
     * images
     * @returns {undefined}
     */
    portFolowImage: function() {
//        $(".port_images a img").hover(function() {
//            $(this).attr("src", $(this).attr("hover"));
//        }, function() {
//            $(this).attr("src", $(this).attr("unhover_image"));
//        });

    },
    /**
     * hover and un hover of cirlce 
     * images
     * @returns {undefined}
     */
    cirlceImages: function() {
        $(".cirlce a img").hover(function() {
            $(this).attr("src", $(this).attr("hover"));
        }, function() {
            $(this).attr("src", $(this).attr("unhover_image"));
        });

    },

    /**
     * hover and un hover of socialImages 
     * images
     * @returns {undefined}
     */
    socialImages: function() {
        $(".social_media_images a img").hover(function() {
            $(this).attr("src", $(this).attr("hover"));
        }, function() {
            $(this).attr("src", $(this).attr("un-hover"));
        });

    },
    /**
     * will take to top of the page
     * @returns 
     */
    scrolltoTopOfPage: function() {
        $("html, body").animate({scrollTop: 0}, "slow");

    },
    /**
     * section will be loaded 
     * when click on these
     * @param {type} section_id
     * @returns 
     */
    scrolltoSection: function(section_id) {

        $('html, body').animate({
            scrollTop: $("#" + section_id).offset().top - 67
			//scrollTop: $("#" + section_id).offset().top 
        }, 1000, 'easeInOutExpo');
    },
    /**
     *  show pagination elem id
     *  
     * @param {type} hide_elme_id
     * @param {type} show_elme
     * @returns {undefined}
     */
    showAboutUs: function(first_abt, second_abt, obj) {

        if (jQuery(obj).attr("id") == "right_a_image") {
            if (jQuery("#" + first_abt).is(":visible")) {
                jQuery("#" + first_abt).hide();
                setTimeout(function() {
                    dtech.moveFromRight(jQuery("#" + second_abt));
                }, 1000)
            }

            jQuery("#right_a_image").removeClass("hover_page");
            jQuery("#left_a_image").addClass("hover_page");
           

        }
        else if (jQuery(obj).attr("id") == "left_a_image") {
            if (jQuery("#" + second_abt).is(":visible")) {
                jQuery("#" + second_abt).hide();
                setTimeout(function() {
                    dtech.moveFromRight(jQuery("#" + first_abt));
                }, 1000)
            }

            jQuery("#left_a_image").removeClass("hover_page");
            jQuery("#right_a_image").addClass("hover_page");
           
        }

    },
    /**
     * register scrolll using pluggin
     * @returns {undefined}
     */
    registerScrollUsingPluggin: function() {
        jQuery('#nav').onePageNav({
            begin: function() {
                //console.log('start')
                obj = jQuery(this);
                elem_id = obj[0]['currentId'];

                if (jQuery(elem_id + " .left_part").length > 0) {
                    jQuery(elem_id + " .left_part").hide();
                }
                if (jQuery(elem_id + " .right_part").length > 0) {
                    jQuery(elem_id + " .right_part").hide();
                }
                if (jQuery(elem_id + " .cirlce").length > 0) {

                    $(".cirlce:first-child").hide();
                    $(".cirlce:nth-child(2)").hide();
                    $(".cirlce:nth-child(3)").hide();
                    $(".cirlce:nth-child(4)").hide();

                    $(".cirlce:first-child").removeClass("cirlce2");
                    $(".cirlce:nth-child(2)").removeClass("cirlce2");
                    $(".cirlce:nth-child(3)").removeClass("cirlce2");
                    $(".cirlce:nth-child(4)").removeClass("cirlce2");
                }

                if (jQuery(elem_id + " .port_images").length > 0) {
                    /*
                    jQuery(elem_id + " .port_images a:nth-child(1)").hide();
                    jQuery(elem_id + " .port_images a:nth-child(2)").hide();
                    jQuery(elem_id + " .port_images a:nth-child(3)").hide();
                    jQuery(elem_id + " .port_images a:nth-child(4)").hide();
                    jQuery(elem_id + " .port_images a:nth-child(5)").hide();
                    jQuery(elem_id + " .port_images a:nth-child(6)").hide();
                    jQuery(elem_id + " .port_images a:nth-child(7)").hide();
                    jQuery(elem_id + " .port_images a:nth-child(8)").hide();


                    jQuery(elem_id + " .port_images a:nth-child(1)").removeClass("scale_image");
                    jQuery(elem_id + " .port_images a:nth-child(2)").removeClass("scale_image");
                    jQuery(elem_id + " .port_images a:nth-child(3)").removeClass("scale_image");
                    jQuery(elem_id + " .port_images a:nth-child(4)").removeClass("scale_image");
                    jQuery(elem_id + " .port_images a:nth-child(5)").removeClass("scale_image");
                    jQuery(elem_id + " .port_images a:nth-child(6)").removeClass("scale_image");
                    jQuery(elem_id + " .port_images a:nth-child(7)").removeClass("scale_image");
                    jQuery(elem_id + " .port_images a:nth-child(8)").removeClass("scale_image");
                    */

                }

            },
            end: function() {

                obj = jQuery(this);
                elem_id = obj[0]['currentId'];

                if (jQuery(elem_id + " .left_part").length > 0) {
                    dtech.moveFromLeft(jQuery(elem_id + " .left_part"));
                }
                if (jQuery(elem_id + " .right_part").length > 0) {

                    dtech.moveFromRight(jQuery(elem_id + " .right_part"));
                }
                if (jQuery(elem_id + " .cirlce").length > 0) {
                    //  $(".cirlce:first-child").show()
                    //$(".cirlce:first-child").slideDown(2500);

                    //$(".cirlce:first-child").animate({backgroundPosition : '-=2px'}, 20, 'linear');
                    dtech.moveFromBottomTimeOut($(".cirlce:first-child"), "cirlce2");
                    dtech.moveFromLeftTimeOut($(".cirlce:nth-child(2)"), "cirlce2");
                    dtech.moveFromBottomTimeOut($(".cirlce:nth-child(3)"), "cirlce2");
                    dtech.moveFromLeftTimeOut($(".cirlce:nth-child(4)"), "cirlce2");
                }
                if (jQuery(elem_id + " .port_images").length > 0) {

                    /*
                    dtech.moveFromTopTimeOut(jQuery(elem_id + " .port_images a:nth-child(1)"), "scale_image");
                    dtech.moveFromTopTimeOut(jQuery(elem_id + " .port_images a:nth-child(2)"), "scale_image");
                    dtech.moveFromTopTimeOut(jQuery(elem_id + " .port_images a:nth-child(3)"), "scale_image");
                    dtech.moveFromTopTimeOut(jQuery(elem_id + " .port_images a:nth-child(4)"), "scale_image");

                    dtech.moveFromBottomTimeOut(jQuery(elem_id + " .port_images a:nth-child(5)"), "scale_image");
                    dtech.moveFromBottomTimeOut(jQuery(elem_id + " .port_images a:nth-child(6)"), "scale_image");
                    dtech.moveFromBottomTimeOut(jQuery(elem_id + " .port_images a:nth-child(7)"), "scale_image");
                    dtech.moveFromBottomTimeOut(jQuery(elem_id + " .port_images a:nth-child(8)"), "scale_image");
                    */
                }

            }
        });
    },
    moveFromLeft: function(elem) {
        jQuery(elem).show('slide', {direction: 'left'}, 1500, '');
    },
    moveFromBottom: function(elem) {
        jQuery(elem).show('slide', {direction: 'down'}, 1500, '');
    },
    moveFromLeftTimeOut: function(elem, css_class) {
        setTimeout(function() {
            jQuery(elem).show('slide',
                    {
                        direction: 'right', complete: function() {
                            jQuery(elem).addClass(css_class);
                        }

                    }, 1500, '', function() {

            });


        }, 1000);
    },
    moveFromTopTimeOut: function(elem, css_class) {
        setTimeout(function() {
            jQuery(elem).show('slide',
                    {
                        direction: 'up', complete: function() {
                            jQuery(elem).addClass(css_class);
                        }

                    }, 1500, '', function() {

            });


        }, 1000);
    },
    moveFromBottomTimeOut: function(elem, css_class) {

        setTimeout(function() {
            jQuery(elem).show('slide', {direction: 'down',
                complete: function() {
                    jQuery(elem).addClass(css_class);
                }
            }, 1500, '');

        }, 1000);
    },
    moveFromRight: function(elem) {
        jQuery(elem).show('slide', {direction: 'right'}, 1500, '');

    },
    closeServiceOnlick: function() {

        jQuery('#service_position').hover(function() {
            dtech.closeServiceflag = false;
        }, function() {
            dtech.closeServiceflag = true;
        });

        jQuery("body").click(function() {
            if (dtech.closeServiceflag) {

                jQuery("#service_position").html("");
                jQuery("#service_position").hide();
                jQuery("#services").fadeIn();
                dtech.closeServiceflag = false;

            }
        })
    }


}