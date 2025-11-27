<?php


function excerpt($text, $length = 100) {
    return mb_substr($text, 0, $length) . "...";
}


function getPostById($posts, $id) {
    foreach ($posts as $post) {
        if ($post["id"] == $id) {
            return $post;
        }
    }
    return null;
}


function printFormData($data) {
    echo '<div class="card form-output">';
    echo '<h3 class="card-title">Odeslaná data</h3>';
    echo '<div class="form-output-list">';

    foreach ($data as $key => $value) {
        $label = ucfirst($key);
        echo '
            <div class="form-output-item">
                <span class="form-output-key">' . htmlspecialchars($label) . ':</span>
                <span class="form-output-value">' . nl2br(htmlspecialchars($value)) . '</span>
            </div>
        ';
    }

    echo '</div>';
    echo '</div>';
}

