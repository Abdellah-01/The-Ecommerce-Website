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

// Unified Carousel Initialization for Multiple Collections
["1", "2", "3"].forEach(function (num) {
  var selector = `.tf-sw-product-sell-top-${num}`;
  if ($(selector).length > 0) {
    var preview = $(selector).data("preview");
    var tablet = $(selector).data("tablet");
    var mobile = $(selector).data("mobile");
    var spacingLg = $(selector).data("space-lg");
    var spacingMd = $(selector).data("space-md");
    var perGroup = $(selector).data("pagination");
    var perGroupMd = $(selector).data("pagination-md");
    var perGroupLg = $(selector).data("pagination-lg");

    new Swiper(selector, {
      slidesPerView: mobile,
      spaceBetween: spacingMd,
      speed: 1000,
      pagination: {
        el: ".sw-pagination-product", // Shared pagination element
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
  }
});
