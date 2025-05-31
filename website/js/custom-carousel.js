// Unified Carrousel Initialization for any number of carousels
$('[class*="tf-sw-product-sell-"]').each(function () {
  var selector = $(this)
    .attr("class")
    .split(" ")
    .find((c) => c.startsWith("tf-sw-product-sell-"));
  if (selector) {
    var num = selector.split("-").pop();
    var preview = $(this).data("preview");
    var tablet = $(this).data("tablet");
    var mobile = $(this).data("mobile");
    var spacingLg = $(this).data("space-lg");
    var spacingMd = $(this).data("space-md");
    var perGroup = $(this).data("pagination");
    var perGroupMd = $(this).data("pagination-md");
    var perGroupLg = $(this).data("pagination-lg");

    new Swiper(`.${selector}`, {
      slidesPerView: mobile,
      spaceBetween: spacingMd,
      speed: 1000,
      pagination: {
        el: `.sw-pagination-sell-${num}`, // Unique pagination element for each carousel
        clickable: true,
      },
      slidesPerGroup: perGroup,
      navigation: {
        clickable: true,
        nextEl: `.nav-prev-sell-${num}`,
        prevEl: `.nav-next-sell-${num}`,
      },
      breakpoints: {
        768: {
          slidesPerView: tablet,
          spaceBetween: spacingLg,
          slidesPerGroup: perGroupMd,
        },
        1150: {
          slidesPerView: preview,
          spaceBetween: spacingLg,
          slidesPerGroup: perGroupLg,
        },
      },
    });
  }
});


// Multi Tab
$(document).ready(function () {
  $("[class*='tf-sw-product-sell-top-']").each(function () {
    var $slider = $(this);
    var classes = $slider.attr("class").split(/\s+/);
    var match = classes.find((cls) =>
      cls.startsWith("tf-sw-product-sell-top-")
    );

    if (!match) return;

    var num = match.replace("tf-sw-product-sell-top-", "");
    var selector = `.tf-sw-product-sell-top-${num}`;

    // Fetch data attributes
    var preview = $slider.data("preview") || 4;
    var tablet = $slider.data("tablet") || 3;
    var mobile = $slider.data("mobile") || 1;
    var spacingLg = $slider.data("space-lg") || 30;
    var spacingMd = $slider.data("space-md") || 20;
    var perGroup = $slider.data("pagination") || 1;
    var perGroupMd = $slider.data("pagination-md") || 1;
    var perGroupLg = $slider.data("pagination-lg") || 1;

    // Create unique pagination element if needed
    var paginationClass = `sw-pagination-product-${num}`;
    if ($slider.find(`.${paginationClass}`).length === 0) {
      $slider.append(
        `<div class="swiper-pagination ${paginationClass}"></div>`
      );
    }

    new Swiper(selector, {
      slidesPerView: mobile,
      spaceBetween: spacingMd,
      speed: 1000,
      pagination: {
        el: `.${paginationClass}`,
        clickable: true,
      },
      slidesPerGroup: perGroup,
      navigation: {
        clickable: true,
        nextEl: `.nav-prev-product-top-${num}`,
        prevEl: `.nav-next-product-top-${num}`,
      },
      breakpoints: {
        768: {
          slidesPerView: tablet,
          spaceBetween: spacingLg,
          slidesPerGroup: perGroupMd,
        },
        1150: {
          slidesPerView: preview,
          spaceBetween: spacingLg,
          slidesPerGroup: perGroupLg,
        },
      },
    });
  });
});