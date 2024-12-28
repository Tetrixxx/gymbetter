function darkMode() {
    const wasDarkmode = localStorage.getItem('darkmode') === 'true';
    localStorage.setItem('darkmode', !wasDarkmode);
    const element = document.body;
    element.classList.toggle('dark-mode', !wasDarkmode);
}

document.addEventListener('DOMContentLoaded', function() {
  document.body.classList.toggle('dark-mode', localStorage.getItem('darkmode') === 'true');
});

function unChecker() {
    setTimeout(function() {
    document.getElementById('toggle').checked = false;
  }, 800);
}