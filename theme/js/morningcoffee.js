$('p').each(function(index) {
  if ($(this).text().indexOf('via ') == 0) {
    var lien = $(this).find('a');
    lien.html("Visiter le lien");
    lien.addClass("btn");
    lien.addClass("originalLinkButton");
    $(this).html(lien);
  }
});

$('iframe').each(function(index) {
    $(this).removeAttr("width");
    $(this).removeAttr("height");
    $(this).parent().addClass("embed-container");
});