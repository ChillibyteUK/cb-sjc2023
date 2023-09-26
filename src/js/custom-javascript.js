// Add your custom JS here.

const titles = document.querySelectorAll(".animtitle");

function setupSplits() {
  titles.forEach(title => {
    // Reset if needed
    if(title.anim) {
      title.anim.progress(1).kill();
      title.split.revert();
    }

    title.split = new SplitText(title, { 
      type: "lines,words,chars",
      linesClass: "split-line"
    });

    gsap.set(title.split.chars, {
      opacity: 0,
      x: "10",
      y: "0",
      // rotateX: "-40deg",
    });
    gsap.set(title, {
      perspective: 400,
    });

    // Set up the anim
    title.anim = gsap.to(title.split.chars, {
      scrollTrigger: {
        trigger: title,
        // toggleActions: "restart pause resume reverse",
        start: "top 80%",
      },
      duration: 1,
      opacity: 1,
      ease: "power4.out", 
      rotateX: "0",
      x: "0",
      y: "0",
      stagger: 0.02,
    });
  });
}

ScrollTrigger.addEventListener("refresh", setupSplits);
setupSplits();

const cards = document.querySelectorAll('.card');

cards.forEach((card) => {
    card.addEventListener('click',() => {
        cards.forEach((card) => {
            card.classList.remove('active');
        })
        card.classList.add('active')
    })
})

window.addEventListener("load", function () {
  AOS.init({
    duration: 2000,
    once: true,
  });
});


// (function(){


  
// })();
