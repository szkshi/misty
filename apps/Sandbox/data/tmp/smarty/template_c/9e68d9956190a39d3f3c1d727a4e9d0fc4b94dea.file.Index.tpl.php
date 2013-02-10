<?php /* Smarty version Smarty-3.1-DEV, created on 2013-02-10 02:07:50
         compiled from "/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/Page/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1249776138511682660167b9-75007456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e68d9956190a39d3f3c1d727a4e9d0fc4b94dea' => 
    array (
      0 => '/Users/shuhei/Documents/web/github/misty/bear/apps/Sandbox/Resource/Page/Index.tpl',
      1 => 1360424236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1249776138511682660167b9-75007456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'greeting' => 0,
    'apc' => 0,
    'version' => 0,
    'extensions' => 0,
    'is_cli_server' => 0,
    'performance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5116826606fd54_32803036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5116826606fd54_32803036')) {function content_5116826606fd54_32803036($_smarty_tpl) {?><?php if (!is_callable('smarty_function_href')) include '/Users/shuhei/Documents/web/github/misty/bear/src/BEAR/Package/Provide/TemplateEngine/Smarty/plugin/function.href.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BEAR.Sunday</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BEAR, a resource oriented framework">
    <meta name="author" content="Akihito Koriyama">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Subrayada' rel='stylesheet' type='text/css'>
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;

        }
        .effect {
            color: white;
            text-shadow: 4px 4px 12px #00BF7F, -3px -3px 8px #BF7F00
        }

        .sub-title {
            font-family: "Montserrat Subrayada" sans-serif;
        }

        .hero-unit h1 {
            color: white;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

<!-- Navbar
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </a>
            <a class="brand" href="#">BEAR.Sunday</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="mailto:koriyama@bear-project.net">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<!-- Subhead
================================================== -->
<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <h1 class="effect"><?php echo $_smarty_tpl->tpl_vars['greeting']->value;?>
</h1>

        <p class="sub-title">A Resource Oriented Framework for PHP5.4
            <a href="http://travis-ci.org/koriym/Ray.Di"><img src="https://secure.travis-ci.org/koriym/Ray.Di.png"></a>
        </p>

        <p><a class="btn btn-primary btn-large" href="https://github.com/koriym/BEAR.Sunday">View project on
            GitHub &raquo;</a>
            <a rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['apc']->value['size'];?>
 bytes of <?php echo $_smarty_tpl->tpl_vars['apc']->value['total'];?>
 user APC entries will be cleared."
               class="btn btn-primary btn-large btn btn-warning"
               href="/_dev/refresh.php"><i class="icon-refresh"></i> Refresh</a></p>
    </div>
    <!-- Example row of columns -->
    <div class="row">
        <div class="span4">
            <h2>Version</h2>
            <ul>
                <li>BEAR.Sunday <code><?php echo $_smarty_tpl->tpl_vars['version']->value['BEAR'];?>
</code></li>
                <li>BEAR.Package <code><?php echo $_smarty_tpl->tpl_vars['version']->value['Package'];?>
</code></li>
                <li>PHP <code><?php echo $_smarty_tpl->tpl_vars['version']->value['php'];?>
</code></li>
            </ul>
            <h2>Extension</h2>

            <h3>required</h3>
            <ul>
                <li><a href="http://www.php.net/curl">curl</a> <code><?php echo $_smarty_tpl->tpl_vars['extensions']->value['curl'];?>
</code></li>
                <li><a href="http://www.php.net/apc">apc</a> <code><?php echo $_smarty_tpl->tpl_vars['extensions']->value['apc'];?>
</code></li>
            </ul>
            <h3>optional</h3>
            <ul>

                <li><a href="http://xdebug.org/">Xdebug</a> <code><?php echo $_smarty_tpl->tpl_vars['extensions']->value['Xdebug'];?>
</code></li>
                <li><a href="http://www.php.net/xhprof">xhprof</a> <code><?php echo $_smarty_tpl->tpl_vars['extensions']->value['xhprof'];?>
</code></li>
                <li><a href="http://www.php.net/memcache">memcache <code><?php echo $_smarty_tpl->tpl_vars['extensions']->value['memcache'];?>
</code></li>
                <li><a href="http://www.php.net/pdo_sqlite">pdo_sqlite</a> <code><?php echo $_smarty_tpl->tpl_vars['extensions']->value['pdo_sqlite'];?>
</code></li>
                <li><a href="http://www.php.net/mysqlnd">mysqlnd</a> <code><?php echo $_smarty_tpl->tpl_vars['extensions']->value['mysqlnd'];?>
</code></li>
            </ul>
        </div>
        <div class="span4">
            <h2>Techniques</h2>
            <ul>
                <li>Dependency Injection</li>
                <li>Aspect Oriented Design</li>
                <li>Representational State Transfer</li>
            </ul>
            <p><code>Ray.Di</code> - Guice style annotation-driven dependency injection framework <a
                    href="http://travis-ci.org/koriym/Ray.Di"><img
                    src="https://secure.travis-ci.org/koriym/Ray.Di.png"></a></p>

            <p><code>Ray.Aop</code> package provides method interception. This feature enables you to write code that is
                executed each time a matching method is invoked. <a
                        href="http://travis-ci.org/koriym/Ray.Aop"><img
                        src="https://secure.travis-ci.org/koriym/Ray.Aop.png"></a></p>

            <p><code>BEAR.Resource</code> - RESTful service layer framework. <a
                    href="http://travis-ci.org/koriym/BEAR.Resource"><img
                    src="https://secure.travis-ci.org/koriym/BEAR.Resource.png"></a></p>
        </div>
        <div class="span4">
            <h2>Sample apps</h2>
            <ul>
                <li><a href="<?php echo smarty_function_href(array('rel'=>"helloworld"),$_smarty_tpl);?>
">Hello World</a></li>
                <li><a href="<?php echo smarty_function_href(array('rel'=>"blog"),$_smarty_tpl);?>
">Blog tutorial</a></li>
                <li><a href="<?php echo smarty_function_href(array('rel'=>"restbucks"),$_smarty_tpl);?>
">RESTBucks</a></li>
            </ul>
            <p><a class="btn" href="http://code.google.com/p/bearsunday/wiki/blog">Try tutorial &raquo;</a></p>

            <h2>Tools</h2>

            <p>
                <a class="btn" href="_dev/ide/index.php"
                   id="dev" rel="tooltip" title="Web IDE">Web IDE &raquo;</a>

            <?php if (!$_smarty_tpl->tpl_vars['is_cli_server']->value){?>
            <p>
                <a class="btn btn-success" href="/_dev/apc.php?SCOPE=A&SORT1=H&SORT2=D&COUNT=20&OB=3&object_only"
                   id="apc" rel="tooltip" title="APC stored object">APC
                    Objects &raquo;</a>
            </p>
            <a class="btn" href="_dev/apc.php" id="apc" rel="tooltip" title="Open APC admin control panel">APC
                Admin &raquo;</a>
            <p><a class="btn" href="_dev/memcache.php" id="memcache" rel="tooltip"
                  title="Open memcache admin carroll panel">Memcache Admin &raquo;</a>
            </p>
            <?php }?>
            <h2>Links</h2>
            <ul>
                <li><i class="icon-book"></i><a href="http://code.google.com/p/bearsunday/wiki/manual?tm=6">BEAR.Sunday
                    Manual</a></li>
                <li><i class="icon-book"></i><a href="http://code.google.com/p/rayphp/wiki/Motivation?tm=6">Ray.Di /
                    Ray.AOP Manual</a></li>
                <li><i class="icon-fire"></i><a href="https://github.com/koriym/BEAR.Sunday/issues">Issues</a></li>
                <li><i class="icon-wrench"></i><a href="_dev/index.html">Dev Tools</a></li>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; 2012 <a href="https://twitter.com/#!/bearsunday">@BEARSunday</a> (<?php echo $_smarty_tpl->tpl_vars['performance']->value;?>
 page / sec)</p>
        <p>Template Engine: Smarty</p>
    </footer>

</div>
<!-- /container -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap-tooltip.js"></script>
</body>
</html>
<?php }} ?>