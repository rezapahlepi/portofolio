
        <footer class="red darken-1 center ">
          <p class="flow-text">Muhamad Reza Pahlepi <?php echo date('Y'); ?> </p>
        </footer>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="view/js/materialize.min.js"></script>

    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators : false,
          height : 500,
          interval : 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialboxed = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxed);

        const scrollspy = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scrollspy, {
          scrollOffset : 50});

    </script>

  </body>
</html>
