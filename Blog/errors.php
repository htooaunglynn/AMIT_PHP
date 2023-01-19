<?php
    if (count($errors) > 0) {
        foreach ($errors as $key => $error) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>$error</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        }
    } else {

    }
