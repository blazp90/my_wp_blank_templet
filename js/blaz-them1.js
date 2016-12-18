jQuery(document).ready(function ()
{
    /**
    * Top bar
    */

    //var screen_height

    /**Get the screen height**/
    function get_top_px()
    {
        screen_height = jQuery(document).scrollTop();

        return screen_height;
    }

    function start_height_animation(body_class, new_height)
    {
        jQuery(body_class).animate(
        {
            height: new_height
        }, 500, function ()
        {
            //jQuery(".th-nav-left").css("min-width", "298px");
        });
    }

    /**On screen scroll**/
    jQuery(document).scroll(function ()
    {
        if (jQuery(".th-navi").height() != "100")
        {
            if (get_top_px() > 250)
            {
                start_height_animation(".th-navi", "50px");
                //jQuery(".th-nav-title").css({ "color": "rgba(0, 0, 0, 0.5)" });
                //jQuery(".th-body-pic").css({ "opacity": "0.5", "filter": "alpha(opacity=50)" });
            }
        }

        if (get_top_px() > 410) 
        {
            jQuery(".th-nav-title").css({ "display": "none" });
        } else 
        {
            jQuery(".th-nav-title").css({ "display": "block" });
        }

        if (get_top_px() == 0)
        {
            start_height_animation(".th-navi", "250px");
            //jQuery(".th-nav-title").css({ "color": "rgba(0, 0, 0, 5)" });
            //jQuery(".th-body-pic").css({ "opacity": "1", "filter": "alpha(opacity=100)" });
        }
    });

    /**
    * Left navigation
    */

    /**Get the screen width**/
    var screen_width = jQuery(document).width();

    /**Show left navigation**/
    function start_width_animation(nav_class, new_width)
    {
        jQuery(nav_class).animate(
        {
            width: new_width
        }, 2000, function ()
        {
            //jQuery(".th-nav-left").css("min-width", "298px");
        });
    }

    /**Check the screen width**/
    if (screen_width < 400)
    {
        var new_width = "100%";
    } else if (screen_width < 500) 
    {
        var new_width = "60%";
    } else if (screen_width < 800) 
    {
        var new_width = "40%";
    } else
    {
        var new_width = "30%";
    }

    /**Navigation OPEN**/
    jQuery(document).on("click", ".th-nav-call-menu", function ()
    {
        jQuery(".th-nav-left").css({"visibility": "visible"});
        start_width_animation(".th-nav-left", new_width);

        return false;
    });

    /**Navigation CLOSE**/
    jQuery(document).on("click", ".th-nav-close, .th-body, footer", function ()
    {
        jQuery(".th-nav-left").css("min-width", "0px");

        jQuery(".th-nav-left").animate(
        {
            width: "0px"
        }, 2000, function()
        {
            jQuery(".th-nav-left").css({"visibility": "hidden"});
        });


        return false;
    });







});