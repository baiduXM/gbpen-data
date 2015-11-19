function loader (argument) {
    setTimeout(function(){
        $('#quickbar').addClass('loaded');
        $(".fakeloader").fadeOut();
    }, 300);
}
window.onload = function () {
    loader();
};


