<h1 class="my-5 text-center">Number images in <?php echo Config::getParams('app_name'); ?>: </h1>

<h2 id="number" class="text-center">Click Images button</h2>

<hr class="my-4">

<div class="text-center">
    <button type="button" onclick="buttonImages();" class="btn btn-lg btn-dark">Images</button>

    <script>

        function buttonImages() {
            var httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("number").innerHTML = this.responseText;
                }
            };
            httpRequest.open("POST", "<?php echo Config::getParams('url'); ?>?page=home&action=images", true);
            httpRequest.send();
        }

    </script>

</div>
