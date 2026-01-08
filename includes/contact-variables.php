<?php

$phoneNumber = '09.71.07.98.08';
function getContactVariables($lang = 'fr') {

    $lang = strtolower($lang);
    switch ($lang) {
        case 'en':
            $phone = '';
            $address = '';
            $email = '';
            $opening = '';
            break;
        case 'de': 
            $phone = '+33 (0) 9 71 07 98 08';
            $address = '66 Avenue des Champs-Elysées, 75008 Paris';
            $email = 'kontakt@nutrisolution.info';
            $opening = 'Montags bis Freitag von 8 bis 16';
            break;
        case 'fr':
        default:
            $phone = '09.71.07.98.08';
            $address = '66 Avenue des Champs-Elysées, 75008 Paris';
            $email = 'sav@nutrisolution.fr';
            $opening = 'lundi au vendredi, 8h-16h';
            break;
    }

    return [
        'phone' => $phone,
        'address' => $address,
        'email' => $email,
        'opening' => $opening,
    ];
}
// $contact = getContactVariables('fr');
// $contact['phone'];

