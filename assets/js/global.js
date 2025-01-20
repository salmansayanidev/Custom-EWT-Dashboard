// search input js

const tagsInput = document.querySelector('.tags-input');
const tagInput = document.querySelector('.tag-input');
let tagsCount = 0;
const maxTags = 6;
const tagsSet = new Set();

const createTag = (label) => {
    const tag = document.createElement('div');
    tag.classList.add('tag');
    tag.innerHTML = `
    <span>${label}</span>
    <span class="remove-tag">&times;</span>
  `;

    tag.querySelector('.remove-tag').addEventListener('click', () => {
        tag.remove();
        tagsSet.delete(label);
        tagsCount--;
        if (tagsCount === 0) {
            tagInput.placeholder = 'Please add 1 or more hs code or product';
        }
    });

    return tag;
};

tagInput.addEventListener('keydown', (event) => {
    const inputValue = tagInput.value.trim();
    if (event.key === 'Enter' && inputValue !== '') {
        event.preventDefault();

        if (tagsSet.has(inputValue)) {
            alert(`The tag "${inputValue}" is already added.`);
        } else if (tagsCount < maxTags) {
            const tag = createTag(inputValue);
            tagsInput.insertBefore(tag, tagInput);
            tagsSet.add(inputValue);
            tagsCount++;
            tagInput.value = '';
            tagInput.placeholder = '';
        } else {
            alert(`You can add up to ${maxTags} tags only.`);
        }
    }
});