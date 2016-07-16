import $ from "jquery";

$(function () {

    let snippetsTagMenu = $(".snippetsTagMenu"),
        snippetsVal = $("[name='currentSnippetName']").val();

    //console.log(snippetsVal);

    if (snippetsVal) {

        snippetsTagMenu.find(`a:contains(${snippetsVal})`).addClass("active");

    }


});