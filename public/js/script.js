        const serviceSelect = document.getElementById('serviceSelect');
        const otherField = document.getElementById('otherServiceField');

        serviceSelect.addEventListener('change', function() {
            if (this.value === 'other') {
                otherField.style.display = 'block';
                otherField.querySelector('textarea').setAttribute('required', 'true');
            } else {
                otherField.style.display = 'none';
                otherField.querySelector('textarea').removeAttribute('required');
            }
        });