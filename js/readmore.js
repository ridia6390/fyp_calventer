document.addEventListener('DOMContentLoaded', function () {
  var content = document.getElementById('calventerContent');
  var link = document.getElementById('readMoreLink');

  link.addEventListener('click', function (event) {
    event.preventDefault();

    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + 'px';
    }

    link.textContent = link.textContent === 'Read More' ? 'Read Less' : 'Read More';
  });
});