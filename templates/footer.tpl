        <footer>
            <hr />
            <!-- Bottom Footer
            ================================================== -->
            <section id="section5" class="bg-5 text-center">
                <img src="{$smarty.const.SITE_ROOT}images/bottom-tagline.png" width="480" height="136" alt="New Mexico State University, All About Discovery" class="img-responsive center-block">
                <hr>
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/newmexicostateuniversity">
                            <img alt="New Mexico State University Facebook" src="{$smarty.const.SITE_ROOT}images/icn_facebook_32.png" />
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/nmsu">
                            <img alt="New Mexico State University Twitter" src="{$smarty.const.SITE_ROOT}images/icn_twitter_32.png" />
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/user/NewMexicoStateU">
                            <img alt="New Mexico State University YouTube" src="{$smarty.const.SITE_ROOT}images/icn_youtube_32.png" />
                        </a>
                    </li>
                </ul>
                <address>
                    <ul class="list-inline separated">
                        <li>New Mexico State University</li>
                        <li>Las Cruces, NM</li>
                        <li>(575) 646-0111</li>
                    </ul>
                </address>
                <hr />
                <nav role="navigation">
                    <ul class="list-inline separated">
                        <li><a title="General Information: Contact Us" href="#">Contact Us</a></li>
                        <li><a title="General Information: Copyright" href="#">Copyright</a></li>
                        <li><a title="General Information: Privacy" href="#">Privacy</a></li>
                        <li><a title="General Information: Emergency Information" href="#">Emergency Information</a></li>
                        <li><a title="Search for Employment and Careers" href="http://jobs.nmsu.edu">Employment Opportunities</a></li>
                    </ul>
                </nav>
            </section>

            <!-- Legal and Copyright
            ================================================== -->
            <div id="copyright" class="bg-primary" role="contentinfo">
                <div class="padded-15">
                    © 2016 New Mexico State University - Board of Regents
                </div>
            </div>
        </footer>

        <!-- Scroll to Top
        ================================================== -->
        <ul class="nav pull-right fixed-bottom-right" id="scroll-top">
            <li><a href="#" title="Scroll to top" aria-label="Scroll to top"><span class="glyphicon glyphicon-chevron-up"></span><span class="sr-only">Scroll to Top</span></a></li>
        </ul>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//www.nmsu.edu/resources/js/jquery-2.1.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="//www.nmsu.edu/resources/js/bootstrap.min.js"></script>
        <script src="//www.nmsu.edu/resources/js/getPosition.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.5.0/holder.min.js"></script>
        <script src="//www.nmsu.edu/resources/js/fixtop.min.js"></script> <!-- Support for fixed top header -->
        
        {literal}<script>
            function offset_top2() {
                return ($("#fixed-masthead").innerHeight()+$("#affix-nav").innerHeight()+20);
            }
            /* highlight the top nav as scrolling occurs */
            $('body').scrollspy({target: '#affix-nav', offset: offset_top2()});

            /* smooth scrolling for scroll to top */
            $('#scroll-top').click(function () {
                $('body,html').animate({scrollTop: 0}, 1000);
            });

            /* smooth scrolling for nav sections */
            $('#affix-ul li>a').click(function (event) {
                event.preventDefault();
                var link = $(this).attr('href');
                var posi = $(link).offset().top-$("#fixed-masthead").innerHeight()-60;
                $('body,html').animate({scrollTop: posi}, 700);
            });

            /* smooth scrolling for side nav sections */
            $('.smoothscroll a').click(function (event) {
                event.preventDefault();
                var link = $(this).attr('href');
                var posi = $(link).offset().top-$("#fixed-masthead").innerHeight()-60;
                $('body,html').animate({scrollTop: posi}, 700);
            });
            
            /* affix nav bounding */
            var offset_top = function () {
                var content_top = getOffsetRect(document.getElementById("content")).top;
                var fixed_top = $("#fixed-masthead").innerHeight();
                var total_top = content_top - fixed_top - 100;
                return total_top;
            };
            var offset_bottom = function () {
                var content_top = offset_top();
                var section_height = $("#content").outerHeight();
                var fixed_top = $("#fixed-masthead").innerHeight();
                var content_bottom = $("body").outerHeight() - (content_top + section_height) - fixed_top+60;
                return content_bottom;
            }
            function checkAffix() {
                $("#affix-nav").affix('checkPosition');
                $("#affix-nav.affix").css({top: $("#fixed-masthead").innerHeight()});
            }
            $(document).ready(function() {
                $("#affix-nav").affix({offset: {top: offset_top, bottom: offset_bottom}});
                $("#affix-nav").on("affixed.bs.affix", function() {
                    $("#affix-nav").css({top: $("#fixed-masthead").innerHeight()});
                });
                $("#affix-nav").on("affixed-top.bs.affix", function() {
                    $("#affix-nav").css({top: ""});
                });
                $(window).on("nmsu.scrollShift.bottomWide", checkAffix);
            });
            
            /* catch iOS devices */
            if (/iPad|iPhone|iPod/.test(navigator.userAgent)) $("body").addClass("ios");
        </script>{/literal}
    </body>
</html>
