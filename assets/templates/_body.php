<?php
$number = 0;


echo '<body>
<div class="container-fluid">
        <div class="row m-5">';

    for($i=0; $i<10; $i++){

    echo    '<div class="card-sm col-md-3 me-auto mt-4 col-sm-4 col-6">
                <div class="card-header">Carte number : '.$number. '</div>
                <div class="card-body bg-secondary">
                    Hello, I\' m a card number ' . $number . '
                </div>
                <div class="card-footer">
                    C \'etais un test avec number :'.$number++.';
                </div>
            </div>
    ';
    }
echo ' </div>
</body>';