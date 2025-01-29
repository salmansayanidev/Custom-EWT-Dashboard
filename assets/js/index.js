// search input js

const tagInput = document.getElementById("home-search-input");
const tagsInput = document.querySelector(".tags-input-container");
const maxTags = 6;
let tagsSet = new Set();
let tagsCount = 0;
let tagsArray = [];

var getCommaSepartedString = $('input#search_tags').val();
if (getCommaSepartedString != '') {
    tagsArray = getCommaSepartedString.split(',');
}

const createTag = (label) => {
    const tag = document.createElement("div");
    tag.classList.add("tag");
    tag.innerHTML = `<span>${label}</span><span class="remove-tag">&times;</span>`;
    tag.querySelector(".remove-tag").addEventListener("click", () => {
        tag.remove();
        tagsSet.delete(label);
        tagsCount--;
        tagsArray = tagsArray.filter((tag) => tag !== label);

        if (tagsCount === 0) {
            tagInput.placeholder = "Please add 1 or more hs code or product";
        }

        setTagsArrayToInput(tagsArray);
    });

    return tag;
};

setTags(tagsArray, tagsInput, tagInput);

tagInput?.addEventListener("keydown", (event) => {
    const inputValue = tagInput.value.trim();

    if (event.key === "Enter" && inputValue !== "") {
        event.preventDefault();

        if (tagsSet.has(inputValue)) {
            alert('The tag "${inputValue}" is already added');
        } else if (tagsCount < maxTags) {
            const tag = createTag(inputValue);
            tagsInput.insertBefore(tag, tagInput);
            tagsSet.add(inputValue);
            tagsArray.push(inputValue);
            tagsCount++;
            tagInput.value = "";
            tagInput.placeholder = "";

            setTagsArrayToInput(tagsArray);

            console.log(tagsArray);
        } else {
            alert('You can add up to ${maxTags} tagsonly.');
        }
    }
});

function setTags(strTagsArray, tagsInput, tagInput) {
    strTagsArray.forEach(function(tag) {
        tagsInput.insertBefore(createTag(tag), tagInput);
    });
}

function setTagsArrayToInput(tagsArray){
    $('input#search_tags').val(tagsArray);
}