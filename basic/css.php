<div class="title">Css integration</div>

<h1 center>
    <?php
    echo 'Hello ';
    echo '<small>';
    echo 'world';
    echo '</small>';
    ?>
</h1>

<br>

<?= "<div center blue>Another way to express myself</div>" ?>
<br>

<div center><button><?= "Cool" ?></button></div>

<style>
    button {
        padding: 5px 20px;
        background-color: purple;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
        border: 2px solid #000;
    }

    [center] {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    [blue] {
        color: #4286f4;
    }
</style>