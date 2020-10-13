<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .link_obf {
            text-decoration: none;
            cursor: pointer;
            color: #337ab7;
        }
    </style>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
<h1>L’obfuscation de liens</h1>
Bonjour je suis un <span class="link_obf" data_obf="<?= str_rot13('monlien.html') ?>">lien obfusqué</span>
<script src="app.js"></script>
</body>
</html>