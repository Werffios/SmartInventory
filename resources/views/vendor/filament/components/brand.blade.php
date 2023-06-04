<div x-init="setSvgFill" x-init="setSvgFill">
    <x-application-logo width="120px" id="my-svg2" />
    <script>
        function setSvgFill() {
            var svg = document.getElementById('my-svg2');
            if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
                svg.style.fill = "white";
            } else {
                svg.style.fill = "black";
            }
        }

        setSvgFill(); // para establecer el valor de fill al cargar la página
        window.matchMedia("(prefers-color-scheme: dark)").addListener(setSvgFill);
    </script>
</div>
