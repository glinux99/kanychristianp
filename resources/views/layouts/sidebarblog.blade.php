<!-- left part END -->
                        <!-- Side bar start -->
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                            <aside  class="side-bar sticky-top">
                                <div class="widget">
                                    <h5 class="widget-title style-1">Chercher</h5>
                                    <div class="search-bx style-1">
                                        <form role="search" method="post">
                                            <div class="input-group">
                                                <input name="text" class="form-control" placeholder="Entrer votre mot..." type="text">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="fas fa-search text-primary"></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget recent-posts-entry">
                                    <h5 class="widget-title style-1">Publication recente</h5>
                                    <div class="widget-post-bx">
                                        @for ($i=0; $i<3; $i++)
                                        <div class="widget-post clearfix">
                                            <div class="dlab-post-media">
                                                <img src="assets/images/main-slider/images3.jpg" width="200" height="143" alt="">
                                            </div>
                                            <div class="dlab-post-info">
                                                <div class="dlab-post-meta">
                                                    <ul>
                                                        <li class="post-date"> <strong>13 Aug</strong> </li>
                                                        <li class="post-author"> By <a href="javascript:void(0);">Linux </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="dlab-post-header">
                                                    <h6 class="post-title"><a href="blog-single-left-sidebar.html">How To Get People To Like Industry</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                                <div class="widget widget-newslatter">
                                    <h5 class="widget-title style-1">Newsletter</h5>
                                    <div class="news-box">
                                        <p>Entrez votre addresse email pour recevoir nos rencente publication.</p>
                                        <form class="dzSubscribe" action="/" method="post">
                                            <div class="dzSubscribeMsg"></div>
                                            <div class="input-group">
                                                <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Votre addresse Email">
                                                <button name="submit" value="Submit" type="submit" class="site-button btn-block radius-no">Subscrivez maintenant</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget widget_gallery gallery-grid-4">
                                    <h5 class="widget-title style-1">Notre gallerie</h5>
                                    <ul id="lightgallery" class="lightgallery">
                                        @for ($i=0 ; $i<7;$i++)
                                        <li>
                                            <div class="dlab-post-thum dlab-img-effect">
                                                <span data-exthumbimage="assets/images/main-slider/images3.jpg" data-src="assets/images/main-slider/images3.jpg" class="check-km" title="Image 1 Title will come here">
                                                    <img src="assets/images/main-slider/images3.jpg" alt="">
                                                </span>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="widget widget_archive">
                                    <h5 class="widget-title style-1">Liste d'auteurs</h5>
                                    <ul>
                                        <li><a href="javascript:void(0);">Joseph Blallter</a></li>
                                        <li><a href="javascript:void(0);">Lion Daniel</a></li>
                                        <li><a href="javascript:void(0);">Matou Samuel</a></li>
                                    </ul>
                                </div>
                                <div class="widget widget-project">
                                    <h5 class="widget-title style-1">Nos projet</h5>
                                    <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                        @for ($i=0; $i<3; $i++)
                                        <div class="item"><img src="assets/images/main-slider/images1.jpg" alt=""></div>
                                        @endfor
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <!-- Side bar END -->
