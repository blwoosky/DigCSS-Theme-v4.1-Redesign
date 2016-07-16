import $ from "jquery";

const HREF = window.location.href;

$(function () {

    let mainNav = $(".mainNav"),
        pageHeader = $(".pageHeader");

    let nowNav = "";

    nowNav = /\/videos/ig.test(HREF) ? "videos" : nowNav;
    nowNav = /\/snippets/ig.test(HREF) ? "snippets" : nowNav;
    nowNav = /\/courses/ig.test(HREF) ? "courses" : nowNav;
    nowNav = /\/guestbook/ig.test(HREF) ? "guestbook" : nowNav;
    nowNav = $(".homePosts").length > 0 ? "home" : nowNav;


    if (nowNav)
        mainNav.find(`li.${nowNav}`).children("a").addClass("active");

    mainNav.on("click", "a", function () {
        mainNav.find("a").removeClass("active");
        $(this).addClass("active");
    });

    pageHeader.on("click", ".collapseMenu", function () {
        pageHeader.toggleClass("opened");
    });

});
