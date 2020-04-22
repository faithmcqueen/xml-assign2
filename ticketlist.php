<?php
include "includes/header.php";
//Load the XML doc
$xml = new DOMDocument();
$xml->preserveWhiteSpace = false;
$xml->formatOutput = true;
$xml->load("xml/supporttickets.xml");

//Get ticket elements
$ids = $xml->getElementsByTagName('id');
$dates = $xml->getElementsByTagName("date");
$statuses = $xml->getElementsByTagName("status");
$userids = $xml->getElementsByTagName("userid");
$subjects = $xml->getElementsByTagName("subject");
$messages = $xml->getElementsByTagName("message");
$tickets = $xml->getElementsByTagName("ticket");

//Create our for loop to run through all tickets in the DOM
for ($i = 0; $i < $tickets->length; $i++) {
    echo '<div class="ticket">
            <div class="ticketcontent">
            <p>Ticket ID: ' . $id = $ids->item($i)->nodeValue .'</p>
            <p> Ticket Submitted: '. $date = $dates->item($i)->nodeValue . '</p>
            <p> Status: ' . $status = $statuses->item($i)->nodeValue . '</p>
            <p> User ID: '. $userid = $userids->item($i)->nodeValue . '</p>
            <p> Subject: '. $subject = $subjects->item($i)->nodeValue . '</p>
            <p> Details: ' . $message = $messages->item($i)->nodeValue . '</p>' .
            '<form action="ticketdetails.php" method="POST">
            <input type="hidden" name="id" value="<?= $ids->item($i)->nodeValue; ?>" />
            <input type="submit" value="More Details" name="showTicket" id="showTicket" class="btn btn-outline-dark" />
            </form>
            </div>
            </div>';
}



?>
<?php include "includes/footer.php"; ?>


