<?php
    $contact = get_field('contact_form_group');	

    if( $contact ): 
        $mailTo = $contact['email_address_to'];
        $mailSubjectFrom = $contact['email_address_from'];
        $subject = $contact['subject'];
        $website = $contact['website_name'];
    
        if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {

            $name = $_POST['name'];
            $mailFrom = $_POST['email'];
            $message = $_POST['message'];

            $txt = "This is a message from ".
                $website.
                "\n\n".
                "Name: ".$name.
                "\n\n".
                "Email: ".$mailFrom.
                "\n\n".
                "Message: ".$message;

            $headers = 'From:'.$mailSubjectFrom . "\r\n" .
                    "Reply-To: ".$mailFrom . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
            
            mail($mailTo, $subject, $txt, $headers);

        }

    endif;
?>