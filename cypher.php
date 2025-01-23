<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encrypt & Decrypt by Caeser Cipher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Encrypt & Decrypt by Caeser Cipher</h2>
        <form method="post" class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3">
                <label for="text" class="form-label">Text </label>
                <input type="text" name="text" id="text" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="shift" class="form-label">Shift</label>
                <input type="number" name="shift" id="shift" class="form-control" required>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" name="action" value="encrypt" class="btn btn-primary mx-2">Encrypt</button>
                <button type="submit" name="action" value="decrypt" class="btn btn-danger mx-2">Decrypt</button>
            </div>
        </form>

        <h3 class="mt-4">Result :</h3>
        <p class="alert alert-info">
            <?php
                
                function caesar_cipher($text, $shift, $action) {
                    $result = '';
                    $shift = $action == 'decrypt' ? -$shift : $shift; 

                    foreach (str_split($text) as $char) {
                        if (ctype_upper($char)) {
                            $result .= chr((ord($char) - ord('A') + $shift) % 26 + ord('A'));
                        }
                        elseif (ctype_lower($char)) {
                            $result .= chr((ord($char) - ord('a') + $shift) % 26 + ord('a'));
                        }
                        else {
                            $result .= $char;
                        }
                    }

                    return $result;
                }

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $text = $_POST['text'];
                    $shift =  $_POST['shift'];
                    $action = $_POST['action'];

                    $result = caesar_cipher($text, $shift, $action);
                    echo "Result : " . $result;
                }
            ?>
        </p>
    </div>

    <!-- إضافة سكربتات Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
