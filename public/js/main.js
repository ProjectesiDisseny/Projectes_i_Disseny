// STELLAR
$().stellar();
// Scroll de la pàgina al clicar un enllaç
$("a").on('click', function(event) {
  if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
      window.location.hash = hash;
    });
  }
});
// Mostrar contingut de pregunta a FAQ
$(".faq_section_1_box").click(function(){
  $(this).find("p").toggle("slow");
});
// NOMÉS PER RESPONSIVE. Mostrar barra navegació al fer clic
$(".nav_responsive").click(function(){
  $(".nav_responsive_content").toggle("slow");
});
