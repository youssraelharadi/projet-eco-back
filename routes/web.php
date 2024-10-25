<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/send-test-email', function () {
    Mail::raw('Ceci est un test d\'e-mail.', function ($message) {
        $message->to('6a8631da35-d0c672+1@inbox.mailtrap.io') // Votre adresse Mailtrap
                ->subject('Test ');
    });

    return 'E-mail envoyé ! Vérifiez Mailtrap.';
});





