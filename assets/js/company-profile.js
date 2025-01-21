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
