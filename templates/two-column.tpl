{include 'head.tpl'}
    <body class="fix-top">
        <a href="#content" class="sr-only sr-only-focusable">Skip to main content</a>

 {include 'header.tpl'}
        <div class="clearfix visible-lg-block visible-md-block visible-sm-block"></div>

        <!-- Interior Content Begins - 3rd Level
        ================================================== -->
        <div class="container">
            {include 'breadcrumbs.tpl'}
            <div class="row">
                <main id="content" class="col-sm-9 col-sm-push-3" role="main">
                    <h1>{$ContentTitle|default:'Title'}<small>{$ContentSubtitle|default:'Subtitle'}</small></h1>
                    {foreach $Sections as $Section}
                    <article id="section_{$Section.title|replace:' ':'-'}">
                        <h2>{$Section.title}</h2>
                        {$Section.content}
                    </article>
                    {/foreach}
                </main><!-- end of main -->  
            
                <aside id="sidebar" class="sidebar col-sm-3 col-sm-pull-9"> <!-- sidebar content is assumed to be supplemental and so written to render after main content outside of styling -->
                    <!--<h2>Links</h2>-->
                    <nav role="navigation">
                        <ul class="nav smoothscroll">
                            {foreach $Sections as $Section} 
                            <li><a href="#section_{$Section.title|replace:' ':'-'}">{$Section.title}</a></li>
                            {/foreach}
                        </ul>
                    </nav>
                </aside><!-- end of sidebar -->
            </div><!-- end of row -->
        </div><!-- end of container -->

{include 'footer.tpl'}
