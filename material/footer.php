<?php defined('ROOT') OR exit('No direct script access allowed'); ?>
</div>
</div>
<footer id="footer" class="page-footer">
    <div id="footer_content" class="container">
        <?php $core->callHook('footer'); ?>
    </div>
    <div class="footer-copyright">
        <div class="container">
        <p>
            <a target='_blank' href='https://github.com/99kocms/'>Just using 99ko</a> - Thème <?php show::theme(); ?> - <a rel="nofollow" href="<?php echo ADMIN_PATH ?>">Administration</a>
        </p>
        <?php $core->callHook('endFooter'); ?>
        </div>
    </div>
</footer>

<?php $core->callHook('endFrontBody'); ?>
</body>
</html>