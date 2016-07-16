import $ from "jquery";

const HOST = window.location.hostname;

$(function () {

    var doc = $(document),
        loadBox = $(".loadBox");

    doc.on("click", "a", function (e) {
        e.preventDefault();
        console.log(this);
        let thisHost = this.host;
        if (HOST == thisHost) {
            loadBox.load(`${this.href} .loadBox>*`);
            return;
        }
        window.open(this.href);
        return;
    })


});