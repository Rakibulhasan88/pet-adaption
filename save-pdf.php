<?php
require 'dompdf/vendor/autoload.php';
require 'config.php';

use Dompdf\Dompdf;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $name  = htmlspecialchars($_POST['adopter_name'] ?? '');
    $pet   = htmlspecialchars($_POST['pet_name'] ?? '');
    $type  = htmlspecialchars($_POST['pet_type'] ?? '');
    $date  = htmlspecialchars($_POST['adoption_date'] ?? '');
    $email = htmlspecialchars($_POST['contact_email'] ?? '');

    // Save to DB
    $stmt = $conn->prepare("INSERT INTO adoptions (adopter_name, pet_name, pet_type, adoption_date, contact_email) VALUES (?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sssss", $name, $pet, $type, $date, $email);
        $stmt->execute();
        $stmt->close();
    } else {
        die("Database error: " . $conn->error);
    }
    $conn->close();

    // HTML for PDF
    $html = "
        <style>
            body { font-family: DejaVu Sans, sans-serif; }
            h2 { text-align: center; }
            p { line-height: 1.6; }
        </style>
        <h2>Pet Adoption Agreement</h2>
        <p><strong>Adopter Name:</strong> $name</p>
        <p><strong>Pet Name:</strong> $pet</p>
        <p><strong>Pet Type:</strong> $type</p>
        <p><strong>Adoption Date:</strong> $date</p>
        <p><strong>Contact Email:</strong> $email</p>
        <hr>
        <p>
            By signing this form, the adopter agrees to take full responsibility for the pet and provide necessary care,
            food, shelter, and medical attention. This agreement confirms that the pet is being adopted in good faith.
        </p>
        <p style='margin-top: 50px;'>__________________________<br>Adopter Signature</p>
    ";

    // Generate PDF
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Pet_Adoption_Agreement.pdf", ["Attachment" => false]);
    exit;
} else {
    echo "Invalid request.";
}