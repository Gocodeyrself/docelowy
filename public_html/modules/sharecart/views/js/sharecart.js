// Deklaracja zmiennej globalnej, jeśli jeszcze nie istnieje
if (typeof window.isListenerAdded === 'undefined') {
    window.isListenerAdded = false; // Ustawienie globalnej flagi
}

document.addEventListener('DOMContentLoaded', function () {
    console.log('DOMContentLoaded event fired for sharecart.js'); // Log dla testów

    const shareCartButton = document.getElementById('share-cart-button');

    if (shareCartButton && !window.isListenerAdded) {
        console.log('Event listener added to shareCartButton'); // Log dla testów
        window.isListenerAdded = true; // Ustaw flagę globalną

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
                    navigator.clipboard.writeText(data.link)
                        .then(() => {
                            alert('Link copied to clipboard: ' + data.link);
                        })
                        .catch(err => {
                            console.error('Could not copy text: ', err);
                            alert('Link generated, but could not be copied: ' + data.link);
                        });
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(err => {
                console.error('AJAX error:', err);
                alert('An error occurred while generating the link.');
            });
        });
    }
});
