document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const cardNumber = document.getElementById('card-number').value.replace(/\s+/g, '');
    const expiryDate = document.getElementById('expiry-date').value;
    const cvv = document.getElementById('cvv').value;

    // Validation du nom
    if (name.length < 3) {
        alert("Veuillez entrer un nom valide (au moins 3 caractères).");
        return;
    }

    // Validation de l'email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Veuillez entrer une adresse email valide.");
        return;
    }

    // Validation du numéro de carte
    const cardRegex = /^[0-9]{16}$/;
    if (!cardRegex.test(cardNumber)) {
        alert("Veuillez entrer un numéro de carte valide (16 chiffres).");
        return;
    }

    // Validation du CVV
    const cvvRegex = /^[0-9]{3}$/;
    if (!cvvRegex.test(cvv)) {
        alert("Veuillez entrer un CVV valide (3 chiffres).");
        return;
    }

    // Validation de la date d'expiration
    const currentDate = new Date();
    const [year, month] = expiryDate.split('-').map(Number);
    const expiry = new Date(year, month - 1);
    if (expiry < currentDate) {
        alert("La date d'expiration de la carte est invalide.");
        return;
    }

    // Affichage d'un message de succès
    document.getElementById('message').textContent = `Merci, ${name}! Votre paiement a été traité.`;
});
