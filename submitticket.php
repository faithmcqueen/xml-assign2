<?php

if (isset($_POST['submitbtn'])) {
    
//add a new <person> to people
$person = $xmldoc->createElement("person");
$person->setAttribute("occupation", "spy");
$name = $xmldoc->createElement("name");
//create first and last name
$firstname = $xmldoc->createElement("firstname", "Sterling");
$lastname = $xmldoc->createElement("lastname", "Archer");
$name->appendChild($firstname);
$name->appendChild($lastname);
$person->appendChild($name);
//append <person> to <people>
$xmldoc->documentElement->appendChild($person);
}

include "includes/header.php";
?>
<div class="container-sm">
    <h1 class="pgtitle">Submit a Support Ticket</h1>
    <div class="formwrap">
        <form method="post" action="" id="supportform" enctype="multipart/form-data">
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" id="category" class="form-control">
                    <option value="PurchasingOrders">Purchasing Orders</option>
                    <option value="ProductReturns">Product Returns</option>
                    <option value="ProductInquiry">Product Inquiry</option>
                    <option value="WholesaleInquiry">Wholesale Inquiry</option>
                </select>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" class="form-control" />
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="imgupload">Screenshots or Images:</label>
                <input type="file" class="form-control-file" id="imgupload" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-outline-dark" id="submitbtn" name="submitbtn" value="Submit Ticket" />
            </div>
        </form>
    </div>
</div>
<?php include "includes/footer.php"; ?>
