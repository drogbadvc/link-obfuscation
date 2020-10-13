function str_rot13(str) {
    return (str + '').replace(/[a-z]/gi, function (s) {
        return String.fromCharCode(s.charCodeAt(0) + (s.toLowerCase() < 'n' ? 13 : -13));
    });
}

function linkAction(e) {
    window.location = str_rot13(e.getAttribute("data-href"));
}

$(document).ready(function () {
    $(".link_obf").click(function () {
        window.location = str_rot13($(this).attr("data_obf"));
        return false;
    });
});