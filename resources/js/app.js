import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deletButtons = document.querySelectorAll('.delete-button');

deletButtons.forEach((button) => {
    button.addEventListener('click', function(){
        let car_slug = button.getAttribute('data-carslug');

        let url = `${window.location.origin}/admin/cars/${car_slug}`;

        let form_delete = document.getElementById('form-delete');

        form_delete.setAttribute('action', url);
    })
})