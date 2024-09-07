<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode PHP</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            cursor: pointer;
            width: 30%;
            box-sizing: border-box;
            text-align: center; /* Center the text */
            overflow: hidden; /* Hide overflow content */
            transition: height 0.3s ease; /* Smooth transition for height */
        }
        .content {
            display: none;
            margin-top: 10px;
            overflow: auto; /* Ensure content can be scrolled */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Existing cards -->
        <!-- ... existing code ... -->

        <!-- New cards for each PHP file -->
        <div class="card" onclick="toggleContent('content4', this)">
            <h3>Operator</h3>
            <div id="content4" class="content">
                <pre>
<?php include 'operator.php'; ?>
                </pre>
            </div>
        </div>

        <div class="card" onclick="toggleContent('content5', this)">
            <h3>Operator 1</h3>
            <div id="content5" class="content">
                <pre>
<?php include 'operator1.php'; ?>
                </pre>
            </div>
        </div>

        <div class="card" onclick="toggleContent('content6', this)">
            <h3>Operator 2</h3>
            <div id="content6" class="content">
                <pre>
<?php include 'operator2.php'; ?>
                </pre>
            </div>
        </div>

        <div class="card" onclick="toggleContent('content7', this)">
            <h3>Tipe Data</h3>
            <div id="content7" class="content">
                <pre>
<?php include 'tipe_data.php'; ?>
                </pre>
            </div>
        </div>

        <div class="card" onclick="toggleContent('content8', this)">
            <h3>Tipe Data (2)</h3>
            <div id="content8" class="content">
                <pre>
<?php include 'tipedata.php'; ?>
                </pre>
            </div>
        </div>

        <div class="card" onclick="toggleContent('content9', this)">
            <h3>Variabel</h3>
            <div id="content9" class="content">
                <pre>
<?php include 'variabel.php'; ?>
                </pre>
            </div>
        </div>

        <div class="card" onclick="toggleContent('content10', this)">
            <h3>Variable 1</h3>
            <div id="content10" class="content">
                <pre>
<?php include 'variable1.php'; ?>
                </pre>
            </div>
        </div>
    </div>

    <script>
        function toggleContent(id, card) {
            var content = document.getElementById(id);
            if (content.style.display === "none" || content.style.display === "") {
                content.style.display = "block";
                card.style.height = card.scrollHeight + "px";
            } else {
                content.style.display = "none";
                card.style.height = "auto";
            }
        }
    </script>
</body>
</html>