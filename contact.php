<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Formulier</title>
</head>
<body>
        <div class="background">
        <div class="overlay">
            <form class="contact-form">
                <h2>Contact formulier</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label>Voornaam</label>
                        <input type="text">
                    </div>
                    <div class="form-group">
                        <label>Postcode</label>
                        <input type="text">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Achternaam</label>
                        <input type="text">
                    </div>
                    <div class="form-group">
                        <label>Adres</label>
                        <input type="text">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email">
                    </div>
                    <div class="form-group">
                        <label>Telefoon nummer</label>
                        <input type="text">
                    </div>
                </div>
                <div class="form-group full-width">
                    <label>Vragen / Opmerking</label>
                    <textarea rows="5"></textarea>
                </div>
                <button type="submit">Verzenden</button>
            </form>
        </div>
    </div>

<style>

* {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.background {
    background: url('Schermafbeelding 2025-06-25 083714.png') no-repeat center center/cover;
    height: 100vh;
    position: relative;
}

.overlay {
    background-color: rgba(0, 0, 0, 0.6);
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.contact-form {
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
    padding: 50px 40px; /* Meer verticale padding */
    border-radius: 10px;
    max-width: 900px;   /* Even breed */
    width: 100%;
}

h2 {
    text-align: center;
    margin-bottom: 40px;
    font-size: 28px;
}

.form-row {
    display: flex;
    gap: 20px;
    margin-bottom: 35px; /* Meer ruimte tussen rijen */
}

.form-group {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.full-width {
    width: 100%;
    margin-bottom: 30px;
}

input, textarea {
    padding: 14px;
    font-size: 16px;
    border-radius: 5px;
    margin-top: 6px;
}

textarea {
    resize: none;
    min-height: 150px; 
}

button {
    width: 100%;
    background-color: black;
    color: white;
    border: 2px solid white;
    padding: 16px;
    font-size: 18px;
    border-radius: 6px;
    cursor: pointer;
}

button:hover {
    background-color: white;
    color: black;
}


</style>




</body>
</html>