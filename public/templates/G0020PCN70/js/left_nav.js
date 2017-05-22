$(document).ready(function($) {
    jQuery("#slideBox").slide({
        mainCell: ".bd ul",
        autoPlay: true,
        effect: "left"
    });
    jQuery("#pimgw").slide({
        mainCell: ".bd ul",
        autoPlay: true
    });
    jQuery('.gd .picMarquee').slide({
        mainCell: "ul.picList",
        autoPlay: true,
        effect: "leftMarquee",
        vis: 5,
        interTime: 20
    });
    var a = $(".sub3nav li").children('a')

    // console.log('step1')
    a.click(function() {
        // console.log('step2')
        $(this).next().slideToggle()

    });
});
