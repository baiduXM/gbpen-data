$(document).ready(function () {
    $('#dowebok').fullpage({
        verticalCentered: false,
        anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6'],
        navigation: true,
        resize: true,
        navigationTooltips: [' ', ' ', ' ', ' ', ' ', ' '],
        afterLoad: function (link,index) {
            switch (index){
                case 1:
                    move('.section1 .logo').set('opacity','1').set('margin-left','0').set('margin-right','0').end();
                    move('.section1 .search').set('opacity','1').set('margin-right','0').end();
                    move('.section1 .nav ul').set('opacity','1').scale(1).end();
                    break;
                case 2:
                    move('.section2 .en_name').set('margin-left','0').end();
                    move('.section2 .en_name').set('opacity','1').end();
                    move('.section2 .en_name').scale(1).end();
                    move('.section2 .name').set('margin-right','0').end();
                    move('.section2 .name').set('opacity','1').end();
                    move('.section2 .name').scale(1).end();
                    move('.section2 .list').skew(0).set('opacity','1').end();
                    move('.section2 .sec2_btn').set('opacity','1').scale(1).end();
                    break;
                case 3:
                    move('.section3 .sec3_r').set('right','0').end();
                    move('.section3 .sec3_r').set('opacity','1').end();
                    move('.section3 .en_name').set('margin-left','0').end();
                    move('.section3 .en_name').set('opacity','1').delay('0.2s').end();
                    move('.section3 .name').set('margin-left','0').set('opacity','1').end();
                    move('.section3 .sec3_nav').skew(0).set('opacity','1').set('margin-left','0').end();
                    move('.section3 .nr').set('opacity','1').set('margin-left','0').end();
                    move('.section3 .btn').set('opacity','1').set('margin-left','0').rotate(360).end();
                    break;
                case 4:
                    move('.section4 .en_name').set('opacity','1').scale('1').end();
                    move('.section4 .title_bg').set('opacity','1').scale('1').end();
                    move('.section4 .name').set('opacity','1').set('margin-left','0').end();
                    move('.section4 .up').set('opacity','1').set('top','-40px').rotate(720).end();
                    move('.section4 .down').set('opacity','1').set('bottom','-40px').rotate(720).end();
                    move('.section4 ul').set('opacity','1').scale('1').end();
                    move('.section4 .btn').set('opacity','1').scale('1').end();
                    break;
                case 5:
                    move('.section5 .en_name').set('opacity','1').scale('1').end();
                    move('.section5 .title_bg').set('opacity','1').scale('1').end();
                    move('.section5 .name').set('opacity','1').scale('1').end();
                    move('.section5 .left').set('opacity','1').set('margin-left','0').end();
                    move('.section5 .right').set('opacity','1').set('margin-right','0').end();
                    move('.section5 .h3').set('opacity','1').translate(0, 0).delay('0.2s').end();
                    /*  move('.section5 .dl1').set('opacity','1').translate(0, 0).delay('0.25s').end();
                    move('.section5 .dl2').set('opacity','1').translate(0, 0).delay('0.3s').end();
                    move('.section5 .dl3').set('opacity','1').translate(0, 0).delay('0.35s').end();
                    move('.section5 .dl4').set('opacity','1').translate(0, 0).delay('0.4s').end();*/
                    move('.section5 .contact_nr').set('opacity','1').translate(0, 0).delay('0.3s').end();
                    break;
                case 6:
                    move('.section6 .h3').set('opacity','1').scale('1').end();
                    move('.section6 .btn').set('opacity','1').scale('1').end();
                    break;
            }
        },
        onLeave: function (link,index) {
            switch (index){
                case 1:
                    move('.section1 .logo').set('opacity','0').set('margin-left','-300px').set('margin-right','300px').end();
                    move('.section1 .search').set('opacity','0').set('margin-right','-400px').end();
                    move('.section1 .nav ul').set('opacity','0').scale(1,0.2).end();
                    break;
                case 2:
                    move('.section2 .en_name').set('margin-left','1000px').end();
                    move('.section2 .en_name').set('opacity','0').end();
                    move('.section2 .en_name').scale(2).end();
                    move('.section2 .name').set('margin-right','1000px').end();
                    move('.section2 .name').set('opacity','0').end();
                    move('.section2 .name').scale(2).end();
                    move('.section2 .list').skew(50).set('opacity','0').end();
                    move('.section2 .sec2_btn').set('opacity','0').scale(0.2).end();
                    break;
                case 3:
                    move('.section3 .sec3_r').set('right','-920px').end();
                    move('.section3 .sec3_r').set('opacity','0').end();
                    move('.section3 .en_name').set('margin-left','-300px').end();
                    move('.section3 .en_name').set('opacity','0').end();
                    move('.section3 .name').set('margin-left','300px').set('opacity','0').end();
                    move('.section3 .sec3_nav').skew(80).set('opacity','0').set('margin-left','-100px').end();
                    move('.section3 .nr').set('opacity','0').set('margin-left','-200px').end();
                    move('.section3 .btn').set('opacity','0').set('margin-left','-300px').rotate(0).end();
                    break;
                case 4:
                    move('.section4 .en_name').set('opacity','0').scale('0.3').end();
                    move('.section4 .name').set('opacity','0').set('margin-left','-100px').end();
                    move('.section4 .title_bg').set('opacity','0').scale('0.3').end();
                    move('.section4 .up').set('opacity','0').set('top','100px').rotate(720).end();
                    move('.section4 .down').set('opacity','0').set('bottom','100px').rotate(720).end();
                    move('.section4 ul').set('opacity','0').scale('0.3').end();
                    move('.section4 .btn').set('opacity','0').scale('0.3').end();
                    break;
                case 5:
                    move('.section5 .en_name').set('opacity','0').scale('0.3').end();
                    move('.section5 .title_bg').set('opacity','0').scale('0.3').end();
                    move('.section5 .name').set('opacity','0').scale('0.3').end();
                    move('.section5 .left').set('opacity','0').set('margin-left','-300px').end();
                    move('.section5 .right').set('opacity','0').set('margin-right','-300px').end();
                    move('.section5 .h3').set('opacity','0').translate(200, 0).end();
                    /* move('.section5 .dl1').set('opacity','0').translate(200, 0).end();
                    move('.section5 .dl2').set('opacity','0').translate(200, 0).end();
                    move('.section5 .dl3').set('opacity','0').translate(200, 0).end();
                    move('.section5 .dl4').set('opacity','0').translate(200, 0).end();*/
                    move('.section5 .contact_nr').set('opacity','0').translate(200, 0).end();
                    break;
                case 6:
                    move('.section6 .h3').set('opacity','0').scale('0.3').end();
                    move('.section6 .btn').set('opacity','0').scale('0.3').end();
                    break;
            }
        }
    });
/*
    $('.section6').css({'height':'200px','overflow':'hidden'});*/

});