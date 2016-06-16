            <nav role="navigation">
                <ol class="breadcrumb"> 
                    <li><a href="http://nmsu.edu">Home</a></li>
                    {foreach $Breadcrumbs as $Crumb}
                    <li><a href="{$Crumb[1]}">{$Crumb[0]}</a></li>
                    {/foreach}
                </ol>
            </nav>