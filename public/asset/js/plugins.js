AOS.init({
	duration: 1000,
	once: true,
	offset: -100
});

jQuery(document).ready(function() {
	new WOW().init();

    // if( $(".counter").length > 0 ){
var count = $(".counter");
if (count.length) {
	count.counterUp({
		delay: 20,
		time: 3000
	});
}
// }

});


window.addEventListener('load', () => {
  gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

  if (window.innerWidth > 1023.99) {
    const panelsSection = document.querySelector("#panels");
    const panelsContainer = document.querySelector("#panels-container");

    if (panelsSection && panelsContainer) {
      const panels = gsap.utils.toArray("#panels-container .wrap");

      // Refresh ScrollTrigger after layout is fully known
      ScrollTrigger.refresh();

      gsap.to(panels, {
        x: () => -1 * (panelsContainer.scrollWidth - innerWidth),
        ease: "none",
        scrollTrigger: {
          trigger: "#panels-container",
          pin: true,
          start: "top 25%",
          scrub: 1,
          invalidateOnRefresh: true,
          end: () => "+=" + (panelsContainer.scrollWidth - innerWidth)
        }
      });
    }
  }
});


