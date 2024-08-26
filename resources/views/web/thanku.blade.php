<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>

    <style>
        .thank-you-page {
            text-align: center;
            padding: 50px;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .thank-you-page h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .thank-you-page p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .thank-you-page .contact-info {
            font-weight: bold;
            font-size: 20px;
            color: #007bff;
        }
        .thank-you-page img {
            margin-top: 20px;
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="thank-you-page">
        <h1>Thank you for your booking!</h1>
        <p>We have received your request and are now processing it.</p>
        <p>Our team will contact you shortly to confirm the details.</p>
        <p>If you need further assistance, please feel free to call us at <span class="contact-info">[{{  $thanku->contact  }}]</span>.</p> <span class="contact-info">[{{  $thanku->user_name  }}]</span>.
        <p>We appreciate your trust in us and look forward to serving you.</p>

        <!-- Add your company logo or another relevant image here -->
                                                <a
                                                    href="{{asset($thanku->image)}}">
                                                    <img width="200"
                                                        height="200" src="{{ asset($thanku->image) }}"
                                                        class="wp-post-image" alt="" title="img6" data-caption=""
                                                    />
                                                </a>
        <!-- Additional details about your company -->
        <p>Best regards,<br>[AgriConnect PVT LTD]</p>
        <p>Your company address: [COMSATS University]</p>
        <p>Email us at: <a href="mailto:your-email@example.com">your-email@example.com</a></p>
        <p>Follow us on social media:</p>
        <p>
            <a href="https://facebook.com/yourpage" target="_blank">Facebook</a> |
            <a href="https://twitter.com/yourpage" target="_blank">Twitter</a> |
            <a href="https://instagram.com/yourpage" target="_blank">Instagram</a>
        </p>
    </div>
</body>
</html>
