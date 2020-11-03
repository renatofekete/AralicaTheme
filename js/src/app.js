window.onload = () => {
  document.addEventListener('click', e => {
    if (e.target.classList.contains('hamburger')) {
      // add primary-menu--mobile
      document
        .getElementById('site-navigation')
        .classList.add('main-menu--mobile')
      document
        .getElementById('primary-menu')
        .classList.add('primary-menu--mobile')
    }
    if (e.target.classList.contains('hamburger-close')) {
      document
        .getElementById('site-navigation')
        .classList.remove('main-menu--mobile')
      document
        .getElementById('primary-menu')
        .classList.remove('primary-menu--mobile')
    }
  })
}
