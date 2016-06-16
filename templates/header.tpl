<header class="navbar navbar-default navbar-fixed-top" id="fixed-masthead">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10" id="navbar-header-col">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header" id="fixed-navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" id="navbar-header-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                Menu | <i class="glyphicon glyphicon-search"></i>
                            </button>
                            <div id="navbar-brand" class="navbar-brand padded-15">
                                <a href="/">
                                    <img src="//www.nmsu.edu/resources/images/nmsu-logo.png" alt="NMSU Logo" class="hidden-xs" id="nmsu-logo">
                                    <img src="//www.nmsu.edu/resources/images/nmsu-logo-small.png" class="visible-xs" id="nmsu-logo-xs" alt="NMSU Logo">
                                </a>
                                <a href="{$DepartmentLink}" id="navbar-dept-link">
                                    {$DepartmentName}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <form action="//www.nmsu.edu/search_results.php" method="POST" id="site-search" class="form-search navbar-form navbar-right" role="search">
                                <div class="form-group has-feedback" role="search">
                                    <label class="sr-only" for="search-query">Search</label>
                                    <input name="q" type="text" id="search-query" title="Site Search" class="form-control" placeholder="Type a Keyword">
                                    <span class="glyphicon glyphicon-search form-control-feedback text-muted" aria-hidden="true"></span>
                                    <button name="submit_search" type="submit" id="searchButton" class="searchButton sr-only" value="Search" title="Submit Search"></button>
                                    <input type="hidden" name="domains" value="nmsu.edu">
                                    <input type="hidden" name="sitesearch" value="nmsu.edu">
                                </div>
                            </form>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            {include 'navigation.tpl'}
        </header>