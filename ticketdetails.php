<?php
include "includes/header.php";

    //Get the ID of the ticket to show details
    if(isset($_POST['showTicket'])) {
        $id = $_POST['id'];

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

        if ($id === $ids) {



            echo '<div class="ticket">
            <div class="ticketcontent">
            <p>Ticket ID: ' . $id = $ids->nodeValue .'</p>
            <p> Ticket Submitted: '. $date = $dates->nodeValue . '</p>
            <p> Status: ' . $status = $statuses->nodeValue . '</p>
            <p> User ID: '. $userid = $userids->nodeValue . '</p>
            <p> Subject: '. $subject = $subjects->nodeValue . '</p>
            <p> Details: ' . $message = $messages->nodeValue . '</p>' .
            '<form action="ticketdetails.php" method="POST">
            <input type="hidden" name="id" value="<?= $ids->item($i)->nodeValue; ?>" />
            <input type="submit" value="More Details" name="showTicket" id="showTicket" class="btn btn-outline-dark" />
            </form>
            </div>
            </div>';
        }

    }

include "includes/footer.php"; ?>