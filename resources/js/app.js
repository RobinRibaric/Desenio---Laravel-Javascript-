import axios from 'axios';

const button = document.querySelector('.button');

window.onload = function () {
    button.addEventListener('click', () => {

        button.innerHTML = 'loading...';

        axios.get('/getCountry')
            .then(({ data }) => {
                button.innerHTML = data;
            })
            .catch(() => {
                button.innerHTML = 'Failed to get location!';
            })
    })
}

