imageRomero.onchange = evt => {
    const [file] = imageRomero.files
    if (file) {
      image.src = URL.createObjectURL(file)
    }
  }