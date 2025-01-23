// filter date picker
$('#picker').daterangepicker();


// table font size js

const tableHeaders = document.querySelectorAll('#shipment-detail-table th');
const tableCells = document.querySelectorAll('#shipment-detail-table td');

const fontMinusBtn = document.getElementById('table-font-minus');
const fontPlusBtn = document.getElementById('table-font-plus');

const table = document.getElementById('shipment-detail-table');

let currentFontSize = 10;
const minFontSize = 8;
const maxFontSize = 12;
const baseWidth = 2200;
const widthIncrement = 180;

function updateFontSize(size) {
    tableHeaders.forEach(header => {
        header.style.fontSize = size + 'px';
    });
    tableCells.forEach(cell => {
        cell.style.fontSize = size + 'px';
    });

    const newWidth = baseWidth + (size - 10) * widthIncrement;
    table.style.minWidth = newWidth + 'px';
}

fontMinusBtn.addEventListener('click', () => {
    if (currentFontSize > minFontSize) {
        currentFontSize -= 2;
        updateFontSize(currentFontSize);
    }
});

fontPlusBtn.addEventListener('click', () => {
    if (currentFontSize < maxFontSize) {
        currentFontSize += 2;
        updateFontSize(currentFontSize);
    }
});

updateFontSize(currentFontSize);

// compare charts area js 

$(".compare-charts-main").hide();
$(".compare-chart-btn-area").hide();


$("#synopsis-btn").click(function () {
    $(".compare-charts-main").slideToggle("slow");
    $(".shipment-detail-area").toggleClass("active");
    $(".compare-charts-main").css("opacity", "1");
    if ($(".shipment-detail-area").hasClass("active")) {
        $(".compare-chart-btn-area").show();
    } else {
        $(".compare-chart-btn-area").hide();
    }
});


// table filtering js

$(document).ready(function () {
    var table = $('#shipment-detail-table').DataTable();

    $('.column-filter-checkbox').on('change', function () {
        var columnIndex = $(this).attr('data-dt-column');
        var isVisible = $(this).is(':checked');

        table.column(columnIndex).visible(isVisible);
    });
});

$(".column-filter-list").hide();

$("#column-filter-btn").click(function () {
    $(".column-filter-list").slideToggle("");
    $(".column-filter-list").css("opacity", "1");
});

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




// search input js

const tagInput = document.getElementById("company-directors-search");
const tagsInput = document.querySelector(".tags-input-container");
const maxTags = 6;
let tagsSet = new Set();
let tagsCount = 0;
let tagsArray = [];

const createTag = (label) => {
  const tag = document.createElement("div");
  tag.classList.add("tag");
  tag.innerHTML = `
        <span>${label}</span>
        <span class="remove-tag">&times;</span>
    `;

  tag.querySelector(".remove-tag").addEventListener("click", () => {
    tag.remove();
    tagsSet.delete(label);
    tagsCount--;
    tagsArray = tagsArray.filter((tag) => tag !== label);
    if (tagsCount === 0) {
      tagInput.placeholder = "Please add 1 or more hs code or product";
    }
  });

  return tag;
};

tagInput?.addEventListener("keydown", (event) => {
  const inputValue = tagInput.value.trim();

  if (event.key === "Enter" && inputValue !== "") {
    event.preventDefault();

    if (tagsSet.has(inputValue)) {
      alert(`The tag "${inputValue}" is already added.`);
    } else if (tagsCount < maxTags) {
      const tag = createTag(inputValue);
      tagsInput.insertBefore(tag, tagInput);
      tagsSet.add(inputValue);
      tagsArray.push(inputValue);
      tagsCount++;
      tagInput.value = "";
      tagInput.placeholder = "";

      console.log(tagsArray);
    } else {
      alert(`You can add up to ${maxTags} tags only.`);
    }
  }
});