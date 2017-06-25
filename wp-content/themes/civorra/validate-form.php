<?php
    foreach ($_POST as $categoryLabel => $categoryData) {
        echo "<h2>" . $categoryLabel . "</h2>";
        echo "<ul>";
        foreach ($categoryData as $label => $value) {
            echo "<li>" . $label . "</li>";
        }
        echo "</ul>";
    }