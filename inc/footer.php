<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


        
        <!-- Footer -->
        <div id="main">
        <footer id="footer">
            <div class="inner">
                <ul class="icons">
                    <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; <?php echo Date('Y'); ?>&nbsp;<?php $this->options->title(); ?></li>
                    <li>THEME : <a href="https://github.com/kaygb/typecho-theme-Forty" target="_blank" rel="nofollow">Forty</a></li>
                    <li>Design : <a href="http://html5up.net" target="_blank" rel="nofollow">HTML5 UP</a></li>
                    <?php $this->options->footer(); ?>
                </ul>
            </div>
        </footer>
        </div>

        <!-- endwrapper -->
    </div>
    <!-- Scripts -->
    <script src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('assets/js/jquery.scrolly.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('assets/js/jquery.scrollex.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('assets/js/browser.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('assets/js/breakpoints.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('assets/js/util.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('assets/js/main.js'); ?>"></script>

</body>

</html>