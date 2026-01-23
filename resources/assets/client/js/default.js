(function () {
  "use strict";

  /* ==========================
     SCROLL SUAVE (ÂNCORAS)
  ========================== */
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener("click", function (e) {
        const targetId = this.getAttribute("href");

        if (targetId.length > 1) {
          const target = document.querySelector(targetId);
          if (target) {
            e.preventDefault();
            window.scrollTo({
              top: target.offsetTop,
              behavior: "smooth",
            });
          }
        } else {
          e.preventDefault();
          window.scrollTo({
            top: 0,
            behavior: "smooth",
          });
        }
      });
    });
  });

  /* ==========================
     BOTÃO VOLTAR AO TOPO
  ========================== */
  const scrollTopBtn = document.querySelector(".scroll-top");

  if (scrollTopBtn) {
    scrollTopBtn.addEventListener("click", function (e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });

    document.addEventListener("scroll", function () {
      window.scrollY > 100
        ? scrollTopBtn.classList.add("active")
        : scrollTopBtn.classList.remove("active");
    });
  }

    /* ==========================
        SWIPER – MAIN
    ========================== */
    document.addEventListener("DOMContentLoaded", function () {
    const mainSwiperEl = document.querySelector(".main-swiper");

    if (!mainSwiperEl) return;

    const mainSwiper = new Swiper(".main-swiper", {
        loop: true,
        speed: 700,
        autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        },
        pagination: {
        el: ".swiper-pagination.news",
        clickable: true,
        type: "bullets",
        },
        keyboard: {
        enabled: true,
        },
        effect: "slide",
        breakpoints: {
        0: {
            speed: 500,
        },
        768: {
            speed: 700,
        },
        },
    });

    // Pausar autoplay ao passar o mouse
    mainSwiperEl.addEventListener("mouseenter", () =>
        mainSwiper.autoplay.stop()
    );
    mainSwiperEl.addEventListener("mouseleave", () =>
        mainSwiper.autoplay.start()
    );
    });

    /* ==========================
        CONTADOR DE DIFERENCIAIS
    ========================== */
        document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".stat-number");
        let started = false;

        const animateCounters = () => {
            if (started) return;
            started = true;

            counters.forEach(counter => {
            const target = +counter.dataset.target;
            const duration = 1500;
            const startTime = performance.now();

            const update = (currentTime) => {
                const progress = Math.min((currentTime - startTime) / duration, 1);
                counter.textContent = Math.floor(progress * target);

                if (progress < 1) {
                requestAnimationFrame(update);
                } else {
                counter.textContent = target + "+";
                }
            };

            requestAnimationFrame(update);
            });
        };

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.disconnect();
            }
            });
        }, { threshold: 0.4 });

        observer.observe(document.querySelector(".stats-section"));
    });

    document.getElementById("socialLinks") && document.getElementById("shareBtn").addEventListener("click", (function() {
        document.getElementById("socialLinks").classList.toggle("opacity-0")
    }));
})();
