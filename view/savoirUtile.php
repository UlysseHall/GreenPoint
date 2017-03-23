<link rel="stylesheet" href="asset/css/savoirUtile.css">

<div class="savoir-utile-container">
    <?php
        while($savoir = $savoirReq->fetch())
        {
        ?>
            
            <div class="info-utile">
                <p class="info-utile-header">
                    <?php echo(utf8_encode($savoir["header"])) ?>
                </p>
                
                <p class="info-utile-content">
                    <?php echo(utf8_encode($savoir["content"])) ?>
                </p>
            </div>
            
        <?php
        }
    ?>
</div>

<script src="asset/framwork/mouse/jquery.mousewheel.min.js"></script>
<script>
    $(function() {
        
        function scrollHorizontally(e) {
            e = window.event || e;
            var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
            document.documentElement.scrollLeft -= (delta*40); // Multiplied by 40
            document.body.scrollLeft -= (delta*200); // Multiplied by 40
            e.preventDefault();
        }
        if (window.addEventListener) {
            // IE9, Chrome, Safari, Opera
            window.addEventListener("mousewheel", scrollHorizontally, false);
            // Firefox
            window.addEventListener("DOMMouseScroll", scrollHorizontally, false);
        } else {
            // IE 6/7/8
            window.attachEvent("onmousewheel", scrollHorizontally);
        };
    });
</script>