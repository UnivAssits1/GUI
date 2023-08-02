const form1 = document.getElementById('myForm');
$('#myForm').on('submit', function (e) {
    e.preventDefault();
    $('#contact-thx').modal('show');
});
const scriptURL = 'https://script.google.com/macros/s/AKfycbzQfsD0exjJzspn8oFDqwOJ8WAczFy5T06iq1G7GEMmOto-KUie3GpeAnJUVe6USAog0A/exec';
const form = document.forms['NewPort'];

form.addEventListener('submit', (e) => {
    e.preventDefault();
    fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then((response) => console.log('Success!', response))
        .catch((error) => console.error('Error!', error.message));
    form1.reset();
});
function addDarkmodeWidget() {
    new Darkmode().showWidget();
}
window.addEventListener('load', addDarkmodeWidget);
const options = {
    bottom: '64px', // default: '32px'
    right: 'unset', // default: '32px'
    left: '32px', // default: 'unset'
    time: '0.5s', // default: '0.3s'
    mixColor: '#fff', // default: '#fff'
    backgroundColor: '#fff', // default: '#fff'
    buttonColorDark: '#100f2c', // default: '#100f2c'
    buttonColorLight: '#fff', // default: '#fff'
    saveInCookies: false, // default: true,
    label: '🤡', // default: ''
    autoMatchOsTheme: true, // default: true
};

const darkmode = new Darkmode(options);
darkmode.showWidget();
