const documentHeight = () => {
 const doc = document.documentElement
 doc.style.setProperty('--doc-height', `${window.innerHeight}px`)
 console.log(window.innerHeight);
}

window.addEventListener('resize', documentHeight)
documentHeight()
