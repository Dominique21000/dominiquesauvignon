<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('el', array (
  'validators' => 
  array (
    'This value should be false.' => 'Αυτή η τιμή πρέπει να είναι ψευδής.',
    'This value should be true.' => 'Αυτή η τιμή πρέπει να είναι αληθής.',
    'This value should be of type {{ type }}.' => 'Αυτή η τιμή πρέπει να είναι τύπου {{ type }}.',
    'This value should be blank.' => 'Αυτή η τιμή πρέπει να είναι κενή.',
    'The value you selected is not a valid choice.' => 'Η τιμή που επιλέχθηκε δεν αντιστοιχεί σε έγκυρη επιλογή.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Πρέπει να επιλέξετε τουλάχιστον {{ limit }} επιλογή.|Πρέπει να επιλέξετε τουλάχιστον {{ limit }} επιλογές.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Πρέπει να επιλέξετε το πολύ {{ limit }} επιλογή.|Πρέπει να επιλέξετε το πολύ {{ limit }} επιλογές.',
    'One or more of the given values is invalid.' => 'Μια ή περισσότερες τιμές δεν είναι έγκυρες.',
    'This field was not expected.' => 'Αυτό το πεδίο δεν ήταν αναμενόμενο.',
    'This field is missing.' => 'Λείπει αυτό το πεδίο.',
    'This value is not a valid date.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρη ημερομηνία.',
    'This value is not a valid datetime.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρη ημερομηνία και ώρα.',
    'This value is not a valid email address.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρο email.',
    'The file could not be found.' => 'Το αρχείο δε μπορεί να βρεθεί.',
    'The file is not readable.' => 'Το αρχείο δεν είναι αναγνώσιμο.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Το αρχείο είναι πολύ μεγάλο ({{ size }} {{ suffix }}). Το μέγιστο επιτρεπτό μέγεθος είναι {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Ο τύπος mime του αρχείου δεν είναι έγκυρος ({{ type }}). Οι έγκρυοι τύποι mime είναι {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Αυτή η τιμή θα έπρεπε να είναι {{ limit }} ή λιγότερο.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Αυτή η τιμή είναι πολύ μεγάλη. Θα έπρεπε να έχει {{ limit }} χαρακτήρα ή λιγότερο.|Αυτή η τιμή είναι πολύ μεγάλη. Θα έπρεπε να έχει {{ limit }} χαρακτήρες ή λιγότερο.',
    'This value should be {{ limit }} or more.' => 'Αυτή η τιμή θα έπρεπε να είναι {{ limit }} ή περισσότερο.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Αυτή η τιμή είναι πολύ μικρή. Θα έπρεπε να έχει {{ limit }} χαρακτήρα ή περισσότερο.|Αυτή η τιμή είναι πολύ μικρή. Θα έπρεπε να έχει {{ limit }} χαρακτήρες ή περισσότερο.',
    'This value should not be blank.' => 'Αυτή η τιμή δεν πρέπει να είναι κενή.',
    'This value should not be null.' => 'Αυτή η τιμή δεν πρέπει να είναι μηδενική.',
    'This value should be null.' => 'Αυτή η τιμή πρέπει να είναι μηδενική.',
    'This value is not valid.' => 'Αυτή η τιμή δεν είναι έκγυρη.',
    'This value is not a valid time.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρη ώρα.',
    'This value is not a valid URL.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρο URL.',
    'The two values should be equal.' => 'Οι δύο τιμές θα πρέπει να είναι ίδιες.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Το αρχείο είναι πολύ μεγάλο. Το μέγιστο επιτρεπτό μέγεθος είναι {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Το αρχείο είναι πολύ μεγάλο.',
    'The file could not be uploaded.' => 'Το αρχείο δε μπορεί να ανέβει.',
    'This value should be a valid number.' => 'Αυτή η τιμή θα πρέπει να είναι ένας έγκυρος αριθμός.',
    'This file is not a valid image.' => 'Το αρχείο δεν αποτελεί έγκυρη εικόνα.',
    'This is not a valid IP address.' => 'Αυτό δεν είναι μια έκγυρη διεύθυνση IP.',
    'This value is not a valid language.' => 'Αυτή η τιμή δεν αντιστοιχεί σε μια έκγυρη γλώσσα.',
    'This value is not a valid locale.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έκγυρο κωδικό τοποθεσίας.',
    'This value is not a valid country.' => 'Αυτή η τιμή δεν αντιστοιχεί σε μια έκγυρη χώρα.',
    'This value is already used.' => 'Αυτή η τιμή χρησιμοποιείται ήδη.',
    'The size of the image could not be detected.' => 'Το μέγεθος της εικόνας δεν ήταν δυνατό να ανιχνευθεί.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Το πλάτος της εικόνας είναι πολύ μεγάλο ({{ width }}px). Το μέγιστο επιτρεπτό πλάτος είναι {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Το πλάτος της εικόνας είναι πολύ μικρό ({{ width }}px). Το ελάχιστο επιτρεπτό πλάτος είναι {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Το ύψος της εικόνας είναι πολύ μεγάλο ({{ height }}px). Το μέγιστο επιτρεπτό ύψος είναι {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Το ύψος της εικόνας είναι πολύ μικρό ({{ height }}px). Το ελάχιστο επιτρεπτό ύψος είναι {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Αυτή η τιμή θα έπρεπε να είναι ο τρέχων κωδικός.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Αυτή η τιμή θα έπρεπε να έχει ακριβώς {{ limit }} χαρακτήρα.|Αυτή η τιμή θα έπρεπε να έχει ακριβώς {{ limit }} χαρακτήρες.',
    'The file was only partially uploaded.' => 'Το αρχείο δεν ανέβηκε ολόκληρο.',
    'No file was uploaded.' => 'Δεν ανέβηκε κανένα αρχείο.',
    'No temporary folder was configured in php.ini.' => 'Κανένας προσωρινός φάκελος δεν έχει ρυθμιστεί στο php.ini.',
    'Cannot write temporary file to disk.' => 'Αδυναμία εγγραφής προσωρινού αρχείου στο δίσκο.',
    'A PHP extension caused the upload to fail.' => 'Μια επέκταση PHP προκάλεσε αδυναμία ανεβάσματος.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχείο ή περισσότερα.|Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχεία ή περισσότερα.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχείo ή λιγότερα.|Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχεία ή λιγότερα.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Αυτή η συλλογή θα πρέπει να περιέχει ακριβώς {{ limit }} στοιχείo.|Αυτή η συλλογή θα πρέπει να περιέχει ακριβώς {{ limit }} στοιχεία.',
    'Invalid card number.' => 'Μη έγκυρος αριθμός κάρτας.',
    'Unsupported card type or invalid card number.' => 'Μη υποστηριζόμενος τύπος κάρτας ή μη έγκυρος αριθμός κάρτας.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Αυτό δεν αντιστοιχεί σε έκγυρο διεθνή αριθμό τραπεζικού λογαριασμού (IBAN).',
    'This value is not a valid ISBN-10.' => 'Αυτό δεν είναι έγκυρος κωδικός ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Αυτό δεν είναι έγκυρος κωδικός ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Αυτό δεν είναι ούτε έγκυρος κωδικός ISBN-10 ούτε έγκυρος κωδικός ISBN-13.',
    'This value is not a valid ISSN.' => 'Αυτό δεν είναι έγκυρος κωδικός ISSN.',
    'This value is not a valid currency.' => 'Αυτό δεν αντιστοιχεί σε έγκυρο νόμισμα.',
    'This value should be equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι ίση με {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεγαλύτερη από {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεγαλύτερη ή ίση με {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι πανομοιότυπη με {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μικρότερη από {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μικρότερη ή ίση με {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Αυτή η τιμή δεν θα πρέπει να είναι ίση με {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Αυτή η τιμή δεν πρέπει να είναι πανομοιότυπη με {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Αυτή η φόρμα δεν πρέπει να περιέχει επιπλέον πεδία.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Το αρχείο είναι πολύ μεγάλο. Παρακαλούμε προσπαθήστε να ανεβάσετε ένα μικρότερο αρχείο.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Το CSRF token δεν είναι έγκυρο. Παρακαλούμε δοκιμάστε να υποβάλετε τη φόρμα ξανά.',
    'fos_user.username.already_used' => 'Το όνομα χρήστη χρησιμοποιείται ήδη',
    'fos_user.username.blank' => 'Παρακαλώ εισάγετε ένα όνομα χρήστη',
    'fos_user.username.short' => '[-Inf,Inf]Το όνομα χρήστη είναι πολύ μικρό ',
    'fos_user.username.long' => '[-Inf,Inf]Το όνομα χρήστη είναι πολύ μεγάλο',
    'fos_user.email.already_used' => 'Το email χρησιμοποιείται ήδη',
    'fos_user.email.blank' => 'Παρακαλώ εισάγετε ένα e-mail',
    'fos_user.email.short' => '[-Inf,Inf]Το email ίναι πολύ μικρό',
    'fos_user.email.long' => '[-Inf,Inf]Το email είναι πολύ μεγάλο',
    'fos_user.email.invalid' => 'Το email δεν είναι έγκυρο',
    'fos_user.password.blank' => 'Παρακαλώ εισάγετε έναν κωδικό πρόσβασης',
    'fos_user.password.short' => '[-Inf,Inf]Ο κωδικός πρόσβασης είναι πολύ μικρός',
    'fos_user.password.mismatch' => 'Οι κωδικοί πρόσβασης δεν ταιριάζουν',
    'fos_user.new_password.blank' => 'Παρακαλώ εισάγετε ένα νέο κωδικό πρόσβασης',
    'fos_user.new_password.short' => '[-Inf,Inf]Ο νέος κωδικός πρόσβασης είναι πολύ μικρός',
    'fos_user.current_password.invalid' => 'Ο κωδικός που δώσατε δεν είναι έγκυρος',
    'fos_user.group.blank' => 'Παρακαλώ εισάγετε ένα όνομα',
    'fos_user.group.short' => '[-Inf,Inf]Το όνομα είναι πολύ μικρό',
    'fos_user.group.long' => '[-Inf,Inf]Το όνομα είναι πολύ μεγάλο',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Συνέβη ένα σφάλμα πιστοποίησης.',
    'Authentication credentials could not be found.' => 'Τα στοιχεία πιστοποίησης δε βρέθηκαν.',
    'Authentication request could not be processed due to a system problem.' => 'Το αίτημα πιστοποίησης δε μπορεί να επεξεργαστεί λόγω σφάλματος του συστήματος.',
    'Invalid credentials.' => 'Λανθασμένα στοιχεία σύνδεσης.',
    'Cookie has already been used by someone else.' => 'Το Cookie έχει ήδη χρησιμοποιηθεί από κάποιον άλλο.',
    'Not privileged to request the resource.' => 'Δεν είστε εξουσιοδοτημένος για πρόσβαση στο συγκεκριμένο περιεχόμενο.',
    'Invalid CSRF token.' => 'Μη έγκυρο CSRF token.',
    'Digest nonce has expired.' => 'Το digest nonce έχει λήξει.',
    'No authentication provider found to support the authentication token.' => 'Δε βρέθηκε κάποιος πάροχος πιστοποίησης που να υποστηρίζει το token πιστοποίησης.',
    'No session available, it either timed out or cookies are not enabled.' => 'Δεν υπάρχει ενεργή σύνοδος (session), είτε έχει λήξει ή τα cookies δεν είναι ενεργοποιημένα.',
    'No token could be found.' => 'Δεν ήταν δυνατόν να βρεθεί κάποιο token.',
    'Username could not be found.' => 'Το Username δε βρέθηκε.',
    'Account has expired.' => 'Ο λογαριασμός έχει λήξει.',
    'Credentials have expired.' => 'Τα στοιχεία σύνδεσης έχουν λήξει.',
    'Account is disabled.' => 'Ο λογαριασμός είναι απενεργοποιημένος.',
    'Account is locked.' => 'Ο λογαριασμός είναι κλειδωμένος.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Ενημέρωση ομάδας',
    'group.show.name' => 'Όνομα ομάδας',
    'group.new.submit' => 'Δημιουργία ομάδας',
    'group.flash.updated' => 'Η ομάδα ενημερώθηκε επιτυχώς',
    'group.flash.created' => 'Η ομάδα δημιουργήθηκε επιτυχώς',
    'group.flash.deleted' => 'Η ομάδα διαγράφηκε επιτυχώς',
    'security.login.username' => 'Όνομα Χρήστη',
    'security.login.password' => 'Κωδικός Πρόσβασης',
    'security.login.remember_me' => 'Να με θυμάσαι',
    'security.login.submit' => 'Είσοδος',
    'profile.show.username' => 'Όνομα Χρήστη',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Ενημέρωσε',
    'profile.flash.updated' => 'Το προφίλ ενημερώθηκε επιτυχώς',
    'change_password.submit' => 'Αλλαγή κωδικού',
    'change_password.flash.success' => 'Ο κωδικός άλλαξε επιτυχώς',
    'registration.check_email' => 'Ένα email στάλθηκε στο %email%. Περιέχει μία διεύθυνση ενεργοποίησης του λογαριασμού σας που πρέπει να κάνετε κλικ για να ενεργοποιηθεί.',
    'registration.confirmed' => 'Συγχαρητήρια %username%, ο λογαριασμός μόλις ενεργοποιήθηκε.',
    'registration.back' => 'Επιστροφή στην αρχική σελίδα.',
    'registration.submit' => 'Εγγραφή',
    'registration.flash.user_created' => 'Ο χρήστης δημιουργήθηκε επιτυχώς.',
    'registration.email.subject' => 'Καλώς ήρθες %username%!',
    'registration.email.message' => 'Αγαπητέ %username%!

  Για να ολοκληρώσετε την ενεργοποίηση του λογαριασμού σας - επισκεφθείτε %confirmationUrl%

Ευχαριστούμε πολύ.
',
    'resetting.password_already_requested' => 'Ο κωδικός για αυτόν το χρήστη έχει ήδη ζητηθεί μέσα στις τελευταίες 24 ώρες.',
    'resetting.check_email' => 'Ένα email στάλθηκε στο %email%. Περιέχει ένα σύνδεσμο για να επαναφέρετε τον κωδικό πρόσβασής σας.',
    'resetting.request.invalid_username' => 'Το όνομα χρήστη ή η διεύθυνση ηλεκτρονικού ταχυδρομείου "% username%" δεν υπάρχει.',
    'resetting.request.username' => 'Όνομα χρήστη ή διεύθυνση e-mail',
    'resetting.request.submit' => 'Επαναφορά του κωδικού πρόσβασης',
    'resetting.reset.submit' => 'Αλλαγή κωδικού πρόσβασης',
    'resetting.flash.success' => 'Η επαναφορά του κωδικού πρόσβασης έγινε με επιτυχία',
    'resetting.email.subject' => 'Επαναφορά του κωδικού πρόσβασης',
    'resetting.email.message' => 'Αγαπητέ %username%!

  Για να επαναφέρετε τον κωδικό πρόσβασής σας - επισκεφθείτε %confirmationUrl%

Ευχαριστούμε πολυ.
',
    'layout.logout' => 'Αποσύνδεση',
    'layout.login' => 'Σύνδεση',
    'layout.register' => 'Εγγραφή',
    'layout.logged_in_as' => 'Έχετε συνδεθεί ως %username%',
    'form.group_name' => 'Όνομα ομάδας',
    'form.username' => 'Όνομα Χρήστη',
    'form.email' => 'Email',
    'form.current_password' => 'Τρέχον κωδικός πρόσβασης',
    'form.password' => 'Κωδικός πρόσβασης',
    'form.password_confirmation' => 'Επαλήθευση',
    'form.new_password' => 'Νέος Κωδικός πρόσβασης',
    'form.new_password_confirmation' => 'Επαλήθευση',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => '[-Inf,Inf]The username is too short',
    'fos_user.username.long' => '[-Inf,Inf]The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => '[-Inf,Inf]The email is too short',
    'fos_user.email.long' => '[-Inf,Inf]The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => '[-Inf,Inf]The password is too short',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => '[-Inf,Inf]The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => '[-Inf,Inf]The name is too short',
    'fos_user.group.long' => '[-Inf,Inf]The name is too long',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Log in',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Log out',
    'layout.login' => 'Log in',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
  'messages' => 
  array (
    'coresphere_console.headline.index' => 'Console',
    'coresphere_console.working_directory' => 'Working directory',
    'coresphere_console.environment' => 'Environment',
    'coresphere_console.welcome_message' => 'Type %command% to get a list of all commands.',
    'coresphere_console.loading' => 'Loading...',
    'coresphere_console.suggestion_head' => 'Did you mean:',
    'coresphere_console.empty_response' => 'Complete!',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
