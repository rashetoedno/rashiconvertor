<?php
include("inc/header.php");
?>
   
            <div class="vsbuttonob">
                <div class="buttonob" id="btsn">
                    <div class="buton">
                        <a class="atr" id="atrsn" href="index.php">НАЧАЛО</a>
                    </div>
                </div>
            </div>
        <br>
        <br>
<div class="converter">
    <div class="euro">
        <h2>евро</h2>
        <input type="number" id="euroInput">
        <br>
        <br>
        <button class="btn" id="euroBtn">Конвертиране в левове</button>
    </div>
    <div class="bgn">
        <h2>лв</h2>
        <input type="number" id="bgnInput">
        <br>
        <br>
        <button class="btn" id="bgnBtn">Конвертиране в евро</button>
    </div>
</div>

<?php
include("inc/footer.php");
?>


<script src="script.js"></script>