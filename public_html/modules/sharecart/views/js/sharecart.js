document.addEventListener('DOMContentLoaded', function () {
    const shareCartButton = document.getElementById('share-cart-button');

    if (shareCartButton) {
        shareCartButton.addEventListener('click', function (e) {
            e.preventDefault();

            fetch('/module/sharecart/ajax', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Link copied: ' + data.link);
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(err => {
                console.error('AJAX error:', err);
            });
        });
    }
});
