<div class="title">Map & Filter</div>

<?php
$notes = [5.8, 7.3, 9.8, 6.7];
$finalNotes1 = [];

foreach($notes as $note) {
    $finalNotes1[] = round($note);
}

print_r($finalNotes1);

echo '<br>';
$finalNotes = array_map('round', $notes);
print_r($finalNotes);

$onlyTheApproved1 = [];
foreach($notes as $note) {
    if($note >= 7) {
        $onlyTheApproved1[] = $note;
    }
}

echo '<br>';
print_r($onlyTheApproved1);

function approved($note) {
    return $note >= 7;
}

echo '<br>';
$onlyTheApproved2 = array_filter($notes, 'approved');
print_r($onlyTheApproved2);

function coolCalculation($note) {
    $noteFinal = round($note) + 1;
    return $noteFinal > 10 ? 10 : $noteFinal;
}

echo '<br>';
$notesFinais3 = array_map('coolCalculation', $notes);
print_r($notesFinais3);