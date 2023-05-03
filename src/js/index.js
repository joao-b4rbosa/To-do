function marcaTarefa(checkbox) {
    var label = checkbox.nextElementSibling;
    if (checkbox.checked) {
      label.classList.add('strikethrough');
    } else {
      label.classList.remove('strikethrough');
    }
  }