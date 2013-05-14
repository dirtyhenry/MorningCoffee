$('p').each(function(index) {
  if ($(this).text().indexOf('via ') == 0) {
    var lien = $(this).find('a');
    lien.html("Source");
    lien.addClass("btn");
    lien.addClass("originalLinkButton");
    $(this).html(lien);
  }
});

function adjustIframes() {
  $('iframe').each(function(){
    var
    $this       = $(this),
    proportion  = $this.data( 'proportion' ),
    w           = $this.attr('width'),
    actual_w    = $this.width();
    
    if ( ! proportion )
    {
        proportion = $this.attr('height') / w;
        $this.data( 'proportion', proportion );
    }
  
    if ( actual_w != w )
    {
        $this.css( 'height', Math.round( actual_w * proportion ) + 'px' );
    }
  });
}
$(window).on('resize load',adjustIframes);


$('.label').hover(
    function() {
        $(this).addClass('label-inverse');
    },
    function() {
        $(this).removeClass('label-inverse');
    }
);