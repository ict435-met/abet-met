{include 'head.tpl'}
    <body class="fix-top">
        <a href="#content" class="sr-only sr-only-focusable">Skip to main content</a>
        {include 'header.tpl'}
        <div class="clearfix visible-lg-block visible-md-block visible-sm-block"></div>

        <section id="hero" class="cover-bg">
            <div class="container">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <div class="page-header text-center">
                        <p class="h1 shadowed">MET</p>
                    </div>
                    <p class="lead shadowed">
                        Mechanical Engineering Technology
                    </p>
                </div>
            </div>
        </section>
        
        
        <!-- Fixed navbar 
       ================================================== -->
        <nav class="navbar navbar-inverse hidden-xs" id="affix-nav">
            <div class="container">
                <ul id="affix-ul" class="nav nav-justified">
		{foreach $Sections as $Section}
                    <li{if $Section@first} class="active"{/if}><a href="#section_{$Section.title|replace:' ':'-'}">{$Section.title}</a></li>
		{/foreach}
                </ul>
            </div>
        </nav>
        
        <!-- Interior Content Begins - 3rd Level
        ================================================== -->
        <div class="container">
            {include 'breadcrumbs.tpl'}
            <div class="row">
                <div id="content" class="col-sm-12" role="main">
                    <h1>Objectives and Outcomes <small>2016-2017</small></h1>
                    {foreach $Sections as $Section}
                    <article id="section_{$Section.title|replace:' ':'-'}">
                        <h2>{$Section.title}</h2>
                        {$Section.content}
                    </article>
                    {/foreach}
                </div>  
            </div><!-- end of row -->
        </div><!-- end of container -->
        <br class="clearfix" />
{include 'footer.tpl'}