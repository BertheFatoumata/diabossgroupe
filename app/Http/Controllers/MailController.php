<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function envoyerEmail(Request $request)
    {
        // Validation du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Récupération des données
        $nom = $request->input('nom');
        $email = $request->input('email');
        $message = $request->input('message');

        dd($nom, $email, $message);

        $mail = new PHPMailer(true);

        try {
            // Configuration SMTP Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;

            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Encodage
            $mail->CharSet = 'UTF-8';

            // Expéditeur
            $mail->setFrom(
                env('MAIL_FROM_ADDRESS'),
                env('MAIL_FROM_NAME')
            );

            // Destinataire
            $mail->addAddress('diabossgroupe@gmail.com');

            // Permet de répondre directement au visiteur
            $mail->addReplyTo($email, $nom);

            // Sujet
            $mail->Subject = 'Nouveau message depuis le site Diaboss Groupe';

            // Sécurisation du contenu
            $nomSecurise = htmlspecialchars($nom);
            $emailSecurise = htmlspecialchars($email);
            $messageSecurise = nl2br(htmlspecialchars($message));

            // Contenu HTML
            $mail->isHTML(true);

            $mail->Body = "
                <div style='font-family: Arial, sans-serif; line-height: 1.6;'>
                    
                    <h2 style='margin-bottom: 20px;'>
                        Nouveau message depuis le site Diaboss Groupe
                    </h2>

                    <p>
                        <strong>Nom complet :</strong><br>
                        {$nomSecurise}
                    </p>

                    <p>
                        <strong>E-mail :</strong><br>
                        {$emailSecurise}
                    </p>

                    <p>
                        <strong>Projet / Message :</strong>
                    </p>

                    <div style='
                        padding: 15px;
                        background: #f5f5f5;
                        border-radius: 5px;
                    '>
                        {$messageSecurise}
                    </div>

                </div>
               ";

            // Version texte pour les clients mail qui ne lisent pas le HTML
             $mail->AltBody =
                "Nouveau message depuis le site Diaboss Groupe\n\n" .
                "Nom complet : {$nom}\n" .
                "E-mail : {$email}\n\n" .
                "Projet / Message :\n{$message}";

                
            // Envoi
            $mail->send();

            return back()->with(
                'success',
                'Votre message a été envoyé avec succès.'
            );

        } catch (Exception $e) {

            return back()->with(
                'error',
                "Une erreur est survenue lors de l'envoi du message."
            );
        }
    }
}