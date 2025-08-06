/************************************
 ** splash
 ************************************/

document.addEventListener("DOMContentLoaded", function () {
  // スプラッシュアニメーション
  const splashText = document.getElementById("splash-text");
  const splash = document.getElementById("splash");
  const mainVisual = document.getElementById("mainVisual");

  if (splashText && splash) {
    gsap
      .to("#splash-text", {
        duration: 1,
        opacity: 1, // スプラッシュテキストのフェードイン
      })
      .then(() => {
        // スプラッシュ画面全体をフェードアウトし、タイムラインの準備
        return gsap.to(splash, {
          duration: 1,
          opacity: 0,
          delay: 2, // 2秒待つ
        });
      })
      .then(() => {
        // スプラッシュ画面を完全に非表示にする
        splash.style.display = "none";

        // mainVisualを表示する
        if (mainVisual) {
          const tl = gsap.timeline();

          // mainVisualのフェードイン
          tl.to(mainVisual, {
            duration: 1,
            opacity: 1,
          });

          // メインコンテンツのフェードイン
          tl.to("#main-content", {
            duration: 1,
            opacity: 1,
          });

          return tl;
        }
      });
  }

  // headerのアニメーション（スプラッシュの有無に関係なく常に実行）
  const header = document.getElementById("header");
  if (header) {
    gsap.to(header, {
      opacity: 1,
      y: 0,
      duration: 0.5,
      ease: "power2.out",
    });
  }

  //---------------------------------------フェードインアップ
  function fadeAnime() {
    $(".fadeInUp").each(function () {
      var elemPos = $(this).offset().top + 100;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass("visible");
      } else {
        $(this).removeClass("visible");
      }
    });
  }
  $(window).scroll(function () {
    fadeAnime();
  });

  //---------------------------------------ハンバーガーのスイッチ
  $(".ham").click(function () {
    $(this).toggleClass("is-active");
    $(".header").toggleClass("is-active");
    $(".menu-box").toggleClass("is-active");
  });

  //---------------------------------------スクロール時にヘッダーが変化する
  var headerH = $("#header").outerHeight(true);

  function FixedAnime() {
    var scroll = $(window).scrollTop();
    if (scroll >= headerH) {
      $("#header").addClass("scroll");
    } else {
      $("#header").removeClass("scroll");
    }
  }
  $(window).scroll(function () {
    FixedAnime();
  });
  $(window).on("load", function () {
    FixedAnime();
  });
  $("#g-navi li a").click(function () {
    var headerVal = $("#header").outerHeight(true);
    var scroll = $(window).scrollTop();
    var adjust = 0;
    if (scroll <= headerVal) {
      adjust = 70;
    }
    var elmHash = $(this).attr("href");
    var pos = $(elmHash).offset().top - headerVal - adjust;
    $("body,html").animate(
      {
        scrollTop: pos,
      },
      1000
    );
    return false;
  });

  //---------------------------------------一文字ずつfadein
  function fadeAnimes() {
    $(".fadeUpTrigger").each(function () {
      var elemPos = $(this).offset().top - 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass("text-fadein");
      } else {
        $(this).removeClass("text-fadein");
      }
    });
  }
  $(window).scroll(function () {
    fadeAnimes();
  });

  //---------------------------------------テキストスクロール
  const scrollingText = document.getElementById("scrollingText");
  if (scrollingText) {
    // Duplicate text to create endless effect
    const textContent = scrollingText.innerHTML;
    for (let i = 0; i < 10; i++) {
      scrollingText.innerHTML += textContent;
    }

    // Animation
    let offset = 0;
    function animate() {
      offset -= 1;
      scrollingText.style.transform = `translateX(${offset}px)`;

      if (Math.abs(offset) >= scrollingText.scrollWidth / 2) {
        offset = 0;
      }
      requestAnimationFrame(animate);
    }
    animate();
  }

  //---------------------------------------swiper
  const swiper = new Swiper(".swiper", {
    loop: true,
    slidesPerView: 1.2,
    centeredSlides: true,
    spaceBetween: 20,
    freeMode: true,
    freeModeMomentum: false, // 慣性スクロールをオフ
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    speed: 3000,
    allowTouchMove: false, // ユーザー操作をオフにして完全自動スクロールにするなら
  });
});
//---------------------------------------画面幅を測る
function updateViewportDimensions() {
  document.getElementById("viewport-width").textContent = window.innerWidth;
  document.getElementById("viewport-height").textContent = window.innerHeight;
}

// ページ読み込み時に更新
window.addEventListener("load", updateViewportDimensions);

// 画面リサイズ時にも更新
window.addEventListener("resize", updateViewportDimensions);
