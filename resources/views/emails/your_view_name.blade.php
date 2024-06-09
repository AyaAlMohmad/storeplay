<!DOCTYPE html>
<html>
<head>
    <style>
        /* أساسيات التصميم */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
       .email-container {
            width: 80%;
            max-width: 600px;
            margin: auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        h1, h2, p {
            color: #333;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 18px;
            margin-bottom: 20px;
        }
        p {
            line-height: 1.6;
            text-align: justify;
        }
       .signature {
            font-style: italic;
            text-align: right;
            color: #666;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>{{ $data['subject'] }}</h1>
     
        {{  $data['body'] }}
        <div class="signature">
            Best regards,<br>
    admin
        </div>
    </div>
</body>
</html>
