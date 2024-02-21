{{-- smileys/index.blade.php --}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de smileys</title>
    <!-- Bootstrap CSS (facultatif, pour une meilleure apparence) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            font-family: 'Noto Color Emoji', sans-serif;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Page de smileys</h1>

    <div class="row">
        @foreach ($smileys as $smiley)
            <div class="col-md-3">
                <span style="font-size: 24px;">{!! $smiley !!};</span>
            </div>
        @endforeach
    </div>
</div>

<!-- Bootstrap JavaScript (facultatif, pour une meilleure apparence) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
