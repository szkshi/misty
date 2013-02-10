<?php
/**
 * Profiler
 *
 * print [profile] link at the bottom of page if xhprof installed.
 *
 * usage:
 *
 * // at bootstrap
 * include /path/to/profile.php
 *
 * @package BEAR.Package
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
$outputDir = ini_get('xhprof.output_dir');
if (! $outputDir) {
    ini_set('xhprof.output_dir', sys_get_temp_dir());
}
$enable = extension_loaded('xhprof') && (PHP_SAPI !== 'cli');
if ($enable){
    // start
    xhprof_enable(XHPROF_FLAGS_NO_BUILTINS | XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY);
    // stop
    register_shutdown_function(function () {
            $xhprof = xhprof_disable();
            if (! $xhprof) {
                return;
            }
            require_once dirname(__DIR__) . '/vendor/facebook/xhprof/xhprof_lib/utils/xhprof_lib.php';
            require_once dirname(__DIR__) . '/vendor/facebook/xhprof/xhprof_lib/utils/xhprof_runs.php';
            $id = (new XHProfRuns_Default)->save_run($xhprof, 'sunday');
            if ($id) {
                echo "<a style=\"position:absolute;right:20px; bottom:10px;\" class=\"btn btn btn-mini\" href=\"/_dev/xhprof_html/index.php?run={$id}&source=sunday\" target=\"_blank\">PROFILE</a>\n";
            }
        });
}