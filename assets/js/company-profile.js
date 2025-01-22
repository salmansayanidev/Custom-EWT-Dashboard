// date picker
$("#picker").daterangepicker();

// currency filter js

$(".currency-filter-list").hide();

$(".curr-filter-btn").click(function () {
  $(".currency-filter-list").slideToggle("");
  $(".currency-filter-list").css("opacity", "1");
});

document.addEventListener("DOMContentLoaded", function () {
  const currencyRadios = document.querySelectorAll(".currency-radio");

  currencyRadios.forEach((radio) => {
    radio.addEventListener("change", function () {
      document.querySelectorAll(".inner-curr-radio").forEach((innerRadio) => {
        innerRadio.disabled = true;
      });

      const selectedCurrency = radio.value;
      const innerRadioGroup = document.querySelectorAll(
        `input[name='${selectedCurrency}_currencey_radio']`
      );

      innerRadioGroup.forEach((innerRadio) => {
        innerRadio.disabled = false;
      });
    });
  });
});

// company profile tabing js

const detailTabs = document.querySelectorAll("[data-view]");
const allButtons = document.querySelectorAll(".comp-pro-tab-btn, .primary-cta");

allButtons.forEach((button) => {
  button.addEventListener("click", () => {
    allButtons.forEach((btn) => btn.classList.remove("active"));

    $("[data-content]").removeClass("active");

    button.classList.add("active");

    const view = button.dataset.view;

    $(`[data-content="${view}"]`).addClass("active");

    detailTabs.forEach((tab) => {
      if (tab.dataset.view === view) {
        tab.classList.add("active");
      }
    });

    if (button.classList.contains("primary-cta")) {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    }
  });
});
