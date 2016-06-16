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
                <div id="content" class="col-sm-12" role="main">
                    <h1>{$ContentTitle|default:'Title'}<small>{$ContentSubtitle|default:'Subtitle'}</small></h1>
                    {foreach $Sections as $Section}
                    <article id="section_{$Section.title|replace:' ':'-'}">
                        <h2>{if $Section.titleLink}<a href="{$Section.titleLink}">{/if}{$Section.title}{if $Section.titleLink}</a>{/if}</h2>
                        {$Section.content}
                    </article>
                    {/foreach}
                </div>
            </div><!-- end of row -->
        </div><!-- end of container -->

{include 'footer.tpl'}
