// public/js/notifications.js

document.addEventListener('DOMContentLoaded', function () {
    fetch('/notification-stock-bas')
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                document.getElementById('stockLowNotification').style.display = 'block';
                stockLowNotification.classList.add('notification', 'identifier', 'text', 'number');
            }
        })
        .catch(error => console.error('Erreur lors de la récupération des données :', error));
});
