

<div class="contact" id="contact">
                <h3>Contact us</h3>
                <p>Have a question or need help? Contact us today and we will be happy to assist you. Whether you have a
                    question about our services or just need some advice, we are here to help. So don't hesitate to reach
                    out to us. We look forward to hearing from you!
                </p>
                <form action="#" method="post">
                    <label for="LastName">Last Name :</label>
                    <input type="text" name="LastName" placeholder="LastName">
                    <label for="FirstName">First Name :</label>
                    <input type="text" name="FirstName" placeholder="FirstName">
                    <label for="Email">Email :</label>
                    <input type="text" name="Email" placeholder="Email">
                    <label for="Number">Number :</label>
                    <input type="text" name="Number" placeholder="Number">
                    <label for="Message">Message :</label>
                    <input type="text" name="Message" placeholder="Message">
                    <button>Submit</button>
                </form>
            </div>
<style>


    
.contact {
    max-width: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

label {
    display: none;
}

.contact h3 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.contact p {
    font-size: 1rem;
    margin-bottom: 1rem;
    padding: 0 1rem;
}

.contact input {
    width: 100%;
    padding: 0.5rem;
    margin: 0.5rem 0;
    border-radius: 5px;
    border: 1px solid #be0000;
}

.contact button {
    background-color: #be0000;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

.contact button:hover {
    background-color: #ff0000;
}

footer {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem;
    background-color: #000000;
    color: white;
    top: 165rem;
}

@keyframes apparition {
  from {
    opacity: 0;
  }

  35% {
    opacity: 0.5;
  }

  60% {
    opacity: 0.8;
  }

  100% {
    opacity: 1;
    transform: none;
}
}


.contact {
    /* opacity: 0; */
    transform: translateY(50px);
    transition: opacity 0.5s ease, transform 0.5s ease;
}

.contact.visible {
    opacity: 1;
    transform: translateY(0);
}

</style>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Destinataire de l'e-mail
    $to = 'baussant.maxime62@gmail.com';

    // Expéditeur de l'e-mail
    $from = $_POST['Email'];
    $senderName = $_POST['FirstName'] . ' ' . $_POST['LastName'];

    // Sujet de l'e-mail
    $subject = 'Question/Help';

    // Contenu de l'e-mail
    $message = $_POST['Message'];

    // En-têtes de l'e-mail
    $headers = "From: $senderName <$from>\r\n";

    // Envoyer l'e-mail en utilisant la fonction mail() de PHP
    if (mail($to, $subject, $message, $headers)) {
        echo 'E-mail envoyé avec succès !';
    } else {
        echo 'Erreur lors de l\'envoi de l\'e-mail.';
    }
}
?>